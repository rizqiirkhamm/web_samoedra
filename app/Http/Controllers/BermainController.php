<?php

namespace App\Http\Controllers;

use App\Models\BermainModel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\PermissionRoleModel;
use Illuminate\Support\Facades\Auth;

class BermainController extends Controller
{
    public function index(Request $request)
    {
        // Check permission untuk akses Bermain
        $PermissionRole = PermissionRoleModel::getPermission(Auth::user()->role_id, 'Bermain');
        if(empty($PermissionRole)){
            abort(404);
        }

        // Get permission untuk Delete
        $data['PermissionDelete'] = PermissionRoleModel::getPermission(Auth::user()->role_id, 'Delete Bermain');

        // Update semua status terlebih dahulu
        $this->updateAllStatus();
        
        $perPage = $request->get('per_page', 3); // Default 3 items per page
        $query = BermainModel::query();
        
        // Filter berdasarkan status jika ada
        if ($request->has('status')) {
            $query->where('status', $request->status);
        }

        // Filter berdasarkan search jika ada
        if ($request->has('search')) {
            $query->where('name', 'LIKE', '%' . $request->search . '%');
        }

        $data['total_active'] = BermainModel::where('status', 'playing')->count();
        $data['total_today'] = BermainModel::whereDate('created_at', today())->count();
        $data['total_all'] = BermainModel::count();
        $data['bermain'] = $query->orderBy('start_datetime', 'desc')->paginate($perPage);
        $data['per_page'] = $perPage;

        return view('users.bermain', $data);
    }

    private function updateAllStatus()
    {
        $now = Carbon::now();
        
        // Update status waiting ke playing
        BermainModel::where('status', 'waiting')
            ->where('start_datetime', '<=', $now)
            ->where('end_datetime', '>', $now)
            ->each(function($bermain) use ($now) {
                $bermain->status = 'playing';
                $endDateTime = Carbon::parse($bermain->end_datetime);
                $bermain->remaining_time = $now->diffInSeconds($endDateTime);
                $bermain->save();
                
                \Log::info('Updated to playing:', [
                    'id' => $bermain->id,
                    'start' => $bermain->start_datetime,
                    'end' => $bermain->end_datetime,
                    'remaining_time' => $bermain->remaining_time
                ]);
            });

        // Update status playing ke finished jika sudah selesai
        BermainModel::where('status', 'playing')
            ->get()
            ->each(function($bermain) use ($now) {
                $endDateTime = Carbon::parse($bermain->end_datetime);
                
                if ($now->gte($endDateTime)) {
                    $bermain->status = 'finished';
                    $bermain->remaining_time = 0;
                    $bermain->save();
                }
                
                \Log::info('Updated playing status:', [
                    'id' => $bermain->id,
                    'status' => $bermain->status,
                    'remaining_time' => $bermain->remaining_time
                ]);
            });
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'phone' => 'required|string|max:15',
            'selected_time' => 'required',
            'duration' => 'required|integer|between:1,3',
            'day' => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu',
            'date' => 'required|date',
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('payment_proof')) {
            $file = $request->file('payment_proof');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/payment_proofs', $filename);
            $validated['payment_proof'] = $filename;
        }

        // Set status dan waktu
        $startDateTime = Carbon::parse($validated['date'] . ' ' . $validated['selected_time']);
        $endDateTime = $startDateTime->copy()->addHours($validated['duration']);

        $validated['status'] = 'waiting';
        $validated['start_datetime'] = $startDateTime;
        $validated['end_datetime'] = $endDateTime;
        $validated['remaining_time'] = $validated['duration'] * 3600;

        $bermain = BermainModel::create($validated);
        \Log::info('New record created:', [
            'id' => $bermain->id,
            'start' => $bermain->start_datetime,
            'end' => $bermain->end_datetime
        ]);

        return redirect()->route('bermain.index')
            ->with('success', 'Reservasi berhasil dibuat!');
    }

    public function updateTimer($id)
    {
        $bermain = BermainModel::findOrFail($id);
        $now = Carbon::now();

        if ($bermain->status === 'waiting') {
            if ($now->gte($bermain->start_datetime)) {
                $bermain->status = 'playing';
                $bermain->end_datetime = $bermain->start_datetime->copy()->addHours($bermain->duration);
                $bermain->remaining_time = $bermain->duration * 3600;
                $bermain->save();

                return response()->json([
                    'status' => 'playing',
                    'remaining_time' => $bermain->remaining_time
                ]);
            }
            return response()->json(['status' => 'waiting']);
        }

        if ($bermain->status === 'playing') {
            if ($now->gte($bermain->end_datetime)) {
                $bermain->status = 'finished';
                $bermain->remaining_time = 0;
                $bermain->save();

                return response()->json([
                    'status' => 'finished',
                    'remaining_time' => 0
                ]);
            }

            $bermain->remaining_time = $now->diffInSeconds($bermain->end_datetime);
            $bermain->save();

            return response()->json([
                'status' => 'playing',
                'remaining_time' => $bermain->remaining_time
            ]);
        }

        return response()->json([
            'status' => $bermain->status,
            'remaining_time' => $bermain->remaining_time
        ]);
    }

    public function destroy($id)
    {
        // Check permission untuk Delete Bermain
        $PermissionRole = PermissionRoleModel::getPermission(Auth::user()->role_id, 'Delete Bermain');
        if(empty($PermissionRole)){
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $bermain = BermainModel::findOrFail($id);
        $bermain->delete();

        return response()->json(['message' => 'Data berhasil dihapus']);
    }

    public function search(Request $request)
    {
        $this->updateAllStatus();
        
        $perPage = $request->get('per_page', 3);
        $query = $request->get('query');
        
        $results = BermainModel::where(function($q) use ($query) {
            $q->where('name', 'LIKE', '%' . $query . '%')
              ->orWhere('day', 'LIKE', '%' . $query . '%')
              ->orWhere('start_datetime', 'LIKE', '%' . $query . '%');
        });

        if ($request->has('status') && $request->status !== 'all') {
            $results->where('status', $request->status);
        }

        $paginated = $results->orderBy('start_datetime', 'desc')
                            ->paginate($perPage);

        // Format data sebelum dikirim ke response
        $formattedData = collect($paginated->items())->map(function($item) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'age' => $item->age,
                'day' => $item->day,
                'start_datetime' => Carbon::parse($item->start_datetime)->format('Y-m-d H:i:s'),
                'end_datetime' => Carbon::parse($item->end_datetime)->format('Y-m-d H:i:s'),
                'status' => $item->status,
                'duration' => $item->duration,
                'remaining_time' => $item->remaining_time
            ];
        });

        return response()->json([
            'data' => $formattedData,
            'current_page' => $paginated->currentPage(),
            'last_page' => $paginated->lastPage(),
            'per_page' => $perPage,
            'total' => $paginated->total()
        ]);
    }
}

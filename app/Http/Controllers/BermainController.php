<?php

namespace App\Http\Controllers;

use App\Models\BermainModel;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BermainController extends Controller
{
    public function index()
    {
        // Update status untuk semua record yang waktunya sudah tiba
        $this->updateAllStatus();
        
        $data = [
            'total_active' => BermainModel::where('status', 'playing')->count(),
            'total_today' => BermainModel::whereDate('created_at', today())->count(),
            'total_all' => BermainModel::count(),
            'bermain' => BermainModel::where('status', '!=', 'finished')
                ->orderBy('created_at', 'desc')
                ->get()
                ->map(function($item) {
                    $now = Carbon::now();
                    $today = Carbon::today();
                    $selectedTime = Carbon::parse($item->date)->setTimeFromTimeString($item->selected_time);
                    
                    if ($now->gte($selectedTime) && $item->status === 'waiting') {
                        // Update status jika sudah waktunya
                        $item->status = 'playing';
                        $item->start_time = $item->selected_time;
                        $endTime = $selectedTime->copy()->addHours($item->duration);
                        $item->end_time = $endTime->format('H:i:s');
                        $item->save();
                    }

                    if ($item->status === 'waiting') {
                        $item->display_time = 'Belum Mulai';
                        $item->remaining_time = 0;
                    } else if ($item->status === 'playing') {
                        $endTime = Carbon::parse($item->date)->setTimeFromTimeString($item->end_time);
                        if ($now->gte($endTime)) {
                            $item->status = 'finished';
                            $item->remaining_time = 0;
                            $item->display_time = 'Selesai';
                            $item->save();
                        } else {
                            $item->remaining_time = $now->diffInSeconds($endTime, false);
                            $item->display_time = gmdate('H:i:s', max(0, $item->remaining_time));
                        }
                    } else {
                        $item->display_time = 'Selesai';
                        $item->remaining_time = 0;
                    }
                    
                    return $item;
                })
        ];

        return view('users.bermain', $data);
    }

    private function updateAllStatus()
    {
        $now = Carbon::now();
        
        // Update status waiting ke playing jika waktunya sudah tiba
        BermainModel::where('status', 'waiting')
            ->get()
            ->each(function($bermain) use ($now) {
                $selectedTime = Carbon::parse($bermain->date)->setTimeFromTimeString($bermain->selected_time);
                
                if ($now->gte($selectedTime)) {
                    $bermain->status = 'playing';
                    $bermain->start_time = $bermain->selected_time;
                    $endTime = $selectedTime->copy()->addHours($bermain->duration);
                    $bermain->end_time = $endTime->format('H:i:s');
                    $bermain->save();
                }
            });

        // Update status playing ke finished jika waktu sudah habis
        BermainModel::where('status', 'playing')
            ->get()
            ->each(function($bermain) use ($now) {
                $endTime = Carbon::parse($bermain->date)->setTimeFromTimeString($bermain->end_time);
                
                if ($now->gte($endTime)) {
                    $bermain->status = 'finished';
                    $bermain->remaining_time = 0;
                    $bermain->save();
                } else {
                    // Update remaining time untuk yang sedang playing
                    $bermain->remaining_time = $now->diffInSeconds($endTime, false);
                    $bermain->save();
                }
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
        $validated['status'] = 'waiting';
        $validated['start_time'] = null;
        $validated['end_time'] = null;
        $validated['remaining_time'] = $validated['duration'] * 3600;

        BermainModel::create($validated);

        return redirect()->route('bermain.index')
            ->with('success', 'Reservasi berhasil dibuat!');
    }

    public function updateTimer($id)
    {
        $bermain = BermainModel::findOrFail($id);
        $now = Carbon::now();
        $selectedTime = Carbon::parse($bermain->date)->setTimeFromTimeString($bermain->selected_time);
        
        // Check dan update status jika perlu
        if ($now->gte($selectedTime) && $bermain->status === 'waiting') {
            $bermain->status = 'playing';
            $bermain->start_time = $bermain->selected_time;
            $endTime = $selectedTime->copy()->addHours($bermain->duration);
            $bermain->end_time = $endTime->format('H:i:s');
            $bermain->save();
        }
        
        // Jika masih waiting tapi belum waktunya
        if ($bermain->status === 'waiting') {
            return response()->json([
                'status' => 'waiting',
                'message' => 'Belum waktunya bermain',
                'remaining_time' => 0
            ]);
        }
        
        // Jika sedang playing
        if ($bermain->status === 'playing') {
            $endTime = Carbon::parse($bermain->date)->setTimeFromTimeString($bermain->end_time);
            
            if ($now->gte($endTime)) {
                $bermain->status = 'finished';
                $bermain->remaining_time = 0;
                $bermain->save();
                
                return response()->json([
                    'status' => 'finished',
                    'remaining_time' => 0
                ]);
            }
            
            $remaining = $now->diffInSeconds($endTime, false);
            $bermain->remaining_time = max(0, $remaining);
            $bermain->save();
            
            return response()->json([
                'status' => 'playing',
                'remaining_time' => $remaining
            ]);
        }

        return response()->json([
            'status' => $bermain->status,
            'remaining_time' => 0
        ]);
    }
}

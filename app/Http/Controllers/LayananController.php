<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BermainModel;
use Carbon\Carbon;
use App\Models\PermissionRoleModel;
use Illuminate\Support\Facades\Auth;
use App\Models\LayananModel;

class LayananController extends Controller
{
    public function index()
    {
        // Check permission untuk akses Layanan
        $PermissionRole = PermissionRoleModel::getPermission(Auth::user()->role_id, 'Layanan');
        if(empty($PermissionRole)){
            abort(404);
        }

        // Get permissions untuk masing-masing layanan
        $data['PermissionBermain'] = PermissionRoleModel::getPermission(Auth::user()->role_id, 'Bermain');
        $data['PermissionBimbel'] = PermissionRoleModel::getPermission(Auth::user()->role_id, 'Bimbel');
        
        // Get list layanan yang tersedia
        $data['getRecord'] = LayananModel::getRecord();
        
        return view('users.layanan', $data);
    }

    public function submit(Request $request)
    {
        // Cek permission berdasarkan service type yang dipilih
        $servicePermission = PermissionRoleModel::getPermission(
            Auth::user()->role_id, 
            ucfirst($request->service_type)
        );
        
        if(empty($servicePermission)){
            return back()->with('error', 'Anda tidak memiliki akses ke layanan ini');
        }

        // Validasi request
        $request->validate([
            'service_type' => 'required|in:bermain,bimbel',
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'phone' => 'required|string|max:15',
            'duration' => 'required_if:service_type,bermain|integer|between:1,3',
            'selected_time' => 'required_if:service_type,bermain|date_format:H:i',
            'date' => 'required_if:service_type,bermain|date|after_or_equal:today',
            'payment_proof' => 'required_if:service_type,bermain|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Proses sesuai jenis layanan
        if ($request->service_type === 'bermain') {
            // Buat instance Carbon dan simpan tanpa format dulu
            $startDateTime = Carbon::parse($request->date . ' ' . $request->selected_time);
            
            // Konversi durasi ke integer
            $duration = (int) $request->duration;
            
            // Buat copy dari startDateTime dan tambahkan durasi
            $endDateTime = $startDateTime->copy()->addHours($duration);

            // Tentukan status berdasarkan waktu saat ini
            $now = Carbon::now();
            $status = 'waiting';
            $remainingTime = $duration * 3600; // Default remaining time dalam detik

            if ($now->gte($startDateTime) && $now->lt($endDateTime)) {
                $status = 'playing';
                $remainingTime = $now->diffInSeconds($endDateTime);
            } elseif ($now->gte($endDateTime)) {
                $status = 'finished';
                $remainingTime = 0;
            }

            \Log::info('DateTime calculation:', [
                'start_datetime' => $startDateTime->format('Y-m-d H:i:s'),
                'end_datetime' => $endDateTime->format('Y-m-d H:i:s'),
                'current_time' => $now->format('Y-m-d H:i:s'),
                'duration' => $duration,
                'status' => $status,
                'remaining_time' => $remainingTime
            ]);

            $data = [
                'name' => $request->name,
                'age' => $request->age,
                'phone' => $request->phone,
                'duration' => $duration,
                'start_datetime' => $startDateTime->format('Y-m-d H:i:s'),
                'end_datetime' => $endDateTime->format('Y-m-d H:i:s'),
                'day' => $startDateTime->format('l'),
                'status' => $status,
                'remaining_time' => $remainingTime
            ];

            // Handle file upload
            if ($request->hasFile('payment_proof')) {
                $file = $request->file('payment_proof');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/payment_proofs', $filename);
                $data['payment_proof'] = $filename;
            }

            $bermain = BermainModel::create($data);
            
            return redirect()->route('bermain.index')
                ->with('success', 'Reservasi berhasil dibuat!');
        } 
        elseif ($request->service_type === 'bimbel') {
            return redirect()->route('bimbel.store')->withInput();
        }

        return back()->with('error', 'Layanan tidak valid');
    }
}
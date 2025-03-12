<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BermainModel;
use Carbon\Carbon;

class LayananController extends Controller
{
    public function index()
    {
        return view('users.layanan');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'service_type' => 'required',
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'phone' => 'required|string|max:15',
            'duration' => 'required_if:service_type,bermain|integer|between:1,3',
            'selected_time' => 'required_if:service_type,bermain|date_format:H:i',
            'date' => 'required_if:service_type,bermain|date|after_or_equal:today',
            'payment_proof' => 'required_if:service_type,bermain|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->service_type === 'bermain') {
            // Convert duration to integer explicitly
            $duration = (int) $request->duration;
            
            // Parse selected time
            $selectedTime = Carbon::parse($request->selected_time);
            $endTime = (clone $selectedTime)->addHours($duration);
            
            // Validate operating hours (8:00 - 17:00)
            // if ($selectedTime->format('H:i') < '08:00' || $endTime->format('H:i') > '17:00') {
            //     return back()->with('error', 'Waktu bermain harus antara jam 08:00 - 17:00');
            // }

            // Handle file upload
            if ($request->hasFile('payment_proof')) {
                $file = $request->file('payment_proof');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/payment_proofs', $filename);
            }

            // Get day name in Indonesian
            $dayNames = [
                'Sunday' => 'Minggu',
                'Monday' => 'Senin',
                'Tuesday' => 'Selasa',
                'Wednesday' => 'Rabu',
                'Thursday' => 'Kamis',
                'Friday' => 'Jumat',
                'Saturday' => 'Sabtu'
            ];
            
            $dayName = $dayNames[Carbon::parse($request->date)->format('l')];

            // Set data sesuai dengan struktur database
            $data = [
                'name' => $request->name,
                'age' => $request->age,
                'phone' => $request->phone,
                'duration' => $duration,
                'selected_time' => $selectedTime->format('H:i:s'),
                'start_time' => null,
                'end_time' => null,
                'day' => $dayName,
                'date' => $request->date,
                'payment_proof' => $filename ?? null,
                'status' => 'waiting',
                'remaining_time' => $duration * 3600
            ];

            // Create new bermain record
            BermainModel::create($data);

            return redirect()->route('bermain.index')
                ->with('success', 'Reservasi berhasil dibuat!');
        } 
        elseif ($request->service_type === 'bimbel') {
            // Handle bimbel logic here
            return redirect()->route('bimbel.store')->withInput();
        }

        return back()->with('error', 'Layanan tidak valid');
    }
}
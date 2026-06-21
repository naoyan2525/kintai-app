<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('attendance.index');
    }

    public function clockIn()
    {
        $todayAttendance = Attendance::where('user_id', Auth::id())
            ->whereDate('work_date', today())
            ->first();

        if (!$todayAttendance) {
            Attendance::create([
                'user_id' => Auth::id(),
                'work_date' => today(),
                'clock_in' => now(),
            ]);
        }

        return redirect()->back();
    }

    public function clockOut()
    {
        $attendance = Attendance::where('user_id', Auth::id())
            ->whereDate('work_date', today())
            ->first();

        if ($attendance && !$attendance->clock_out) {
            $attendance->update([
                'clock_out' => now(),
            ]);
        }

        return redirect()->back();
    }
}
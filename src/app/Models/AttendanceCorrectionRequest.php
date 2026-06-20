<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance;

class AttendanceCorrectionRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'attendance_id',
        'requested_clock_in',
        'requested_clock_out',
        'reason',
        'status',
    ];

    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }
}
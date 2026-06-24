<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/attendance', [AttendanceController::class, 'index']);

Route::post('/attendance/clock-in', [AttendanceController::class, 'clockIn']);

Route::post('/attendance/clock-out', [AttendanceController::class, 'clockOut']);

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/admin/login', function () {
    return view('auth.admin-login');
});

Route::get('/admin/attendance/list', function () {
    return view('admin.attendance-list');
});

Route::get('/admin/attendance/detail', function () {
    return view('admin.attendance-detail');
});

Route::get('/admin/staff/list', function () {
    return view('admin.staff-list');
});

Route::get('/admin/staff/attendance/list', function () {
    return view('admin.staff-attendance-list');
});
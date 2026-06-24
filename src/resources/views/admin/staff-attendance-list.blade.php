@extends('layouts.admin')

@section('title', 'スタッフ別勤怠一覧')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-staff-attendance-list.css') }}">
@endsection

@section('content')

<div class="staff-attendance">

    <h1 class="staff-attendance__title">
        西玲奈さんの勤怠
    </h1>

    <div class="staff-attendance__month-nav">

        <a href="#" class="staff-attendance__prev">
            ← 前月
        </a>

        <div class="staff-attendance__month">
            📅 2023/06
        </div>

        <a href="#" class="staff-attendance__next">
            翌月 →
        </a>

    </div>

    <div class="staff-attendance__table-wrapper">

        <table class="staff-attendance__table">

            <thead>
                <tr>
                    <th>日付</th>
                    <th>出勤</th>
                    <th>退勤</th>
                    <th>休憩</th>
                    <th>合計</th>
                    <th>詳細</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>06/01(木)</td>
                    <td>09:00</td>
                    <td>18:00</td>
                    <td>1:00</td>
                    <td>8:00</td>
                    <td><a href="#">詳細</a></td>
                </tr>

                <tr>
                    <td>06/02(金)</td>
                    <td>09:00</td>
                    <td>18:00</td>
                    <td>1:00</td>
                    <td>8:00</td>
                    <td><a href="#">詳細</a></td>
                </tr>

                <!-- 後でforeach化 -->

            </tbody>

        </table>

    </div>

    <div class="staff-attendance__button">
        <button type="button">
            CSV出力
        </button>
    </div>

</div>

@endsection
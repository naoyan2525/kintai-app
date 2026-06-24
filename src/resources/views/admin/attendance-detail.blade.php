@extends('layouts.admin')

@section('title', '勤怠詳細')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-attendance-detail.css') }}">
@endsection

@section('content')

<div class="attendance-detail">

    <h1 class="attendance-detail__title">
        勤怠詳細
    </h1>

    <form>

        <table class="attendance-detail__table">

            <tr>
                <th>名前</th>
                <td>西　怜奈</td>
            </tr>

            <tr>
                <th>日付</th>
                <td class="attendance-detail__date">
                    <span>2023年</span>
                    <span>6月1日</span>
                </td>
            </tr>

            <tr>
                <th>出勤・退勤</th>
                <td>
                    <input type="time" value="09:00">
                    <span>～</span>
                    <input type="time" value="20:00">
                </td>
            </tr>

            <tr>
                <th>休憩</th>
                <td>
                    <input type="time" value="12:00">
                    <span>～</span>
                    <input type="time" value="13:00">
                </td>
            </tr>

            <tr>
                <th>休憩2</th>
                <td>
                    <input type="time">
                    <span>～</span>
                    <input type="time">
                </td>
            </tr>

            <tr>
                <th>備考</th>
                <td>
                    <textarea></textarea>
                </td>
            </tr>

        </table>

        <div class="attendance-detail__button-area">
            <button type="submit">
                修正
            </button>
        </div>

    </form>

</div>

@endsection
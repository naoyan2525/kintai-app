@extends('layouts.app')

@section('title', '勤怠打刻')

@section('content')

<div class="attendance">

    <div class="attendance__status">
        出勤中
    </div>

    <p class="attendance__date">
        2023年6月1日(木)
    </p>

    <p class="attendance__time">
        08:00
    </p>

    <div class="attendance__buttons">

        <button class="attendance__button attendance__button--black">
            退勤
        </button>

        <button class="attendance__button attendance__button--white">
            休憩入
        </button>

    </div>

</div>

@endsection
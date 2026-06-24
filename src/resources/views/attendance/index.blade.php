@extends('layouts.app')

@section('title', '勤怠打刻')

@section('content')

<div class="attendance">

    <div class="attendance__status">
        勤務外
    </div>

    <div class="attendance__date">
        {{ now()->format('Y年n月j日(D)') }}
    </div>

    <div class="attendance__time">
        {{ now()->format('H:i') }}
    </div>

    <div class="attendance__actions">
        <button class="attendance__button">
            出勤
        </button>
    </div>

</div>

@endsection
@extends('layouts.admin')

@section('title', 'スタッフ一覧')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-staff-list.css') }}">
@endsection

@section('content')

<div class="staff-list">

    <h1 class="staff-list__title">
        スタッフ一覧
    </h1>

    <div class="staff-list__table-wrapper">

        <table class="staff-list__table">

            <thead>
                <tr>
                    <th>名前</th>
                    <th>メールアドレス</th>
                    <th>月次勤怠</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>西 怜奈</td>
                    <td>reina.n@coachtech.com</td>
                    <td>
                        <a href="#">詳細</a>
                    </td>
                </tr>

                <tr>
                    <td>山田 太郎</td>
                    <td>taro.y@coachtech.com</td>
                    <td>
                        <a href="#">詳細</a>
                    </td>
                </tr>

                <tr>
                    <td>増田 一生</td>
                    <td>issei.m@coachtech.com</td>
                    <td>
                        <a href="#">詳細</a>
                    </td>
                </tr>

                <tr>
                    <td>山本 敬吉</td>
                    <td>keikichi.y@coachtech.com</td>
                    <td>
                        <a href="#">詳細</a>
                    </td>
                </tr>

                <tr>
                    <td>秋田 朋美</td>
                    <td>tomomi.a@coachtech.com</td>
                    <td>
                        <a href="#">詳細</a>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection
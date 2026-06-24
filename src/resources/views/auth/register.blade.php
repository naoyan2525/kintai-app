@extends('layouts.guest')

@section('title', '会員登録')

@section('content')



<div class="register">

    <h1 class="register__title">
        会員登録
    </h1>

    <form class="register__form">

        <div class="register__group">
            <label>名前</label>
            <input type="text">
        </div>

        <div class="register__group">
            <label>メールアドレス</label>
            <input type="email">
        </div>

        <div class="register__group">
            <label>パスワード</label>
            <input type="password">
        </div>

        <div class="register__group">
            <label>パスワード確認</label>
            <input type="password">
        </div>

        <button type="submit" class="register__button">
            登録する
        </button>

        <a href="#" class="register__login">
            ログインはこちら
        </a>

    </form>

</div>

@endsection
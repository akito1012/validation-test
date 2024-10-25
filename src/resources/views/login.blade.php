@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@section('button')
<form action="/register" method="get">
    @csrf
    <button class="register__button-submit">register</button>
</form>
@endsection

@section('content')

<div class="login">
    <div class="login__header">
        <h2 class="login__header-item">Login</h2>
    </div>
    <div class="content">
    <form class="login-form">
        @csrf
        <div class="login-form__inner">
            <div class="login-item">
                <h2 class="login-item__header">メールアドレス</h2>
            </div>
            <div class="login-form__input">
                <input class="login-form__input-item" type="email" name="email" placeholder="例:test@exanple.com">
            </div>
            <div class="login-item">
                <h2 class="login-item__header">パスワード</h2>
            </div>
            <div class="login-form__input">
                <input class="login-form__input-item" type="password" name="password" placeholder="例:coachtech1106">
            </div>
        </div>
        <div class="login-form__button">
            <button class="login-form__button-submit" type="submit">ログイン</button>
        </div>
    </form>
</div>

@endsection
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ css/login.css }}">

@section('button')
<button class="register__button-submit">register</button>
@endsection

@section('content')

<div class="login">
    <div class="login__inner">
        <div class="login__header">
            <h2 class="login__header-item">Login</h2>
        </div>
        <div class="content">
            <div class="content-item">
                <h2 class="content-item__header">メールアドレス</h2>
            </div>
            <form class="login-form">
                <input class="login-form__input" type="email" name="email" placeholder="例:test@exanple.com">
            </form>
            <div class="content-item">
                <h2 class="content-item__header">パスワード</h2>
            </div>
            <form class="login-form">
                <input class="login-form__input" type="password" name="password" placeholder="例:coachtech1106">
            </form>
        </div>
        <div class="login-form__button">
            <button class="login-form__button-submit" type="submit">ログイン</button>
        </div>
    </div>
</div>

@endsection
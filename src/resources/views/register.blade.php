@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ ('css/register.css' }}">
@endsection

@section('button')
<button class="header-button__login" type="submit">login</button>
@endsection

@section('content')

<div class="register">
    <div class="register__header">
        <span class="register__header-span">Register</span>
    </div>
    <div class="register__inner">
        <div class="register__content">
            <div class="content-item">
                お名前
            </div>
            <form class="content-form">
                <input class="content-form__input" type="text" name="name" placeholder="例:山田　太郎" >
            </form>
        </div>
        <div class="register__content">
            <div class="content-item">
                メールアドレス
            </div>
            <form class="content-form">
                <input class="content-form__input" type="email" name="email" placeholder="例:test@example.com" >
            </form>
        </div>
        <div class="register__content">
            <div class="content-item">
                パスワード
            </div>
            <form class="content-form">
                <input class="content-form__input" type="password" name="password" placeholder="例:coachtech1106" >
            </form>
        </div>
        <div class="register__button">
            <button class="register__button-submit" type="submit">登録</button>
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('button')
<form action="/login" method="get">
    @csrf
    <button class="header-button__login" type="submit">login</button>
</form>
@endsection

@section('content')

<div class="register-page">
    <div class="register-page__header">
        <h2 class="register-page__header-item">Register
        </h2>
    </div>
    <div class="register-form">
        <form action="/admin" method="post">
            @csrf
            <div class="form-inner">
                <div class="form__item">
                    <p class=form__item-p>お名前</p>
                </div>
                <div class="form-input">
                    <input class="input__item"type="text" name="full_name" placeholder="例：山田　太郎">
                </div>
            </div>
            <div class="form-inner">
                <div class="form__item">
                    <p class=form__item-p>メールアドレス</p>
                </div>
                <div class="form-input">
                    <input class="input__item"type="email" name="email" placeholder="例:test@exanple.com">
                </div>
            </div>
            <div class="form-inner">
                <div class="form__item">
                    <p class=form__item-p>パスワード</p>
                </div>
                <div class="form-input">
                    <input class="input__item"type="text" name="full_name" placeholder="例:coachtech1106">
                </div>
            </div>
            <div class="register-form__button">
                <button class="register-form__button-submit type="submit>登録</button>
            </div>
        </form>
    </div>
</div>

@endsection
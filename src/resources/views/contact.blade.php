@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')

<div class="contact">
    <div class="contact__header">
        <span class="contact__header-span">Contact
        </span>
    </div>
    <div class="contact-inner">
        <form class="contact-form" action="/confirm" method="post">
            @csrf
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">お名前<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input">
                    <input class="input__name-last" type="text" name="last_name" placeholder="山田">
                    <input class="input__name-first" type="text" name="first_name" placeholder="太郎">
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">性別<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input-gender">
                    <input class="input__gender" type="radio" name="gender">
                    <label class="label-color" for="man">男性</label>
                    <input class="input__gender" type="radio" name="gender">
                    <label class="label-color" for="women">女性</label>
                    <input class="input__gender" type="radio" name="gender">
                    <label class="label-color" for="">その他</label>
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">メールアドレス<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input">
                    <input class="input__email" type="email" name="email" placeholder="例: test@exanple.com">
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">電話番号<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input">
                    <input class="input__tel" type="tel" name="tel" placeholder="080">-
                    <input class="input__tel" type="tel" name="tel" placeholder="1234">-
                    <input class="input__tel" type="tel" name="tel" placeholder="5678">
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">住所<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input">
                    <input class="input__address" type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">建物名<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input">
                    <input class="input__building" type="text" name="building" placeholder="例:千駄ヶ谷マンション101">
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">お問い合わせの種類<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input">
                    <section class="inquiryKinds">
                        <option value="detail">選択してください</option>
                    </section>
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">お問い合わせの内容<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input">
                    <textarea class="inquiry-item" name="inquiryItem" clos="30" rows="4">お問い合わせ内容をご記載ください</textarea>
                </div>
            </div>
            <div class="confirmation__button">
                <button class="confirmation__button-submit">確認画面</button>
            </div>
        </form>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
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
                    <input class="input__name-last" type="text" name="last_name" placeholder="山田" value="{{ old('last_name') }}" />
                    <input class="input__name-first" type="text" name="first_name" placeholder="太郎" value="{{ old('first_name') }}" />
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">性別<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input-gender">
                    <input class="input__gender" id="man" type="radio" name="gender" value="{{ old('gender') }}" />
                    <label class="label-color" for="man" value="男性">男性</label>
                    <input class="input__gender"  id="woman" type="radio" name="gender" value="{{ old('gender') }}" />
                    <label class="label-color" for="women" value="女性">女性</label>
                    <input class="input__gender"  id="others" type="radio" name="gender" value="{{ old('gender') }}" />
                    <label class="label-color" for="others" value="その他">その他</label>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">メールアドレス<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input">
                    <input class="input__email" type="email" name="email" placeholder="例: test@exanple.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">電話番号<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input">
                    <input class="input__tel" type="tel" name="tel" placeholder="080" value="{{ old('tel') }}" />-
                    <input class="input__tel" type="tel" name="tel" placeholder="1234" value="{{ old('tel') }}" />-
                    <input class="input__tel" type="tel" name="tel" placeholder="5678" value="{{ old('tel') }}" />
                </div>
                <div class="form__error">
                    @error('tel')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">住所<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input">
                    <input class="input__address" type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">建物名<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input">
                    <input class="input__building" type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">お問い合わせの種類<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input">
                    <select class="inquiryKinds" name="category_id">
                        <option value="">選択してください</option>
                        @foreach($contents as $content)
                        <option value="{{ $content['content'] }}">{{ $content['content'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form__error">
                    @error('content')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__item">
                    <p class="contact-form__item-p">お問い合わせの内容<span class="required-red">※</span></p>
                </div>
                <div class="contact-form__input">
                    <textarea class="inquiry-item" name="detail" clos="30" rows="4" value="{{ old('detail') }}" >お問い合わせ内容をご記載ください</textarea>
                </div>
                <div class="form__error">
                    @error('detail')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="confirmation__button">
                <button class="confirmation__button-submit">確認画面</button>
            </div>
        </form>
    </div>
</div>

@endsection
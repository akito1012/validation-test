@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ ('css/admin.css') }}">
@endsection

@section('button')
<button class="logout__button">logout</button>
@endsection

@section('content')

<div class="search">
    <div class="search-item">
        <form class="search-form">
            <input class="search-form__user" type="search" name="user" placeholder="名前やメールアドレスを入力してください">
            <section class="search-form__gender">
                <option value="">性別</option>
                <option value="全て">全て</option>
                <option value="男性">男性</option>
                <option value="女性">女性</option>
                <option value="その他">その他</option>
            </section>
            <section class="search-form__inquiry">
                <option value="">お問い合わせの種類</option>
            </section>
            <input class="search-form__day" type="date" name="date"  placeholder="年/月/日">
            <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">検索</button>
            </div>
        </form>
        <form class="search-reset">
            <div class="search-reset__button">
                <button class="search-reset__button-submit">リセット</button>
            </div>
        </form>
    </div>
    <div class="search__item">
        <div class="search-export__button">
            <button class="search-export__button-submit">エクスポート</button>
        </div>
        <!-- @foreach($users as $user)
        <div class="search-page">
            {{$user->getDetail()}}
        </div>
        @endforeach -->
        {{ $user->links()}}
    </div>
    <table class="search-table">
        <div class="search-table__inner">
            <tr class="search-table__row">
                <th class="search-table__header">
                    <span class="search-table__header-span">お名前</span>
                    <span class="search-table__header-span">性別</span>
                    <span class="search-table__header-span">メールアドレス</span>
                    <span class="search-table__header-span">お問い合わせの種類</span>
                </th>
            </tr>
            <tr class="search-table__row">
                <form class="search-form__item"></form>
            </tr>
        </div>
    </table>
</div>
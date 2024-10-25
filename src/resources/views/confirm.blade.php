@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ ('css/confirm.css') }}">
@endsection

@section('content')

<div class="confirm">
    <div class="confirm__header">
        <span class="confirm__header-span">confirm</span>
    </div>
    <table class="confirm-table">
    <form >
    <form action="/" method="post">
        @csrf
        <div class="confirm-table__inner">
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お名前</th>
                <td class="confirm-table__item">
                    <input type="text" name="name" value="{{ $connect['lust_name', ' ', 'first_name'] }}" readonly/>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">性別</th>
                <td class="confirm-table__item">
                    <input type="hidden" name="gender" value="{{ $connect['gender'] }}" readonly />
                    <?php
                        if ($connect['gender'] == '1') {echo '男性';}
                        else if ($connect['gender'] == '2') {echo '女性';}
                        else{echo 'その他';}
                    ?>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">メールアドレス</th>
                <td class="confirm-table__item">
                    <input type="text" name="email" value="{{ $connect['email'] }}" readonly/>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">電話番号</th>
                <td class="confirm-table__item">
                    <input type="text" name="tel" value="{{ $connect['tel'] }}" readonly/>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">住所</th>
                <td class="confirm-table__item">
                    <input type="text" name="address" value="{{ $connect['address'] }}" readonly/>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">建物名</th>
                <td class="confirm-table__item">
                    <input type="text" name="building" value="{{ $connect['building'] }}" readonly/>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お問い合わせの種類</th>
                <td class="confirm-table__item">
                    <input type="text" name="category" value="{{ $connect['content'] }}" readonly/>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お問い合わせ内容</th>
                <td class="confirm-table__item">
                    <input type="text" name="detail" value="{{ $connect['detail'] }}" readonly/>
                </td>
            </tr>
        </div>
    </table>
    <div class="confirm-button">
        <button class="confirm-button__send-submit" type="submit">送信</button>
    </form>
    <form class="confirm-button__fix" action="/" method="post">
    @csrf
        <button class="confirm-button__fix-submit" type="submit">修正</button>
    </form>
    </div>
</div>
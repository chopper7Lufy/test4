@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<h2><span>プロフィール設定</span></h2>
<label>
  <input type="file" name="image">画像を選択する
</label>
<form class="form" action="/login" method="post">
  @csrf
  @if ($errors->has('name'))
    <ul>
      <li style="color: red">ユーザー名を入力してください</li>
    </ul>
  @endif
  <div class="form__group">
    <div class="form__group-title">
      <span class="form__label--item">ユーザー名</span>
    </div>
    <div class="form__group-content">
      <div class="form__input--text">
        <input type="text" name="name" value="{{ old('name') }}" />
      </div>
    </div>
  </div>
  @if ($errors->has('postNumber'))
    <ul>
      <li style="color: red">郵便番号を入力してください</li>
    </ul>
  @endif
  <div class="form__group">
    <div class="form__group-title">
      <span class="form__label--item">郵便番号</span>
    </div>
    <div class="form__group-content">
      <div class="form__input--text">
        <input type="text" name="postNumber" value="{{ old('postNumber') }}" />
      </div>
    </div>
  </div>
  @if ($errors->has('address'))
    <ul>
      <li style="color: red">住所を入力してください</li>
    </ul>
  @endif
  <div class="form__group">
    <div class="form__group-title">
      <span class="form__label--item">住所</span>
    </div>
    <div class="form__group-content">
      <div class="form__input--text">
        <input type="text" name="address" value="{{ old('address') }}" />
      </div>
    </div>
  </div>
  @if ($errors->has('building'))
    <ul>
      <li style="color: red">建物名を入力してください</li>
    </ul>
  @endif
  <div class="form__group">
    <div class="form__group-title">
      <span class="form__label--item">建物名</span>
    </div>
    <div class="form__group-content">
      <div class="form__input--text">
        <input type="text" name="building" value="{{ old('building') }}" />
      </div>
    </div>
  </div>
  <div class="form__button">
    <button class="form__button-submit" type="submit">更新する</button>
  </div>
</form>
@endsection

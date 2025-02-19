@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
  <div class="register-form__heading">
    <h2>会員登録</h2>
  </div>
  <form class="form" action="/mypage/profile" method="post">
        @csrf
    <div class="form__group">
      <div class="form__group-title">
      @if ($errors->has('name'))
      <ul>
        <li style="color: red">お名前を入力してください</li>
      </ul>
      @endif
        <span class="form__label--item">ユーザー名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="name" value="{{ old('name')}}" />
        </div>
        <div class="form__error">
        </div>
      </div>
    </div>
    @if ($errors->has('email'))
    <ul>
      <li style="color: red">メールアドレスを入力してください</li>
    </ul>
    @endif
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" value="{{ old('email')}}" />
        </div>
        <div class="form__error">
        </div>
      </div>
    </div>
    @if ($errors->has('password'))
    <ul>
      @foreach($errors->get('password') as $message)
      <li style="color: red">{{ $message }}</li>
      @endforeach
    </ul>
    @endif
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">パスワード</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password" />
        </div>
        <div class="form__error">
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">確認用パスワード</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="repassword" />
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">登録する</button>
    </div>
  </form>
  <div class="login__link">
    <a class="login__button-submit" href="/login">ログインの方はこちら</a>
  </div>
</div>
@endsection

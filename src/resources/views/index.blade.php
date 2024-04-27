@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<!-- 登録画面用のコード -->
<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="contacts/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="last_name" placeholder="姓" value="{{ old('last_name') }}" />
        </div>
        <div class="form__error">
            @error('last_name')
            {{ $message }}
            @enderror
        </div>
        <div class="form__input--text">
          <input type="text" name="first_name" placeholder="名" value="{{ old('first_name') }}" />
        </div>
        <div class="form__error">
            @error('first_name')
            {{ $message }}
            @enderror
        </div>
      </div>
    </div>

<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--radio">
            <input type="radio" id="male" name="gender" value="1" {{ old('gender') == '1' || old('gender') === null ? 'checked' : '' }}>
            <label for="male">男性</label>
        </div>
        <div class="form__input--radio">
            <input type="radio" id="female" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}>
            <label for="female">女性</label>
        </div>
        <div class="form__input--radio">
            <input type="radio" id="other" name="gender" value="3" {{ old('gender') == '3' ? 'checked' : '' }}>
            <label for="other">その他</label>
        </div>
        <div class="form__error">
            @error('gender')
            {{ $message }}
            @enderror
        </div>
    </div>
</div>

<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
            <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
        </div>
    </div>
</div>

<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--tel">
            <input type="tel" name="tel1" placeholder="00000" value="{{ old('tel1') }}" maxlength="5">
            <span>-</span>
            <input type="tel" name="tel2" placeholder="00000" value="{{ old('tel2') }}" maxlength="5">
            <span>-</span>
            <input type="tel" name="tel3" placeholder="00000" value="{{ old('tel3') }}" maxlength="5">
        </div>
        <div class="form__error">
            @error('tel1')
            {{ $message }}
            @enderror
            @error('tel2')
            {{ $message }}
            @enderror
            @error('tel3')
            {{ $message }}
            @enderror
        </div>
    </div>
</div>

<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
            <input type="text" name="address" placeholder="埼玉県さいたま市" value="{{ old('text') }}" />
        </div>
        <div class="form__error">
            @error('address')
            {{ $message }}
            @enderror
        </div>
    </div>
</div>

<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">建物名</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
            <input type="text" name="building" placeholder="おかしの家" value="{{ old('text') }}" />
        </div>
        <div class="form__error">
            @error('text')
            {{ $message }}
            @enderror
        </div>
    </div>
</div>

<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">お問い合わせの種類</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--select">
            <select name="inquiry_type">
                <option value="" {{ old('inquiry_type') == '' ? 'selected' : '' }}>選択してください</option>
                <option value="1" {{ old('inquiry_type') == '1' ? 'selected' : '' }}>1. 商品のお届けについて</option>
                <option value="2" {{ old('inquiry_type') == '2' ? 'selected' : '' }}>2. 商品の交換について</option>
                <option value="3" {{ old('inquiry_type') == '3' ? 'selected' : '' }}>3. 商品トラブル</option>
                <option value="4" {{ old('inquiry_type') == '4' ? 'selected' : '' }}>4. ショップへのお問い合わせ</option>
                <option value="5" {{ old('inquiry_type') == '5' ? 'selected' : '' }}>5. その他</option>
            </select>
        </div>
        <div class="form__error">
            @error('inquiry_type')
            {{ $message }}
            @enderror
        </div>
    </div>
</div>

<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--textarea">
            <textarea name="detail" placeholder="資料をいただきたいです">{{ old('detail') }}</textarea>
        </div>
        <div class="form__error">
            @error('detail')
            {{ $message }}
            @enderror
        </div>
    </div>
</div>

<div class="form__button">
    <button class="form__button-submit" type="submit">確認画面</button>
</div>

</form>
</div>
@endsection
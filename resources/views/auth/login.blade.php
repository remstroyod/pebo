@extends('layouts.app')

@section('content')

    <div class="section">
        <h2 class="heading-21">
            Вхід<br/>
        </h2>
        <div class="contact-form-wrapper sky-blue-shadow">
            <div class="contact-form-component w-form">
                <form method="POST" action="{{ route('login') }}" id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" class="contact-form-2" data-wf-page-id="632acd1acddd053f5b7b99f1" data-wf-element-id="5103a783-25fe-78e0-ef24-1024583975fd">
                    @csrf

                    <div class="form-field-wrapper">
                        <label for="Email" class="field-label text-align-left">ваш телефон</label>
                        <input type="tel" class="form-input w-input @error('phone') is-invalid @enderror" maxlength="256" name="phone" data-name="phone" placeholder="+ 380" id="phone" required=""/>

                    </div>
                    <div class="form-field-wrapper">
                        <label for="Email-3" class="field-label text-align-left">Пароль</label>
                        <input type="password" class="form-input w-input @error('password') is-invalid @enderror" maxlength="256" name="password" data-name="password" placeholder="****" id="password" required=""/>

                    </div>
                    <button type="submit" class="button-primary width w-button">{{ __('увійти') }}</button>
                    <a href="{{ route('register') }}" class="footer-link-three tezt-align">{{ __('У мене немає аккаунту!') }}</a>
                </form>
                <div class="success-message w-form-done">
                    <div class="success-text">{{ __('Thank you! Your submission has been received!') }}</div>
                </div>
                @if($errors->any())
                    <div class="error-message w-form-fail" style="display: block">
                        <div class="error-text">
                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection

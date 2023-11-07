@extends('layouts.app')

@section('content')


    <div class="section">
        <h2 class="heading-21">
            Регістрація<br/>
        </h2>
        <div class="contact-form-wrapper sky-blue-shadow">
            <div class="contact-form-component w-form">
                <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" method="POST" class="contact-form-2" data-wf-page-id="632acd1acddd0552fa7b99f3" data-wf-element-id="8245171b-ed19-a3a9-f840-dd42dd5aba7e" action="{{ route('register') }}">
                    @csrf
                    <div class="form-field-wrapper">
                        <label for="Name" class="field-label text-align-left">{{ __('Ваше ім \'я') }}</label>
                        <input type="text" class="form-input w-input" maxlength="256" name="name" data-name="name" placeholder="Ім&#x27;я" id="name" required=""/>
                    </div>
                    <div class="form-field-wrapper">
                        <label for="Email" class="field-label text-align-left">{{ __('ваш телефон') }}</label>
                        <input type="tel" class="form-input w-input" maxlength="256" name="phone" data-name="phone" placeholder="+ 380" id="phone" required=""/>
                    </div>
                    <div class="form-field-wrapper">
                        <label for="Email-3" class="field-label text-align-left">{{ __('дата народження') }}</label>
                        <input type="date" class="form-input w-input" maxlength="256" name="date_of_birth" data-name="date_of_birth" placeholder="11. 07" id="date_of_birth" required=""/>
                    </div>
                    <div class="form-field-wrapper">
                        <label for="Email-3" class="field-label text-align-left">{{ __('пароль') }}</label>
                        <input type="password" class="form-input w-input" maxlength="256" name="password" data-name="password" placeholder="****" id="password" required=""/>
                    </div>
                    <button type="submit" class="button-primary width registration w-button">{{ __('Зарєєструватися') }}</button>
                    <a href="{{ route('login') }}" class="footer-link-three tezt-align reg">{{ __('У мене вже є аккаунт!') }}</a>
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

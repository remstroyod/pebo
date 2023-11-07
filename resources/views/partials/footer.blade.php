<section id="Footer" class="footer-subscribe">
    <div class="container-4">
        <div class="footer-wrapper-three">
            <div id="scrollTop" class="footer-block-three">
                <a href="#Advantage" class="footer-link-three">{{ __('Переваги') }}</a>
                <a href="#Services" class="footer-link-three">{{ __('Послуги') }}</a>
                <a href="#About" class="footer-link-three">{{ __('Про нас') }}</a>
                <a href="#Feedback" class="footer-link-three">{{ __('Контакти') }}</a>
            </div>

            @guest
                <a href="{{ route('login') }}" class="button-primary w-button">{{ __('Увійти') }}</a>
            @else
                @can('isAdmin')
                    <a href="{{ route('admin') }}" class="button-primary w-button">{{ __('Кабiнет адмiна') }}</a>
                @else
                    <a href="{{ route('profile') }}" class="button-primary w-button">{{ __('Мiй кабiнет') }}</a>
                @endcan
                <a href="{{ route('logout') }}" class="button-primary w-button">{{ __('Вихiд') }}</a>
            @endguest

        </div>
        <div class="footer-divider-two"></div>
        <div class="footer-bottom">
            <div class="footer-copyright">{{ __('© 2023 Pebo. Всі права захищені') }}</div>
            <div class="footer-social-block-three">
                <a href="https://www.youtube.com/watch?v=uLiOkPNb0l8" target="_blank" class="footer-social-link-three w-inline-block">
                    <img src="https://assets-global.website-files.com/62434fa732124a0fb112aab4/62434fa732124a705912aaeb_facebook%20big%20filled.svg" loading="lazy" alt=""/>
                </a>
                <a href="https://www.youtube.com/watch?v=uLiOkPNb0l8" target="_blank" class="footer-social-link-three w-inline-block">
                    <img src="https://assets-global.website-files.com/62434fa732124a0fb112aab4/62434fa732124ab37a12aaf0_twitter%20big.svg" loading="lazy" alt=""/>
                </a>
                <a href="https://www.youtube.com/watch?v=uLiOkPNb0l8" target="_blank" class="footer-social-link-three w-inline-block">
                    <img src="https://assets-global.website-files.com/62434fa732124a0fb112aab4/62434fa732124a61f512aaed_instagram%20big.svg" loading="lazy" alt=""/>
                </a>
                <a href="https://www.youtube.com/watch?v=uLiOkPNb0l8" target="_blank" class="footer-social-link-three w-inline-block">
                    <img src="https://assets-global.website-files.com/62434fa732124a0fb112aab4/62434fa732124a717f12aaea_youtube%20small.svg" loading="lazy" alt=""/>
                </a>
            </div>
        </div>
    </div>
</section>

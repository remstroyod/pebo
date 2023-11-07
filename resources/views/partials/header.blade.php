<div class="navbar-no-shadow">
    <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-no-shadow-container w-nav">
        <div class="container-regular">
            <div class="navbar-wrapper">
                <a href="{{ route('home') }}" aria-current="page" class="navbar-brand w-nav-brand w--current">
                    <img src="https://assets-global.website-files.com/632acd1acddd05145e7b99df/65466dd496ddaf911fd9abe6_64c6777e85d5477b4c9a3206_Logo.svg.svg" loading="lazy" alt=""/>
                </a>
                <nav id="scrollTop" role="navigation" class="nav-menu-wrapper w-nav-menu">
                    <ul role="list" class="nav-menu w-list-unstyled">
                        <li>
                            <a href="#About" class="nav-link">{{ __('Про нас') }}</a>
                        </li>
                        <li>
                            <a href="#Advantage" class="nav-link">{{ __('Переваги') }}</a>
                        </li>
                        <li>
                            <a href="#Services" class="nav-link">{{ __('Послуги') }}</a>
                        </li>
                        <li>
                            <a href="#Services" class="nav-link">{{ __('Контакти') }}</a>
                        </li>
                    </ul>
                </nav>
                <div class="nav-button-wrapper">
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
                <div class="menu-button-2 w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
        </div>
    </div>
</div>

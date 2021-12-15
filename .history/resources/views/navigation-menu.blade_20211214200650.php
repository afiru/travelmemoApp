<header class="flex justify-between header">
    <h1 class="h1Header">
        <a class="buttonHeader" href="/dashboard">
            <img loading="lazy" src="img/LogoHead.png" alt="" width="99" height="30" />
        </a>
    </h1>
    <div class="flex items-center justify-between logoutMenuHeader">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-responsive-nav-link href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-jet-responsive-nav-link>
        </form>
    </div>
</header>

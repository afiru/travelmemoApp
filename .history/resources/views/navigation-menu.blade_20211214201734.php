<header class="flex justify-between header">
    <h1 class="h1Header">
        <a class="buttonHeader" href="/dashboard">
            <img loading="lazy" src="img/LogoHead.png" alt="" width="99" height="30" />
        </a>
    </h1>
    <div class="flex items-center justify-between logoutMenuHeader">
        <div class="logout">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit"><img loading="lazy" src="img/buttonLogout.svg" alt="" width="24" height="24" /></button>
            </form>
        </div>
        <div class="menu jsMenuOpen off">
            <span class="borderMenu borderMenu01"></span>
            <span class="borderMenu borderMenu01"></span>
            <span class="borderMenu borderMenu01"></span>
        </div>
    </div>
</header>
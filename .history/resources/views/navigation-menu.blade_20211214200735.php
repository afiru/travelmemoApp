<header class="flex justify-between header">
    <h1 class="h1Header">
        <a class="buttonHeader" href="/dashboard">
            <img loading="lazy" src="img/LogoHead.png" alt="" width="99" height="30" />
        </a>
    </h1>
    <div class="flex items-center justify-between logoutMenuHeader">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"><img loading="lazy" src="img/" alt="" width="" height="" /></button>
        </form>
    </div>
</header>

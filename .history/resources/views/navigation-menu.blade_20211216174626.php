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
            <span class="borderMenu borderMenu02"></span>
            <span class="borderMenu borderMenu03"></span>
        </div>
    </div>
</header>
<nav class="gNvi">
    <ul class="ulGnavi">
        <li class="liGnavi">
            <span class="trigerGnavi jsTrigerGnavi">行きたいところ</span>
            <ul class="subGnavi">
                <li class="liSubGnavi">
                    <a class="buttonSubGnavi" href="/posts">
                        <span class="iconSubGnavi iconSubGnavi01">行きたいところ一覧</span>
                    </a>
                </li>
                <li class="liSubGnavi">
                    <a class="buttonSubGnavi" href="/addpost">
                        <span class="iconSubGnavi iconSubGnavi01">行きたいところ投稿</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="liGnavi liGnavi02">
            <span class="trigerGnavi jsTrigerGnavi">トピックス</span>
            <ul class="subGnavi">
                <li class="liSubGnavi">
                    <a class="buttonSubGnavi" href="/topics">
                        <span class="iconSubGnavi iconSubGnavi03">トピックス一覧</span>
                    </a>
                </li>
                <li class="liSubGnavi">
                    <a class="buttonSubGnavi" href="/addtopic">
                        <span class="iconSubGnavi iconSubGnavi04">トピックス投稿</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="liGnavi liGnavi02">
            <span class="trigerGnavi jsTrigerGnavi">請求書</span>
            <ul class="subGnavi">
                <li class="liSubGnavi">
                    <a class="buttonSubGnavi" href="/invoices">
                        <span class="iconSubGnavi iconSubGnavi03">請求書</span>
                    </a>
                </li>
                <li class="liSubGnavi">
                    <a class="buttonSubGnavi" href="/addpost">
                        <span class="iconSubGnavi iconSubGnavi04">請求書項目追加</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

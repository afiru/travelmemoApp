<header class="wapper display_flex_stretch header">
    <h1 class="h1Header">
        <a class="buttonHeader" href="/">
            <img loading="lazy" src="img/LogoHead.svg" alt="" width="150" height="30" />
        </a>
    </h1>
    <div class="display_flex_stretch logoutMenuHeader">
        <div class="logout">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit"><img loading="lazy" src="img/buttonLogout.svg" alt="" width="24" height="24" /></button>
            </form>
        </div>
        <div class="menu jsMenuOpen on">
            <span class="borderMenu borderMenu01"></span>
            <span class="borderMenu borderMenu02"></span>
            <span class="borderMenu borderMenu03"></span>
        </div>
    </div>
</header>
<nav class="gNvi">
    <div class="gNaviCnt">
        <section class="display_flex_stretch secGnavi">
            <p class="display_flex_stretch_bottom txtSecGnavi">
                <span class="titleSecGnavi">直近のトピックス</span>
                <span class="intSecGnavi">{{ $nowTopics }}</span>
                <span class="kenSecGnavi">件</span>
            </p>
            <p class="display_flex_stretch_bottom txtSecGnavi">
                <span class="titleSecGnavi">いいね件数</span>
                <span class="intSecGnavi">{{ $nowbooking }}</span>
                <span class="kenSecGnavi">件</span>
            </p>
        </section>
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
                        <a class="buttonSubGnavi" href="/addinvoice">
                            <span class="iconSubGnavi iconSubGnavi04">請求書項目追加</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

</nav>



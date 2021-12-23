<x-app-layout>
    <x-gnavi></x-gnavi>
    <div class="wapper loginFormWap PostsFormWaps myPageMainWap">
        <main class="poRe border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md loginFormCnt myPageMain topicsMyPageMain">
            <section class="secMypage">
                <h2 class="t_center h2Mypage">トピックス詳細</h2>
                <h3 class="h3Mypage">{{ $topic->title }}</h3>
            </section>
            <sction class="cntTopic">
                {!! nl2br(e($topic->title)) !!}
            </sction>
        </main>
    </div>
</x-app-layout>

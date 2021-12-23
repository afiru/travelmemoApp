<x-app-layout>
    <x-gnavi></x-gnavi>
    <div class="wapper loginFormWap PostsFormWaps myPageMainWap">
        <main class="poRe border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md loginFormCnt myPageMain topicsMyPageMain">
            <section class="secMypage">
                <h2 class="t_center h2Mypage">トピックス一覧</h2>
            </section>
            <x-topics.topics-archives limit="10" haslink=false haspaginate=true del=true></x-topics.topics-archives>
        </main>
    </div>
</x-app-layout>

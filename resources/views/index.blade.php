<x-app-layout>
    <x-gnavi></x-gnavi>
    <div class="wapper loginFormWap">
        <div class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md loginFormCnt myPageMain">
            <section class="secMypage">
                <h2 class="t_center h2Mypage">道後温泉旅計画へようこそ</h2>
                <p class="txtMypage">2022年02月26日～2022年02月27日に行く道後温泉旅行で決まった物事を掲載する場所です。</p>
            </section>
            <section class="secMypageTopics">
                <h3 class="h3SecMypageTopics">新着情報</h3>
                <x-topics.topics-archives limit="5" haslink=true haspaginate=false del=false></x-topics.topics-archives>
            </section>
            <section class="secMypageInvoices">
                <h3 class="h3SecMypageTopics">現在の予算</h3>
                <x-invoice.sum-invoice intPerson=4></x-invoice.sum-invoice>
            </section>
        </div>
    </div>

</x-app-layout>

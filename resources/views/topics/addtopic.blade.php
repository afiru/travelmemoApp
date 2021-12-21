<x-app-layout>
    <x-gnavi></x-gnavi>
    <div class="wapper loginFormWap PostsFormWaps myPageMainWap">
        <main class="poRe border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md loginFormCnt myPageMain">
            <section class="secMypage">
                <h2 class="t_center h2Mypage">トピックス追加</h2>
                <form action="/addtopic" method="post" enctype="multipart/form-data">
                    @csrf
                    <x-topics.topics-form></x-topics.topics-form>
                </form>
            </section>
        </main>
    </div>
</x-app-layout>

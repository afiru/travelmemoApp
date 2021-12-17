<x-app-layout>
    <x-gnavi></x-gnavi>
    <div class="wapper loginFormWap">
        <div class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md loginFormCnt">
            <section class="secMypage">
                <h2 class="t_center h2Mypage">行きたいとところ一覧</h2>
            </section>

            <x-post.post-archives :where=$where :datas=$data></x-post.post-archives>
        </div>
    </div>


        <x-post.add-posts-search :where=$where></x-post.add-posts-search>
    </div>

</x-app-layout>

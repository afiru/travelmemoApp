<x-app-layout>
    <x-gnavi></x-gnavi>
    <div class="wapper loginFormWap PostsFormWaps">
        <div class="poRe border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md loginFormCnt">
            <section class="secMypage">
                <h2 class="t_center h2Mypage">行きたいとところ投稿</h2>
            </section>
            <form action="{{ route('addpost') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="post_author" value="{{ Auth::id() }}">
                <x-post.add-post-form datas=""></x-post.add-post-form>
                <input type="hidden" name="point_sum" value="0">
                <button type="submit" class="buttonAddCheangePost">
                    この場所を候補に入れる！
                </button>
            </form>

        </div>
    </div>
</x-app-layout>

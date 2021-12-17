<x-app-layout>
    <x-gnavi></x-gnavi>
    <div class="wapper loginFormWap PostsFormWaps">
        <div class="poRe border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md loginFormCnt">
            <section class="secMypage">
                <h2 class="t_center h2Mypage">行きたいとところ編集</h2>
            </section>
            @foreach ($datas as $data)
            <form action="{{ route('addpost') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="postid" value="{{ $data->id }}">
                <x-post.add-post-form :datas=$data></x-post.add-post-form>
                <input type="hidden" name="point_sum" value="{{ $data->point_sum }}">
                <button type="submit" class="buttonAddCheangePost">
                    変更します
                </button>
            </form>
            @endforeach
        </div>
    </div>
</x-app-layout>

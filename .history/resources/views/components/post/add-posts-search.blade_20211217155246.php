<form action="{{ route('posts') }}" method="get">
    @csrf

    <div class="formSearchPosts">

    </div>
    <div class="buttonSearchPosts">
        <button type="submit" class="">検索する</button>
    </div>
        <div class="w-6/12 lg:w-2/12">
            <x-post.add-post-form-genre name="where[term]" datas="" genre="{{ $where['term'] }}"></x-post.add-post-form-genre>
        </div>
        <div class="w-6/12 lg:w-2/12">
            <x-post.add-post-form-genre name="where[subterm]" datas="" genre="{{ $where['subterm'] }}"></x-post.add-post-form-genre>
        </div>
        <div class="w-6/12 lg:w-2/12">
            <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full"  type="date" name="where[travelDate]" placeholder="" list="date-list" min="2022-02-26" max="2022-02-27" @if(isset($where['travelDate'])) value="{{ $where['travelDate'] }}" @endif>
        </div>
        <div class="w-6/12 lg:w-2/12">
            <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full" type="text" name="where[prefectures]" placeholder="県名を入れてー" @if(isset($where['prefectures'])) value="{{ $where['prefectures'] }}" @endif>
        </div>
        <div class="w-6/12 lg:w-2/12">
            <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full" type="text" name="where[interchange]" placeholder="インターチェンジ名" @if(isset($where['interchange'])) value="{{ $where['interchange'] }}" @endif>
        </div>
        <div class="w-6/12 lg:w-2/12">
            <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full" type="text" name="where[placeName]" placeholder="場所名を入れてー"  @if(isset($where['placeName'])) value="{{ $where['placeName'] }}" @endif>
        </div>


</form>

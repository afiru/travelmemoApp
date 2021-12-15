<form action="{{ route('posts') }}" method="get">
    @csrf
    <div class="text-sm　mt-2 w-full flex flex-wrap flex-row justify-between lg:justify-start text-gray-500">
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
    </div>
    <div class="mt-4 w-full">
        <button type="submit" class="w-full justify-center inline-flex items-center px-4 py-4 bg-gray-800 border border-transparent rounded-md font-semibold text-lg text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
            検索する
        </button>
    </div>
</form>

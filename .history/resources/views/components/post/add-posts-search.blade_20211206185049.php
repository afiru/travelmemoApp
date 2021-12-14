<form action="{{ route('posts') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text-sm　mt-2 w-full flex flex-wrap flex-row justify-between lg:justify-start text-gray-500">
        <div class="w-6/12 lg:w-2/12">
            <x-post.add-post-form-genre name="term" data="" value=""></x-post.add-post-form-genre>
        </div>
        <div class="w-6/12 lg:w-2/12">
            <x-post.add-post-form-genre name="subterm" data="" value=""></x-post.add-post-form-genre>
        </div>
        <div class="w-6/12 lg:w-2/12">
            <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full"  type="date" name="travelDate" placeholder="" list="date-list" min="2022-02-26" max="2022-02-27" value="{{ old('travelDate') }}">
        </div>
        <div class="w-6/12 lg:w-2/12">
            <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full" type="text" name="prefectures" placeholder="県名を入れてー" value="{{ old('prefectures') }}">
        </div>
        <div class="w-6/12 lg:w-2/12">
            <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full" type="text" name="interchange" placeholder="インターチェンジ名" value="{{ old('interchange') }}">
        </div>
        <div class="w-6/12 lg:w-2/12">
            <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full" type="text" name="placeName" placeholder="場所名を入れてー" value="{{ old('placeName') }}">
        </div>
    </div>
    <div class="mt-4 w-full">
        <button type="submit" class="w-full justify-center inline-flex items-center px-4 py-4 bg-gray-800 border border-transparent rounded-md font-semibold text-lg text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
            検索する
        </button>
    </div>
</form>

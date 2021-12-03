<form action="{{ route('posts') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mt-2 w-full flex flex-wrap flex-row justify-between lg:justify-between text-gray-500">
        <div class="w-6/12 lg:w-1/8">
            <x-post.add-post-form-genre name="term" data=""></x-post.add-post-form-genre>
        </div>
        <div class="w-6/12 lg:w-1/8 lg:ml-2">
            <x-post.add-post-form-genre name="subterm" data=""></x-post.add-post-form-genre>
        </div>
        <div class="w-6/12 lg:w-1/8 lg:ml-2">
            <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full"  type="date" name="travelDate" placeholder="" list="date-list" min="2022-02-26" max="2022-02-27" value="{{ old('travelDate') }}">
        </div>
        <div class="w-6/12 lg:w-1/8 lg:ml-2">
            <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full" type="text" name="prefectures" placeholder="県名を入れてー" value="{{ old('prefectures') }}">
        </div>
        <div class="w-6/12 lg:w-1/8 lg:ml-2">
            <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full" type="text" name="interchange" placeholder="インターチェンジ名" value="{{ old('interchange') }}">
        </div>
        <div class="w-6/12 lg:w-1/8 lg:ml-2">
            <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full" type="text" name="placeName" placeholder="場所名を入れてー" value="{{ old('placeName') }}">
        </div>
    </div>
    <div class=""
</form>


<div class="formAddCheangePost">
    <div class="col-span-6 sm:col-span-4">
        <label class="block font-medium text-sm text-gray-700" for="name">1日目か2日目どっち？（2020/02/26 or 2020/02/27）</label>
        <input
        class="rounded-md shadow border-gray-300 inputFormAddCheangePost"
        type="date"
        name="travelDate"
        placeholder=""
        list="date-list"
        required="required"
        min="2022-02-26"
        max="2022-02-27"
        @if(isset($datas->travelDate))
        value="{{ $datas->travelDate }}"
        @else
        value="{{ old('travelDate') }}"
        @endif>
        <datalist id="date-list">
            <option value="2022-02-26 00:00:00">2022-02-26</option>
            <option value="2022-02-27 00:00:00">2022-02-27</option>
        </datalist>
    </div>
</div>
<div class="formAddCheangePost">
    <div class="col-span-6 sm:col-span-4 w-full">
        <label class="block font-medium text-sm text-gray-700" for="name">何時ごろ到着予定？</label>
        <input
        class="rounded-md shadow border-gray-300 inputFormAddCheangePost"
        type="time"
        name="arrivalTime"
        placeholder=""
        step="900"
        required="required"
        min="10:00"
        max="18:00"
        @if(isset($datas->travelDate))
        value="{{ $datas->arrivalTime }}"
        @else
        value="{{ old('arrivalTime') }}"
        @endif>
    </div>
</div>
<div class="formAddCheangePost">
    <div class="col-span-6 sm:col-span-4">
        <label class="block font-medium text-sm text-gray-700" for="name">何時間ぐらいいる？</label>
        <div class="flex justify-between items-center w-full lg:w-4/12 ">
            <input
            class="rounded-md shadow border-gray-300 inputFormAddCheangePost"
            type="number"
            step="0.25"
            name="stayTime"
            placeholder="1.5"
            required="required"
            @if(isset($datas->travelDate))
            value="{{ $datas->stayTime }}"
            @else
            value="{{ old('stayTime') }}"
            @endif>
            <span class="flex justify-end h-full text-center text-sm items-center w-2/12 mt-2">時間</span>
        </div>
    </div>
</div>
<div class="grid grid-cols- gap-6 mt-8">
    <div class="col-span-6 sm:col-span-4 w-full">
        <label class="block font-medium text-sm text-gray-700" for="name">何県？</label>
        <input
        class="rounded-md shadow border-gray-300 inputFormAddCheangePost"
        type="text"
        name="prefectures"
        placeholder=""
        required="required"
        @if(isset($datas->prefectures))
        value="{{ $datas->prefectures }}"
        @else
        value="{{ old('prefectures') }}"
        @endif>
    </div>
</div>
<div class="grid grid-cols- gap-6 mt-8">
    <div class="col-span-6 sm:col-span-4 w-full">
        <label class="block font-medium text-sm text-gray-700" for="name">最寄りのICを教えてー</label>
        <input
        class="mt-2 py-2 px-2 rounded-md shadow border-gray-300 w-full lg:w-4/12"
        type="text"
        name="interchange"
        placeholder=""
        required="required"
        @if(isset($datas->interchange))
        value="{{ $datas->interchange }}"
        @else
        value="{{ old('interchange') }}"
        @endif>
    </div>
</div>
<div class="grid grid-cols- gap-6 mt-8">
    <div class="col-span-6 sm:col-span-4 w-full">
        <label class="block font-medium text-sm text-gray-700" for="name">ジャンルを選んでー</label>
        <div class="w-2/12 lg:w-4/12">
            @if(isset($datas->term))
                <x-post.add-post-form-genre genre="term" name="term" datas="{{ $datas->term }}"></x-post.add-post-form-genre>
            @else
                <x-post.add-post-form-genre genre="subterm" name="term" datas=""></x-post.add-post-form-genre>
            @endif
        </div>
    </div>
</div>
<div class="grid grid-cols- gap-6 mt-8">
    <div class="col-span-6 sm:col-span-4 w-full">
        <label class="block font-medium text-sm text-gray-700" for="name">ジャンルがグルメならちょい詳しく教えてー</label>
        <div class="w-2/12  lg:w-4/12">
            @if(isset($datas->subTerm))
                <x-post.add-post-form-genre name="subTerm" datas="{{ $datas->subTerm }}"></x-post.add-post-form-genre>
            @else
                <x-post.add-post-form-genre name="subTerm" datas=""></x-post.add-post-form-genre>
            @endif
        </div>
    </div>
</div>
<div class="grid grid-cols- gap-6 mt-8">
    <div class="col-span-6 sm:col-span-4 w-full">
        <label class="block font-medium text-sm text-gray-700" for="name">場所名を教えてー</label>
        <input
        class="mt-2 py-2 px-2 rounded-md shadow border-gray-300 w-full"
        type="text"
        name="placeName"
        placeholder="場所名"
        required="required"
        @if(isset($datas->placeName))
        value="{{ $datas->placeName }}"
        @else
        value="{{ old('placeName') }}"
        @endif>
    </div>
</div>
<div class="grid grid-cols- gap-6 mt-8">
    <div class="col-span-6 sm:col-span-4 w-full">
        <label class="block font-medium text-sm text-gray-700" for="name">場所名のurlを教えてー</label>
        <input
        class="mt-2 py-2 px-2 rounded-md shadow border-gray-300 w-full"
        type="text"
        name="url"
        placeholder="url"
        required="required"
        @if(isset($datas->url))
        value="{{ $datas->url }}"
        @else
        value="{{ old('url') }}"
        @endif>
    </div>
</div>
<div class="grid grid-cols- gap-6 mt-8">
    <div class="col-span-6 sm:col-span-4">
    <label class="block font-medium text-sm text-gray-700" for="name">何円ぐらいかかる？</label>
    <div class="flex justify-between items-center w-full lg:w-4/12 ">
        <input
        class="mt-2 py-2 px-2 rounded-md shadow border-gray-300 w-10/12"
        type="number"
        step="0.01"
        name="cost"
        placeholder="※4名合計の金額"
        required="required"
        @if(isset($datas->cost))
        value="{{ $datas->cost }}"
        @else
        value="{{ old('cost') }}"
        @endif>
        <span class="flex justify-end h-full text-center text-sm items-center w-2/12 mt-2">円</span>
    </div>
    </div>
</div>

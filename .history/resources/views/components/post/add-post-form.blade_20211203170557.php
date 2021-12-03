<div class="mt-5 md:mt-0 md:col-span-2">
    <div class="px-4 py-5 bg-white sm:p-6 shadow rounded-md">
        <div class="grid grid-cols- gap-6 mt-0">
            <div class="col-span-6 sm:col-span-4">
                <label class="block font-medium text-sm text-gray-700" for="name">1日目か2日目どっち？（2020/02/26 or 2020/02/27）</label>
                <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full lg:w-4/12"  type="date" name="travelDate" placeholder="" list="date-list" required="required" min="2022-02-26" max="2022-02-27">
                <datalist id="date-list">
                    <option value="2022-02-26 00:00:00">2022-02-26</option>
                    <option value="2022-02-27 00:00:00">2022-02-27</option>
                </datalist>
            </div>
        </div>
        <div class="grid grid-cols- gap-6 mt-8">
            <div class="col-span-6 sm:col-span-4 w-full">
                <label class="block font-medium text-sm text-gray-700" for="name">何時ごろ到着予定？</label>
                <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full lg:w-4/12"  type="time" name="arrivalTime" placeholder="" step="1" required="required">
            </div>
        </div>
        <div class="grid grid-cols- gap-6 mt-8">
            <div class="col-span-6 sm:col-span-4">
                <label class="block font-medium text-sm text-gray-700" for="name">何時間ぐらいいる？</label>
                <div class="flex justify-between items-center w-full lg:w-4/12 ">
                    <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300 w-10/12"  type="number" step="0.25"name="stayTime" placeholder="1.5" required="required">
                    <span class="flex justify-end h-full text-center text-sm items-center w-2/12 mt-2">時間</span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols- gap-6 mt-8">
            <div class="col-span-6 sm:col-span-4 w-full">
                <label class="block font-medium text-sm text-gray-700" for="name">何県？</label>
                <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full lg:w-4/12" type="text" name="prefectures" placeholder="" required="required">
            </div>
        </div>
        <div class="grid grid-cols- gap-6 mt-8">
            <div class="col-span-6 sm:col-span-4 w-full">
                <label class="block font-medium text-sm text-gray-700" for="name">最寄りのICを教えてー</label>
                <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full lg:w-4/12" type="text" name="interchange" placeholder="" required="required">
            </div>
        </div>
        <div class="grid grid-cols- gap-6 mt-8">
            <div class="col-span-6 sm:col-span-4 w-full">
                <label class="block font-medium text-sm text-gray-700" for="name">ジャンルを選んでー</label>
                <x-post.add-post-form-genre name="term" data=""></x-post.add-post-form-genre>
            </div>
        </div>
        <div class="grid grid-cols- gap-6 mt-8">
            <div class="col-span-6 sm:col-span-4 w-full">
                <label class="block font-medium text-sm text-gray-700" for="name">ジャンルがグルメならちょい詳しく教えてー</label>
                <x-post.add-post-form-genre name="subTerm" data=""></x-post.add-post-form-genre>
            </div>
        </div>
        <div class="grid grid-cols- gap-6 mt-8">
            <div class="col-span-6 sm:col-span-4 w-full">
                <label class="block font-medium text-sm text-gray-700" for="name">場所名を教えてー</label>
                <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full" type="text" name="placeName" placeholder="場所名" required="required">
            </div>
        </div>
        <div class="grid grid-cols- gap-6 mt-8">
            <div class="col-span-6 sm:col-span-4 w-full">
                <label class="block font-medium text-sm text-gray-700" for="name">場所名のurlを教えてー</label>
                <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300  w-full" type="text" name="url" placeholder="url" required="required">
            </div>
        </div>
        <div class="grid grid-cols- gap-6 mt-8">
            <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="name">何円ぐらいかかる？</label>
            <div class="flex justify-between items-center w-full lg:w-4/12 ">
                <input class="mt-2 py-2 px-2 rounded-md shadow border-gray-300 w-10/12"  type="number" step="0.01"name="cost" placeholder="※4名合計の金額" required="required">
                <span class="flex justify-end h-full text-center text-sm items-center w-2/12 mt-2">円</span>
            </div>
            </div>
        </div>
    </div>
</div>



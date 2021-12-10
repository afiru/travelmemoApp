<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            行きたいところリスト！！
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="p-6 sm:px-8 bg-white border-b border-gray-200">
                    <h2 class="font-semibold mt-2 text-2xl">
                        行きたいところリスト検索
                    </h2>
                    <x-post.add-posts-search :where=$where></x-post.add-posts-search>
                </section>
                <div class="bg-gray-200 bg-opacity-25 w-full">
                    <section class="p-6 sm:px-8  w-full border-b border-gray-200">
                        <h2 class="font-semibold mt-2 text-2xl">
                            行きたいところリスト
                        </h2>

                        <form action="{{ route('posts') }}" method="post">
                            @csrf
                            <div class="flex justify-between flex-row w-full ">
                            @foreach($data as $val)
                                <div class="flex justify-between items-center mt-4 p-2 bg-white shadow-xl sm:rounded-lg w-5/12 sm:w-full lg:w-5/12 xl:w-5/12">
                                    <input class="w-1/12" type="checkbox" name="post_id[]" value="{{ $val['id'] }}">
                                    <section class="w-10/12">
                                        <p class="text-xs">
                                            大ジャンル：{{ config('postTerms.parentTerms')[$val['term']] }}&nbsp;/&nbsp;少ジャンル{{ config('postTerms.parentTerms')[$val['subTerm']] }}
                                        </p>

                                        <p class="text-xs">
                                            <time class="">{{ $val['travelDate'] }} {{ $val['arrivalTime'] }}</time><br>
                                            <span class="">{{ $val['prefectures'] }}　最寄りIC:{{ $val['interchange'] }}</span><br>
                                        </p>
                                        <h2 class="text-lg"><a class="underline" href="{{ $val['url'] }}" target="_blank">{{ $val['placeName'] }}</a></h2>
                                    </section>
                                </div>
                            @endforeach
                            </div>
                            <div class="mt-8 w-full flex justify-end">
                                <button type="submit" class="w-2/12 justify-center inline-flex items-center px-2 p-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                    削除する
                                </button>
                            </div>
                        </form>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
</x-app-layout>

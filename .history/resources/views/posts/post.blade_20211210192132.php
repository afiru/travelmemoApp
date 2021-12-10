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
                            <div class="flex flex-wrap justify-between flex-row w-full ">
                            @foreach($data as $val)
                                <div class="buttonPost flex justify-between items-center mt-4 px-4 py-4 bg-white shadow-xl sm:rounded-lg">
                                    <input class="shadow-xl sm:rounded-lg inputCheck" type="checkbox" name="post_id[]" value="{{ $val['id'] }}">
                                    <section class="secPost">
                                        <p class="">
                                            <time class="text-xs">{{ $val['travelDate'] }} {{ $val['arrivalTime'] }}</time><br>
                                            <span class="text-sm">【{{ $val['prefectures'] }}】【{{ $val['interchange'] }}】【{{ $val['stayTime'] }}時間】</span><br>
                                        </p>
                                        <p class="mt-2 text-sm">
                                            大ジャンル：{{ config('postTerms.parentTerms')[$val['term']] }}&nbsp;/&nbsp;少ジャンル{{ config('postTerms.parentTerms')[$val['subTerm']] }}<a class="underline text-sm ml-2" href="/post/{{ $val['id'] }}">（編集）</a>
                                        </p>
                                        <h2 class="mt-2 text-lg">
                                            <a class="underline" href="{{ $val['url'] }}" target="_blank">
                                            {{ $val['placeName'] }}({{ number_format($val['cost']) }}円)</a>

                                        </h2>
                                        <div class="flex items-center justify-end bookingPostWap">
                                            <span id="point_sum_{{ $val['id'] }}" class="text-sm point_sum_{{ $val['id'] }}">
                                                {{ $val['point_sum'] }}
                                            </span>
                                            <span
                                            class="ml-4 text-center text-sm cursor-pointer block mt-1 mb-1 p-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition jsButtonPost buttonPost"
                                            data-id="{{ $val['id'] }}"
                                            data-target="point_sum_{{ $val['id'] }}"
                                            x-data="{id: '{{ $val['id'] }}',userid:'{{ Auth::id() }}'}"
                                            >いいね</span>
                                        </div>
                                    </section>

                                </div>
                            @endforeach
                            </div>
                            <div class="mt-8 w-full flex justify-end">
                                <button type="submit" class="
                                w-3/12
                                justify-center inline-flex items-center px-2 p-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
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

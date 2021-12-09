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
                        <form action="" method="post" enctype="multipart/form-data">
                            <table class="mt-4 w-full">
                                <tr>
                                    <th class="bg-white p-2 border border-solid border-gray-500"></th>
                                    <th class="bg-white p-2 border border-solid border-gray-500"></th>
                                    <th class="bg-white p-2 border border-solid border-gray-500">日付</th>
                                    <th class="bg-white p-2 border border-solid border-gray-500">到着時間</th>
                                    <th class="bg-white p-2 border border-solid border-gray-500">県名</th>
                                    <th class="bg-white p-2 border border-solid border-gray-500">最寄りIC名</th>
                                    <th class="bg-white p-2 border border-solid border-gray-500">場所名</th>
                                    <th class="bg-white p-2 border border-solid border-gray-500">ジャンル名</th>
                                    <th class="bg-white p-2 border border-solid border-gray-500">子ジャンル名</th>
                                    <th class="bg-white p-2 border border-solid border-gray-500">滞在時間</th>
                                    <th class="bg-white p-2 border border-solid border-gray-500">費用</th>
                                    <th class="bg-white p-2 border border-solid border-gray-500">ポイント</th>
                                    <th class="bg-white p-2 border border-solid border-gray-500">いいね</th>
                                </tr>
                                @foreach($data as $val)
                                <tr>
                                    <td class="text-center text-xs p-2 border border-solid border-gray-300">
                                        <input type="checkbox" name="post_id[]" value="{{ $val['id'] }}">
                                    </td>
                                    <td class="text-center text-xs p-2 border border-solid border-gray-300">
                                        <a href="/posts/{{ $val['id'] }}">編集</a>
                                    </td>
                                    <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ $val['travelDate'] }}</td>
                                    <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ $val['arrivalTime'] }}</td>
                                    <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ $val['prefectures'] }}</td>
                                    <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ $val['interchange'] }}</td>
                                    <td class="text-xs p-2 px-2 border border-solid border-gray-300">
                                        <a href="{{ $val['url'] }}" target="_blank">{{ $val['placeName'] }}</a>
                                    </td>
                                    <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ config('postTerms.parentTerms')[$val['term']] }}</td>
                                    <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ config('postTerms.subTerms')[$val['subTerm']] }}</td>
                                    <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ $val['stayTime'] }}h</td>
                                    <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ number_format($val['cost']) }}円</td>
                                    <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ $val['point_sum'] }}</td>
                                    <td class="text-center text-xs p-2 border border-solid border-gray-300">
                                        <span class="block mt-8 px-2 p-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition jsButtonPost buttonPost" data-id="{{ $val['id'] }}">いいねぇ</span>
                                    </td>
                                </tr>
                                @endforeach
                            </table>

                            <div class="mt-4 w-full flex justify-end">
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
</x-app-layout>

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
                    <x-post.add-posts-search></x-post.add-posts-search>
                </section>
                <div class="bg-gray-200 bg-opacity-25 w-full">
                    <section class="p-6 sm:px-8  w-full border-b border-gray-200">
                        <h2 class="font-semibold mt-2 text-2xl">
                            行きたいところリスト
                        </h2>
                        <form action="" method="post" enctype="multipart/form-data">
                            <table class="mt-4 w-full">
                                <tr>
                                    <th></th>
                                    <th>日付</th>
                                    <th>到着時間</th>
                                    <th>県名</th>
                                    <th>最寄りIC名</th>
                                    <th>場所名</th>
                                    <th>ジャンル名</th>
                                    <th>子ジャンル名</th>
                                    <th>滞在時間</th>
                                    <th>費用</th>
                                    <th>ポイント</th>
                                    <th>いいね</th>
                                </tr>
                                @foreach($data as $val)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="post_id[]" value="{{ $val['id'] }}">
                                    </td>
                                    <td>{{ $val['travelDate'] }}</td>
                                    <td>{{ $val['arrivalTime'] }}</td>
                                    <td>{{ $val['prefectures'] }}</td>
                                    <td>{{ $val['interchange'] }}</td>
                                    <td>
                                        <a href="{{ $val['url'] }}" target="_blank">{{ $val['placeName'] }}</a>
                                    </td>
                                    <td>{{ config('postTerms.parentTerms')[$val['term']] }}</td>
                                    <td>{{ config('postTerms.subTerms')[$val['subTerm']] }}</td>
                                    <td>{{ $val['stayTime'] }}h</td>
                                    <td>{{ number_format($val['cost']) }}円</td>
                                    <td>{{ $val['point_sum'] }}</td>
                                    <td>
                                        <span class="px-2 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition jsButtonPost ButtonPost" data-id="{{ $val['id'] }}">いいねぇ</span>
                                    </td>
                                </tr>
                                @endforeach
                            </table>

                            <div class="mt-4 w-full">
                                <button type="submit" class="w-full justify-center inline-flex items-center px-4 py-4 bg-gray-800 border border-transparent rounded-md font-semibold text-lg text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
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

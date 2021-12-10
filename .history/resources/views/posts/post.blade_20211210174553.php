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
                            @foreach($data as $val)
                            <tr>
                                <td class="text-center text-xs p-2 border border-solid border-gray-300">
                                    <input type="checkbox" name="post_id[]" value="{{ $val['id'] }}">
                                </td>
                                <td class="text-center text-xs p-2 border border-solid border-gray-300">
                                    <a class="underline" href="/post/{{ $val['id'] }}">編集</a>
                                </td>
                                <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ $val['travelDate'] }}</td>
                                <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ $val['arrivalTime'] }}</td>
                                <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ $val['prefectures'] }}</td>
                                <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ $val['interchange'] }}</td>
                                <td class="text-xs p-2 px-2 border border-solid border-gray-300">
                                    <a class="underline" href="{{ $val['url'] }}" target="_blank">{{ $val['placeName'] }}</a>
                                </td>
                                <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ config('postTerms.parentTerms')[$val['term']] }}</td>
                                <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ config('postTerms.subTerms')[$val['subTerm']] }}</td>
                                <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ $val['stayTime'] }}h</td>
                                <td class="text-center text-xs p-2 border border-solid border-gray-300">{{ number_format($val['cost']) }}円</td>
                                <td class="text-center text-xs p-2 border border-solid border-gray-300">
                                    <span id="point_sum_{{ $val['id'] }}" class="point_sum_{{ $val['id'] }}">
                                    {{ $val['point_sum'] }}
                                    </span>
                                </td>
                                <td class="text-center text-xs p-2 border border-solid border-gray-300">
                                    <span
                                    class="cursor-pointer block mt-1 mb-1 px-2 p-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition jsButtonPost buttonPost"
                                    data-id="{{ $val['id'] }}"
                                    data-target="point_sum_{{ $val['id'] }}"
                                    x-data="{id: '{{ $val['id'] }}',userid:'{{ Auth::id() }}'}"
                                    >いいねぇ</span>
                                </td>
                            </tr>
                            @endforeach

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
    <script>

    </script>
</x-app-layout>

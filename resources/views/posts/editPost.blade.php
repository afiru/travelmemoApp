
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}さん　行きたいところを入れてください
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($datas as $data)
            <form action="/post/{{ $data->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="postid" value="{{ $data->id }}">
                <section class="md:grid md:grid-cols-3 md:gap-6 PostAdd">
                    <x-post.add-post-title form-title="行きたい場所候補を変更！" form-discription="場所を変更してアップしてくれぇ"></x-post.add-post-title>
                    <x-post.add-post-form :datas=$data></x-post.add-post-form>
                </section>
                <div class="mt-8 flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow rounded-md">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        更新する
                    </button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</x-app-layout>


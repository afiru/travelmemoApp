<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}さん　行きたいところを入れてください
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('addpost') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="posts[post_author]" value="{{ Auth::id() }}">
                <input type="hidden" name="posts[post_author]" value="{{ Auth::id() }}">
                <section class="md:grid md:grid-cols-3 md:gap-6 PostAdd">
                    <x-post.add-post-title form-title="トイレ情報" form-discription="トイレ情報の入力です。すべての項目を入力してください。"></x-post.add-post-title>
                    <x-post.add-post-form data=""></x-post.add-post-form>
                </section>
                <div class="mt-8 flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow rounded-md">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        この場所を候補に入れる！
                    </button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>

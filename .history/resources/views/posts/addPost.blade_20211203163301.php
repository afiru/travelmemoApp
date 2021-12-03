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
            </form>
            <section class="md:grid md:grid-cols-3 md:gap-6 PostAdd">
                <x-post.add-post-title form-title="トイレ情報" form-discription="トイレ情報の入力です。すべての項目を入力してください。"></x-post.add-post-title>
                <x-mypage.create-post.form-posts data=""></x-mypage.create-post.form-posts>
            </section>
        </div>
    </div>
</x-app-layout>

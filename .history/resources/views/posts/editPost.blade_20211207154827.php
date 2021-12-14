
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}さん　行きたいところを入れてください
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="postid" value="{{ $datas }}">

                <section class="md:grid md:grid-cols-3 md:gap-6 PostAdd">
                    <x-post.add-post-title form-title="行きたい場所候補を変更！" form-discription="場所を変更してアップしてくれぇ"></x-post.add-post-title>
                    <x-post.add-post-form></x-post.add-post-form>
                </section>
            </form>
        </div>
    </div>
</x-app-layout>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            行きたいところリスト！！
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="p-9 sm:px-8 bg-white border-b border-gray-200">
                    <h2 class="font-semibold mt-2 text-2xl">
                        行きたいところリスト検索
                    </h2>
                    <form action="{{ route('posts') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    </form>
                    <div class="mt-2 flex justify-start text-gray-500">

                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}さん　行きたいところを入れてください
        </h2>
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <form action="{{ route('addpost') }}" method="post" enctype="multipart/form-data">
            </form>
        </div>
    </x-slot>
</x-app-layout>

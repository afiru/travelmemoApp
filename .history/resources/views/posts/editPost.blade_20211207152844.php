<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}さん　行きたいところを入れてください
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('addpost') }}" method="post" enctype="multipart/form-data">
                @csrf
            </form>

        </div>
    </div>
</x-app-layout>

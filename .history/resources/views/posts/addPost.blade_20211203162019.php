<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}様　トイレ投稿一覧
        </h2>
    </x-slot>
</x-app-layout>

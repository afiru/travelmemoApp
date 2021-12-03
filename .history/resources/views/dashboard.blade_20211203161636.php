<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            マイページ
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="p-4 sm:px-6 bg-white border-b border-gray-200">
                    <h2 class="mt-2 text-2xl">
                        道後温泉の旅計画へようこそ
                    </h2>
                    <div class="mt-6 text-gray-500">
                        2022年02月26日～2022年02月27日に行く道後温泉旅行で決まった物事を掲載する場所です。
                    </div>
                </section>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <section class="flex items-center">
                            <h2 class="ml-2 text-lg text-gray-600 leading-7 font-semibold">
                                ここには管理画面に関するニュースが流れます。
                            </h2>
                        </section>

                        <div class="ml-2">
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <section class="flex items-center">
                            <h2 class="ml-2 text-lg text-gray-600 leading-7 font-semibold">
                                行きたいところの新着情報が入ります
                            </h2>
                        </section>

                        <div class="ml-12">

                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200">
                        <section class="flex items-center">
                            <h2 class="ml-2 text-lg text-gray-600 leading-7 font-semibold">
                                ここには残タスクが入ります。
                            </h2>
                        </section>

                        <div class="ml-2">

                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 md:border-l">
                        <section class="flex items-center">
                            <h2 class="ml-2 text-lg text-gray-600 leading-7 font-semibold">
                                ここには現在の一人あたりの合計が入ります。
                            </h2>
                        </section>

                        <div class="ml-2">
                            <p>現在の費用（1人あたり税込み）</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

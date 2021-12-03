<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            道後温泉旅計画へようこそ
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>

                    </div>

                    <div class="mt-8 text-2xl">
                        Welcome to your Jetstream application!
                    </div>

                    <div class="mt-6 text-gray-500">

                    </div>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"></div>
                        </div>

                        <div class="ml-12">
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"></div>
                        </div>

                        <div class="ml-12">

                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"></div>
                        </div>

                        <div class="ml-12">

                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                                <path
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Authentication</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Authentication and registration views are included with Laravel Jetstream, as well as
                                support for user email verification and resetting forgotten passwords. So, you're free
                                to get started what matters most: building your application.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

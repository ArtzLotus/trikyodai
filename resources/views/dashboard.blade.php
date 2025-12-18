<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-emerald-400 dark:bg-emerald-600 overflow-hidden border-4 border-emerald-600 shadow-sm sm:rounded-lg">
                <div class="bg-emerald-400 dark:bg-gray-950 overflow-hidden shadow-sm sm:rounded-lg p-6 text-white flex">
                    <h2 class="font-semibold text-2xl leading-tight">
                        {{ __('Manga Populer hari ini!') }}
                    </h2>
                </div>
                <div class="bg-emerald-400 dark:bg-gray-950 border-4 border-emerald-600 sm:rounded-lg p-6 grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <div class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600">
                        <img class="w-full" src="{{ asset('images/dummy.jpeg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="text-emerald-400 font-bold text-xl mb-2">The Coldest Sunset</div>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 3</span>
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 2</span>
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 1</span>
                        </div>
                        <div class="px-6 pb-4">
                            <x-secondary-button>
                                Baca
                            </x-secondary-button>
                        </div>
                    </div>
                    <div class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600">
                        <img class="w-full" src="{{ asset('images/dummy.jpeg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="text-emerald-400 font-bold text-xl mb-2">The Coldest Sunset</div>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 3</span>
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 2</span>
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 1</span>
                        </div>
                        <div class="px-6 pb-4">
                            <x-secondary-button>
                                Baca
                            </x-secondary-button>
                        </div>
                    </div>
                    <div class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600">
                        <img class="w-full" src="{{ asset('images/dummy.jpeg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="text-emerald-400 font-bold text-xl mb-2">The Coldest Sunset</div>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 3</span>
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 2</span>
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 1</span>
                        </div>
                        <div class="px-6 pb-4">
                            <x-secondary-button>
                                Baca
                            </x-secondary-button>
                        </div>
                    </div>
                    <div class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600">
                        <img class="w-full" src="{{ asset('images/dummy.jpeg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="text-emerald-400 font-bold text-xl mb-2">The Coldest Sunset</div>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 3</span>
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 2</span>
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 1</span>
                        </div>
                        <div class="px-6 pb-4">
                            <x-secondary-button>
                                Baca
                            </x-secondary-button>
                        </div>
                    </div>
                    <div class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600">
                        <img class="w-full" src="{{ asset('images/dummy.jpeg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="text-emerald-400 font-bold text-xl mb-2">The Coldest Sunset</div>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 3</span>
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 2</span>
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 1</span>
                        </div>
                        <div class="px-6 pb-4">
                            <x-secondary-button>
                                Baca
                            </x-secondary-button>
                        </div>
                    </div>
                    <div class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600">
                        <img class="w-full" src="{{ asset('images/dummy.jpeg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="text-emerald-400 font-bold text-xl mb-2">The Coldest Sunset</div>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 3</span>
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 2</span>
                            <span class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter 1</span>
                        </div>
                        <div class="px-6 pb-4">
                            <x-secondary-button>
                                Baca
                            </x-secondary-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-emerald-400 dark:bg-emerald-600 overflow-hidden border-4 border-emerald-600 shadow-sm sm:rounded-lg">
                <div class="bg-emerald-400 dark:bg-gray-950 overflow-hidden shadow-sm sm:rounded-lg p-6 text-white flex">
                    <h2 class="font-semibold text-2xl leading-tight">
                        {{ __('Manga Populer hari ini!') }}
                    </h2>
                </div>
                <div
                    class="bg-emerald-400 dark:bg-gray-950 border-4 border-emerald-600 sm:rounded-lg p-6 grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <div class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600">
                        <img class="w-full border-b-2 border-emerald-600" src="{{ asset('images/dummy.jpeg') }}"
                            alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="text-emerald-400 font-bold text-xl mb-2">The Coldest Sunset</div>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                3</span>
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                2</span>
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                1</span>
                        </div>
                        <div class="px-6 pb-4">
                            <x-secondary-button>
                                Baca
                            </x-secondary-button>
                        </div>
                    </div>
                    <div class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600">
                        <img class="w-full border-b-2 border-emerald-600" src="{{ asset('images/dummy.jpeg') }}"
                            alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="text-emerald-400 font-bold text-xl mb-2">The Coldest Sunset</div>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                3</span>
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                2</span>
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                1</span>
                        </div>
                        <div class="px-6 pb-4">
                            <x-secondary-button>
                                Baca
                            </x-secondary-button>
                        </div>
                    </div>
                    <div class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600">
                        <img class="w-full border-b-2 border-emerald-600" src="{{ asset('images/dummy.jpeg') }}"
                            alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="text-emerald-400 font-bold text-xl mb-2">The Coldest Sunset</div>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                3</span>
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                2</span>
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                1</span>
                        </div>
                        <div class="px-6 pb-4">
                            <x-secondary-button>
                                Baca
                            </x-secondary-button>
                        </div>
                    </div>
                    <div class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600">
                        <img class="w-full border-b-2 border-emerald-600" src="{{ asset('images/dummy.jpeg') }}"
                            alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="text-emerald-400 font-bold text-xl mb-2">The Coldest Sunset</div>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                3</span>
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                2</span>
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                1</span>
                        </div>
                        <div class="px-6 pb-4">
                            <x-secondary-button>
                                Baca
                            </x-secondary-button>
                        </div>
                    </div>
                    <div class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600">
                        <img class="w-full border-b-2 border-emerald-600" src="{{ asset('images/dummy.jpeg') }}"
                            alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="text-emerald-400 font-bold text-xl mb-2">The Coldest Sunset</div>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                3</span>
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                2</span>
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                1</span>
                        </div>
                        <div class="px-6 pb-4">
                            <x-secondary-button>
                                Baca
                            </x-secondary-button>
                        </div>
                    </div>
                    <div class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600">
                        <img class="w-full border-b-2 border-emerald-600" src="{{ asset('images/dummy.jpeg') }}"
                            alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="text-emerald-400 font-bold text-xl mb-2">The Coldest Sunset</div>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                3</span>
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                2</span>
                            <span
                                class="inline-block bg-emerald-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#Chapter
                                1</span>
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pb-12">
            <div class="sm:col-span-2 w-full">
                <div class="bg-white dark:bg-emerald-600 overflow-hidden shadow-sm rounded-lg">
                    <div class="bg-emerald-400 dark:bg-gray-950 border-4 border-emerald-600 rounded-t-lg p-4 text-white flex">
                        <h2 class="font-semibold text-xl md:text-2xl leading-tight">
                            {{ __('Manga Terbaru Trikyodai') }}
                        </h2>
                    </div>
                    <div class="bg-emerald-400 dark:bg-gray-950 border-x-4 border-b-4 border-emerald-600 rounded-b-lg p-3 sm:p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="flex flex-row border-2 border-emerald-600 rounded-lg overflow-hidden bg-gray-900 shadow-lg h-24 sm:h-32 lg:h-44 col-span-2">
                            <div class="w-24 sm:w-32 flex-none">
                                <img class="w-full h-full object-cover border-r-2 border-emerald-600"
                                    src="{{ asset('images/dummy.jpeg') }}" alt="...">
                            </div>
                            <div class="p-3 flex flex-col items-start justify-start">
                                <div class="text-emerald-400 font-bold text-sm sm:text-lg line-clamp-1">
                                    The Coldest Sunset
                                </div>
                                <div class="mt-2">
                                    <span
                                        class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Action</span>
                                    <span
                                        class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Drama</span>
                                    <span
                                        class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Sci-fi</span>
                                </div>
                                <div class="text-emerald-600 text-sm sm:text-lg lg:text-sm line-clamp-2 mt-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation
                                </div>
                                <x-secondary-button class="mt-2">
                                    Baca
                                </x-secondary-button>
                            </div>
                        </div>
                        <div class="flex flex-row border-2 border-emerald-600 rounded-lg overflow-hidden bg-gray-900 shadow-lg h-24 sm:h-32 lg:h-44 col-span-2">
                            <div class="w-24 sm:w-32 flex-none">
                                <img class="w-full h-full object-cover border-r-2 border-emerald-600"
                                    src="{{ asset('images/dummy.jpeg') }}" alt="...">
                            </div>
                            <div class="p-3 flex flex-col items-start justify-start">
                                <div class="text-emerald-400 font-bold text-sm sm:text-lg line-clamp-1">
                                    The Coldest Sunset
                                </div>
                                <div class="mt-2">
                                    <span
                                        class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Action</span>
                                    <span
                                        class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Drama</span>
                                    <span
                                        class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Sci-fi</span>
                                </div>
                                <div class="text-emerald-600 text-sm sm:text-lg lg:text-sm line-clamp-2 mt-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation
                                </div>
                                <x-secondary-button class="mt-2">
                                    Baca
                                </x-secondary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="bg-white dark:bg-emerald-600 overflow-hidden shadow-sm rounded-lg">
                    <div class="bg-emerald-400 dark:bg-gray-950 border-4 border-emerald-600 rounded-t-lg p-4 text-white flex">
                        <h2 class="font-semibold text-xl md:text-2xl leading-tight">{{ __('Chat') }}</h2>
                    </div>
                    <div class="bg-emerald-400 dark:bg-gray-950 border-x-4 border-b-4 border-emerald-600 rounded-b-lg p-6 text-white text-sm">
                        Belum ada pesan.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

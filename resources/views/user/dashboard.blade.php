<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Section for Popular Manga Today --}}
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
                    class="bg-emerald-400 dark:bg-gray-950 border-4 border-emerald-600 sm:rounded-lg p-6 grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2">
                    <div
                        class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600 flex flex-col h-full bg-gray-900">
                        <img class="w-full border-b-2 border-emerald-600" src="{{ asset('images/dummy.jpeg') }}"
                            alt="Sunset in the mountains">
                        <div class="px-6 pt-4">
                            <div class="text-emerald-400 font-bold text-xl mb-1">The Coldest Sunset</div>
                        </div>
                        <div class="flex flex-wrap gap-1 justify-center">
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Action</span>
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Drama</span>
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Sci-fi</span>
                        </div>
                        <div class="text-emerald-600 text-sm text-left px-6 sm:text-lg lg:text-sm line-clamp-4 mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation
                        </div>
                        <div class="px-6 pt-2 pb-4 mt-auto">
                            <x-secondary-button>
                                #Chapter 1
                            </x-secondary-button>
                        </div>
                    </div>
                    <div
                        class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600 flex flex-col h-full bg-gray-900">
                        <img class="w-full border-b-2 border-emerald-600" src="{{ asset('images/dummy.jpeg') }}"
                            alt="Sunset in the mountains">
                        <div class="px-6 pt-4">
                            <div class="text-emerald-400 font-bold text-xl mb-1">The Coldest Sunset</div>
                        </div>
                        <div class="flex flex-wrap gap-1 justify-center">
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Action</span>
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Drama</span>
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Sci-fi</span>
                        </div>
                        <div class="text-emerald-600 text-sm text-left px-6 sm:text-lg lg:text-sm line-clamp-4 mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation
                        </div>
                        <div class="px-6 pt-2 pb-4 mt-auto">
                            <x-secondary-button>
                                #Chapter 1
                            </x-secondary-button>
                        </div>
                    </div>
                    <div
                        class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600 flex flex-col h-full bg-gray-900">
                        <img class="w-full border-b-2 border-emerald-600" src="{{ asset('images/dummy.jpeg') }}"
                            alt="Sunset in the mountains">
                        <div class="px-6 pt-4">
                            <div class="text-emerald-400 font-bold text-xl mb-1">The Coldest Sunset</div>
                        </div>
                        <div class="flex flex-wrap gap-1 justify-center">
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Action</span>
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Drama</span>
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Sci-fi</span>
                        </div>
                        <div class="text-emerald-600 text-sm text-left px-6 sm:text-lg lg:text-sm line-clamp-4 mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation
                        </div>
                        <div class="px-6 pt-2 pb-4 mt-auto">
                            <x-secondary-button>
                                #Chapter 1
                            </x-secondary-button>
                        </div>
                    </div>
                    <div
                        class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600 flex flex-col h-full bg-gray-900">
                        <img class="w-full border-b-2 border-emerald-600" src="{{ asset('images/dummy.jpeg') }}"
                            alt="Sunset in the mountains">
                        <div class="px-6 pt-4">
                            <div class="text-emerald-400 font-bold text-xl mb-1">The Coldest Sunset</div>
                        </div>
                        <div class="flex flex-wrap gap-1 justify-center">
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Action</span>
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Drama</span>
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Sci-fi</span>
                        </div>
                        <div class="text-emerald-600 text-sm text-left px-6 sm:text-lg lg:text-sm line-clamp-4 mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation
                        </div>
                        <div class="px-6 pt-2 pb-4 mt-auto">
                            <x-secondary-button>
                                #Chapter 1
                            </x-secondary-button>
                        </div>
                    </div>
                    <div
                        class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600 flex flex-col h-full bg-gray-900">
                        <img class="w-full border-b-2 border-emerald-600" src="{{ asset('images/dummy.jpeg') }}"
                            alt="Sunset in the mountains">
                        <div class="px-6 pt-4">
                            <div class="text-emerald-400 font-bold text-xl mb-1">The Coldest Sunset</div>
                        </div>
                        <div class="flex flex-wrap gap-1 justify-center">
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Action</span>
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Drama</span>
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Sci-fi</span>
                        </div>
                        <div class="text-emerald-600 text-sm text-left px-6 sm:text-lg lg:text-sm line-clamp-4 mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation
                        </div>
                        <div class="px-6 pt-2 pb-4 mt-auto">
                            <x-secondary-button>
                                #Chapter 1
                            </x-secondary-button>
                        </div>
                    </div>
                    <div
                        class="rounded overflow-hidden shadow-lg flex-none border-2 border-emerald-600 flex flex-col h-full bg-gray-900">
                        <img class="w-full border-b-2 border-emerald-600" src="{{ asset('images/dummy.jpeg') }}"
                            alt="Sunset in the mountains">
                        <div class="px-6 pt-4">
                            <div class="text-emerald-400 font-bold text-xl mb-1">The Coldest Sunset</div>
                        </div>
                        <div class="flex flex-wrap gap-1 justify-center">
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Action</span>
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Drama</span>
                            <span
                                class="inline-flex items-center rounded-md bg-green-400/10 px-2 py-1 text-xs font-medium text-green-400 inset-ring inset-ring-green-500/20">Sci-fi</span>
                        </div>
                        <div class="text-emerald-600 text-sm text-left px-6 sm:text-lg lg:text-sm line-clamp-4 mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation
                        </div>
                        <div class="px-6 pt-2 pb-4 mt-auto">
                            <x-secondary-button>
                                #Chapter 1
                            </x-secondary-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section for Latest Manga and Chat --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pb-12">
            {{-- Latest Manga --}}
            <div class="sm:col-span-2 w-full">
                <div class="bg-white dark:bg-emerald-600 overflow-hidden shadow-sm rounded-lg">
                    <div
                        class="bg-emerald-400 dark:bg-gray-950 border-4 border-emerald-600 rounded-t-lg p-4 text-white flex">
                        <h2 class="font-semibold text-xl md:text-2xl leading-tight">
                            {{ __('Manga Terbaru Trikyodai') }}
                        </h2>
                    </div>
                    <div
                        class="bg-emerald-400 dark:bg-gray-950 border-x-4 border-b-4 border-emerald-600 rounded-b-lg p-3 sm:p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div
                            class="flex flex-row border-2 border-emerald-600 rounded-lg overflow-hidden bg-gray-900 shadow-lg h-24 sm:h-32 lg:h-44 col-span-2">
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
                        <div
                            class="flex flex-row border-2 border-emerald-600 rounded-lg overflow-hidden bg-gray-900 shadow-lg h-24 sm:h-32 lg:h-44 col-span-2">
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

            {{-- Chat Section --}}
            <div class="w-full">
                <div class="bg-white dark:bg-emerald-600 overflow-hidden shadow-sm rounded-lg">
                    <div
                        class="bg-emerald-400 dark:bg-gray-950 border-4 border-emerald-600 rounded-t-lg p-4 text-white flex">
                        <h2 class="font-semibold text-xl md:text-2xl leading-tight">{{ __('Chat') }}</h2>
                    </div>
                    <div
                        class="bg-emerald-400 dark:bg-gray-950 border-x-4 border-b-4 border-emerald-600 rounded-b-lg p-3">
                        <div class="text-white text-sm border-b-4 border-emerald-600 pb-2 mt-2">
                            Belum ada pesan.
                        </div>
                        <div class="border-emerald-600 mt-4 dark:bg-emerald-600 rounded-lg text-white">
                            <form>
                                <label for="chat" class="sr-only">Your message</label>
                                <div class="flex items-center px-3 py-2 rounded-base bg-neutral-secondary-soft">
                                    <div class="bg-gray-950 rounded-lg justify-center flex">
                                        <button type="button"
                                            class="p-2 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-tertiary-medium">
                                            <svg class="w-6 h-6" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M7 8v8a5 5 0 1 0 10 0V6.5a3.5 3.5 0 1 0-7 0V15a2 2 0 0 0 4 0V8" />
                                            </svg>
                                            <span class="sr-only">Attach file</span>
                                        </button>
                                        <button type="button"
                                            class="p-2 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-tertiary-medium">
                                            <svg class="w-6 h-6" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M16 18H8l2.5-6 2 4 1.5-2 2 4Zm-1-8.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M10 3v4a1 1 0 0 1-1 1H5m14-4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1ZM8 18h8l-2-4-1.5 2-2-4L8 18Zm7-8.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                                            </svg>
                                            <span class="sr-only">Upload image</span>
                                        </button>
                                    </div>
                                    <textarea id="chat" rows="1"
                                        class="mx-4 bg-neutral-primary-medium border border-default-medium text-heading text-sm rounded-lg focus:ring-brand focus:border-brand block w-full px-3 py-2.5 placeholder:text-body"
                                        placeholder="Your message..."></textarea>
                                    <div class="bg-gray-950 rounded-lg justify-center">
                                        <button type="submit"
                                            class="inline-flex justify-center p-2 text-fg-brand rounded-full cursor-pointer hover:bg-brand-softer">
                                            <svg class="w-6 h-6 rotate-90 rtl:-rotate-90" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m12 18-7 3 7-18 7 18-7-3Zm0 0v-5" />
                                            </svg>
                                            <span class="sr-only">Send message</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

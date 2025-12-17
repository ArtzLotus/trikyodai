<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Manga Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <form action="{{ route('mangas.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div>
                        <x-input-label for="title" :value="__('Judul Manga')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="cover_image" :value="__('Cover Image')" />
                        <input id="cover_image" type="file" name="cover_image" class="block mt-1 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" required>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">JPG, PNG, WEBP (Max. 2MB).</p>
                        <x-input-error :messages="$errors->get('cover_image')" class="mt-2" />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <x-input-label for="author" :value="__('Author (Penulis)')" />
                            <x-text-input id="author" class="block mt-1 w-full" type="text" name="author" :value="old('author')" />
                            <x-input-error :messages="$errors->get('author')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="artist" :value="__('Artist (Ilustrator)')" />
                            <x-text-input id="artist" class="block mt-1 w-full" type="text" name="artist" :value="old('artist')" />
                            <x-input-error :messages="$errors->get('artist')" class="mt-2" />
                        </div>
                    </div>

                    <div>
                        <x-input-label for="genre" :value="__('Genre')" />
                        <x-text-input id="genre" class="block mt-1 w-full" type="text" name="genre" :value="old('genre')" placeholder="Contoh: Action, Fantasy, Isekai" />
                        <x-input-error :messages="$errors->get('genre')" class="mt-2" />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <x-input-label for="status" :value="__('Status')" />
                            <select id="status" name="status" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full">
                                <option value="Ongoing">Ongoing</option>
                                <option value="Completed">Completed</option>
                                <option value="Hiatus">Hiatus</option>
                            </select>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="release_date" :value="__('Tanggal Rilis')" />
                            <x-text-input id="release_date" class="block mt-1 w-full" type="date" name="release_date" :value="old('release_date')" />
                            <x-input-error :messages="$errors->get('release_date')" class="mt-2" />
                        </div>
                    </div>

                    <div>
                        <x-input-label for="description" :value="__('Sinopsis')" />
                        <textarea id="description" name="description" rows="5" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full">{{ old('description') }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end gap-4">
                        <a href="{{ route('mangas.index') }}">
                            <x-secondary-button type="button">
                                {{ __('Batal') }}
                            </x-secondary-button>
                        </a>

                        <x-primary-button>
                            {{ __('Simpan Manga') }}
                        </x-primary-button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
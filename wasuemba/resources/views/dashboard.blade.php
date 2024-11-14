<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold text-center text-white mb-8">Fitur Admin</h1>
                    <ul>
                        <li>
                            <a href="/berita/tambah" class="no-underline hover:underline">Tambah Berita &raquo;</a>
                        </li>
                        <li>
                            <a href="/wisata/tambah" class="no-underline hover:underline">Tambah List Wisata &raquo;</a>
                        </li>
                    </ul>
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

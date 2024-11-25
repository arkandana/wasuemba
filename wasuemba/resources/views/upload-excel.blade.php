<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('success'))
                        <div class="mb-4 text-green-600">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h1 class="text-3xl mb-4">Tambah Data Strategis</h1>
                    
                    <button class="bg-blue-500 text-white px-4 py-2 rounded mb-8"><a href="{{ asset('csv_template/template_datastrat_wasuemba.csv') }}">Download Template Data</a></button>
                    <h2 class="text-xl mb-4">Upload File csv template data</h2>
                    <form action="{{ route('import-excel') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="file" name="file" required>
                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                                Upload
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ mix('resources/js/validation.js') }}"></script>
</x-app-layout>

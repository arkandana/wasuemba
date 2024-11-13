<x-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Struktur Organisasi</h1>

        <!-- Grid container for organization structure -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Card 1 -->
            @foreach($wisataList as $wisata)
            <div class="bg-white shadow-md rounded-lg overflow-hidden p-4 hover:shadow-xl transition-shadow">
                <img class="" src="{{ asset('storage/' . $wisata->image) }}" alt="Profile Image">
                <div class="text-center mt-4">
                    <h3 class="text-xl font-semibold text-gray-900">Nama Anggota</h3>
                    <p class="text-gray-600">Posisi Jabatan</p>
                </div>
                <p class="text-gray-700 text-center mt-2">
                    Deskripsi singkat tentang peran dan tanggung jawab di organisasi.
                </p>
            </div>
            @endforeach

        </div>
    </div>
</x-layout>

<x-layout>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-5xl font-bold text-center text-gray-800 mb-8">Wisata Kami</h1>

            <!-- Grid container for organization structure -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Card 1 -->
                @foreach ($wisataList->sortByDesc('created_at') as $wisata)
                    <div class="inline-block max-w-fit max-h-fit bg-white shadow-md rounded-lg overflow-hidden p-4 hover:shadow-xl transition-shadow">
                        <img class="" src="{{ asset('storage/' . $wisata->image) }}" alt="Profile Image">
                        <div class="text-center mt-4">
                            <h3 class="text-xl font-semibold text-gray-900">{{ Str::upper($wisata['title']) }}</h3>
                            <i class="bi bi-geo-alt"></i>
                            <p class="text-gray-600">Desa Wasuemba</p>
                        </div>
                        <p class="text-gray-700 text-center mt-2">
                            {{ ucfirst(Str::lower($wisata['deskripsi'])) }}
                        </p>
                        @if (Auth::check() && Auth::user())
                            <form action="{{ route('wisata.destroy',$wisata->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus
                                    </button>
                            </form>
                        @endif
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-layout>

<x-layout>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-5xl font-bold text-center text-gray-800 mb-8">Halaman Berita</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div class="bg-white shadow-md rounded-lg overflow-hidden p-4 hover:shadow-xl transition-shadow">
                    <img class="" src="{{ asset('storage/' . $post->image) }}" alt="Profile Image">
                    <div class="text-center mt-4">
                        <h3 class="text-xl font-semibold text-gray-900">{{ Str::title($post['title']) }}</h3>
                        <div class="text-base text-gray-500">
                            <a href="#" class="no-underline">{{ $post->author->name }}</a> |
                            {{ $post->created_at->diffForHumans() }}
                        </div>
                        <i class="bi bi-geo-alt"></i>
                        <p class="text-gray-600">Desa Wasuemba</p>
                    </div>
                    <p class="text-gray-700 text-left mt-2">
                        {{ Str::limit($post['body'], 150) }}
                    </p>
                    <div class="mt-4 flex justify-between items-center">
                        <a href="/berita/{{ $post['slug'] }}"
                            class="text-indigo-600 hover:text-indigo-800 font-semibold">
                            Baca Selengkapnya
                        </a>
                    </div>
                    @if (Auth::check() && Auth::user())
                        <form action="{{ route('berita.destroy', $post->id) }}" method="POST" style="display:inline;">
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
    {{-- <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/berita/{{$post['slug']}}" class="no-underline hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{$post['title']}}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="#" class="no-underline">{{$post->author->name}}</a> | {{$post->created_at->diffForHumans()}}
        </div>
        <p class="my-4 font-light">{{Str::limit($post['body'],150)}}</p>
        <a href="/berita/{{$post['slug']}}" class="font-medium text-blue-500 no-underline hover:underline">Selengkapnya &raquo;</a>
    </article> --}}
    {{-- @endforeach --}}

</x-layout>

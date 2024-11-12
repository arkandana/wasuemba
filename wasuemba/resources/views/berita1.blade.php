<x-layout>
    <h3>Halaman berita</h3>

    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{$post['title']}}</h2>
        <div class="text-base text-gray-500">
            <a href="#" class="no-underline">{{$post->author->name}}</a> | {{$post->created_at->diffForHumans()}}
        </div>
        <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar Berita" class="w-full h-auto mt-4">
        <p class="my-4 font-light">{{$post['body'],150}}</p>
        <a href="/berita" class="font-medium text-blue-500 no-underline hover:underline">&laquo; Kembali</a>
    </article>

</x-layout>
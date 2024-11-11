<x-layout>
    {{-- <div class="py-8 max-2xl-screen-md">
        <h3>Halaman About</h3>
        <p>
            
        </p>
    </div> --}}
    
    <div class="container mx-auto px-4 py-8">
        <!-- Grid dengan 3 kolom pada layar medium ke atas, dan 1 kolom pada layar kecil -->
        <h1 class="text-center">Tentang Kami</h1>
        <img class="mx-auto" src="{{ asset('img/logowasuemba.png') }}" alt="Logo Desa Wasuemba">
        <p class="text-left">
            Desa Wasuemba merupakan salah satu desa di Kecamatan Wabula Kabupaten Buton, Provinsi Sulawesi Tenggara, 
            memilik luas 4500 Ha yang terdiri dari 60 Ha berupa pemukiman Existing, 808 Ha berupa Pengembangan Pemukiman, 55 Ha Berupa Pesisir Pantai,  
            1000,4 Ha Berupa Perkebunan Kelapa, 2000,4 Ha Berupa Perkebunan Campuran, sisanya 576,2 Ha merupakan pertanian Lahan Kering.
            Secara Administratif, wilayah Desa Wasuemba terdiri dari 4 (empat) Dusun yaitu Dusun Wasuemba,Dusun Ngapa, Dusun Bantea dan dusun Piropa.
        </p>
        <p class="text-left">
            Desa wasuemba memiliki banyak hal menarik dan unik yang dapat di suguhkan bagi para pengunjung / wisatawan yang datang ke tempat ini. 
            Dari segi wisata budaya di Desa wasuemba ini sendiri mempunyai benteng yang masih berdiri letaknya yang hanya 200 meter dari gedung 
            information center dapat di tempuh dengan berjalan kaki, benteng ini berdiri sejak zaman kerajaan Buton dan memiliki ikatan dengan benteng terluas di dunia 
            dan perjalanan Oputa Yiko yang merupakan pahlawan nasional. Bukti peninggalan sejarah pun masih dapat di liat seperti meriam, kuburan penjaga benteng pada masa itu, 
            dan situs lain. Dari segi wisata pantai yang terkenal langka dan unik di Kabupaten Buton yakni pantai lahonduru,
        </p>
        <span>
            Beberapa Penghargaan Desa Wisata diantaranya:
            <ul class="typing-effect text-md text-gray-800">
                <li>
                    1. 500 besar Anugerah Desa Wisata Indonesia
                </li>
                <li>
                    2. 300 besar Anugerah Desa Wisata Indonesia
                </li>
                <li>
                    3. 100 besar Anugerah Desa Wisata Indonesia
                </li>
            </ul>
        </span>

        <h1 class="text-center">Video Kami</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          
          <!-- Video 1 -->
          <div class="aspect-w-16 aspect-h-9">
            <iframe 
              class="w-full h-full rounded-lg shadow-md"
              src="https://www.youtube.com/embed/66Vzt3Db3cc?si=qpy392ruzd-vjT9o" 
              title="YouTube video player" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen>
            </iframe>
          </div>
          
          <!-- Video 2 -->
          <div class="aspect-w-16 aspect-h-9">
            <iframe 
              class="w-full h-full rounded-lg shadow-md"
              src="https://www.youtube.com/embed/0gFltbO_Lis?si=GLN_1VdIrO2gP73U" 
              title="YouTube video player" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen>
            </iframe>
          </div>
          
          <!-- Video 3 -->
          <div class="aspect-w-16 aspect-h-9">
            <iframe 
              class="w-full h-full rounded-lg shadow-md"
              src="https://www.youtube.com/embed/pptUDFmyiTg?si=sfibtT1s8oZM6tH9" 
              title="YouTube video player" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen>
            </iframe>
          </div>
          
        </div>
      </div>
</x-layout>
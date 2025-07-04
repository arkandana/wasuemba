<x-layout>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-5xl font-bold text-center text-gray-800 mb-8">Halaman Kontak</h1>
        <div class="container mx-auto px-4 py-8">
            <!-- Kontainer Grid untuk layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Bagian Kiri - 2 Kartu Kontak -->
                <div class="flex flex-col space-y-4">
                    <!-- Card 1 -->
                    <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl">
                        <h3 class="text-xl font-semibold mb-2">Hubungi Kami</h3>
                        <p class="text-gray-700">Alamat: Desa Wasuemba Kecamatan Wabula</p>
                        <p class="text-gray-700">Telepon: 085256827300</p>
                        <p class="text-gray-700">Email: wasuembadesaq2001@gmail.com</p>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl">
                        <h3 class="text-xl font-semibold mb-2">Jam Operasional</h3>
                        <p class="text-gray-700">Senin - Jumat: 08.00 - 17.00</p>
                        <p class="text-gray-700">Sabtu - Minggu: Tutup</p>
                    </div>
                </div>

                <!-- Bagian Kanan - Google Map -->
                <div class="flex justify-center items-center">
                    <!-- Embed Google Map -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.6050024103915!2d122.84111147586178!3d-5.625183455763451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da416e795309607%3A0x50a2a57df8afab3e!2sKANTOR%20DESA%20WASUEMBA!5e0!3m2!1sen!2sid!4v1731284379066!5m2!1sen!2sid"
                        width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0" class="rounded-lg shadow-md">
                    </iframe>
                </div>
            </div>

        </div>
        <div class="bg-white rounded-lg overflow-hidden w-80 mx-auto shadow-md hover:shadow-xl">
            <!-- Card 1 -->
            <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl justify-center items-center text-center">
                <h3 class="text-2xl justify-center font-semibold mb-2 text-center">Sosial Media Kami</h3>
                <ul>
                    <li>
                        <a href="https://www.youtube.com/@Wasuembadesanto" class="text-center">
                            <i class="bi bi-youtube text-5xl text-black"></i>
                        </a>
                        <p>YouTube: Wasuemba Desanto</p>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/wasuemba_desanto/" class="text-center">
                            <i class="bi bi-instagram text-5xl text-black"></i>
                        </a>
                        <p>Instagram: wasuemba_desanto</p>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/Wasuemba%20Desaq" class="text-center">
                            <i class="bi bi-facebook text-5xl text-black"></i>
                        </a>
                        <p>Facebook: Wasuemba Desaq</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-layout>

<x-layout>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-5xl font-bold text-center text-gray-800 mb-8">Halaman Data Strategis</h1>
        <!-- Main Content -->
        <div class="flex-1 p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg overflow-hidden w-80 mx-auto shadow-md hover:shadow-xl">
                <div class="p-4">
                    <h2 class="text-2xl font-bold text-gray-800 text-center">Analisis SWOT</h2>
                </div>
                <div class="w-full h-120 bg-gray-200">
                    <img class="w-full h-full object-cover" src="{{ asset('img/Infografis Analisis Swot Descan.jpg') }}"
                        alt="">
                </div>
            </div>

            <div class="bg-white rounded-lg overflow-hidden w-80 mx-auto shadow-md hover:shadow-xl">
                <div class="p-4">
                    <h2 class="text-2xl font-bold text-gray-800 text-center">Buku Profil Desa Wasuemba 2024</h2>
                </div>
                <div class="w-full h-120 bg-gray-200">
                    <img class="w-full h-full object-cover" src="{{ asset('img/PROFIL DESA WASUEMBA_ttd_001.png') }}"
                        alt="">
                </div>
                <div class="p-4">
                    <p class="text-gray-700">Buku Profil Desa Wasuemba 2024 merupakan publikasi yang
                        diterbitkan oleh Badan Pusat Statistik Kabupaten sebagai output dari program Desa Cantik (Desa
                        Cinta Statistik)</p>
                    <div class="mt-4 flex justify-between items-center">
                        <a href="https://drive.google.com/file/d/1n8LKGgzVBFEojzOhCKb4tiZD8szuRjAA/view?usp=sharing"
                            target="_blank" class="text-indigo-600 hover:text-indigo-800 font-semibold">
                            Baca Selengkapnya
                        </a>
                        <span class="text-gray-500 text-sm">© 2024 Tim Desa Cantik BPS Kabupaten Buton</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg overflow-hidden w-80 mx-auto shadow-md hover:shadow-xl">
                <div class="p-4">
                    <h2 class="text-2xl font-bold text-gray-800 text-center">Infografis Desa Cantik 2024</h2>
                </div>
                <div class="w-full h-120 bg-gray-200">
                    <img class="w-full h-full object-cover" src="{{ asset('img/Infografis Desa Wasuemba.png') }}"
                        alt="">
                </div>
            </div>
        </div>

        {{-- Chart --}}
        <div class="flex-1 p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1: Line Chart -->
            <div class="bg-white p-6 rounded-lg hover:shadow-xl shadow-md">
                <h2 class="text-lg font-semibold mb-4 text-center">Jumlah Pengunjung Wisatawan Desa Wasuemba, 2024</h2>
                <canvas id="lineChart"></canvas>
            </div>

            <!-- Card 2: Bar Chart -->
            <div class="bg-white p-6 rounded-lg hover:shadow-xl text-center shadow-md">
                <h2 class="text-lg font-semibold mb-4">Jumlah Penduduk Desa Wasuemba, 2020-2024</h2>
                <canvas id="barChart"></canvas>
            </div>

            <!-- Card 3: Doughnut Chart -->
            <div class="bg-white p-6 rounded-lg hover:shadow-xl text-center shadow-md">
                <h2 class="text-lg font-semibold mb-4">Jumlah Penduduk Desa Wasuemba Menurut Jenis Kelamin, 2024</h2>
                <canvas id="doughnutChart"></canvas>
            </div>

            <!-- Card 3: Doughnut Chart -->
            <div class="bg-white p-6 rounded-lg hover:shadow-xl text-center shadow-md">
                <h2 class="text-lg font-semibold mb-4">Jumlah Pengunjung Wisatawan Desa Wasuemba, 2024</h2>
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead>
                        <tr class="text-left bg-gray-100">
                            <th class="px-4 py-2 border-b">Month</th>
                            <th class="px-4 py-2 border-b">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border-b"></td>
                            <td class="px-4 py-2 border-b"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-layout>

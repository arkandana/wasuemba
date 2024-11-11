<x-layout>
    <h3 class="text-center">Halaman Data Strategis</h3>
        <!-- Main Content -->
        <div class="flex-1 p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1: Line Chart -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
              <h2 class="text-lg font-semibold mb-4">Jumlah Pengunjung Wisatawan Desa Wasuemba, 2024</h2>
              <canvas id="lineChart"></canvas>
            </div>
      
            <!-- Card 2: Bar Chart -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
              <h2 class="text-lg font-semibold mb-4">Jumlah Penduduk Desa Wasuemba, 2020-2024</h2>
              <canvas id="barChart"></canvas>
            </div>
      
            <!-- Card 3: Doughnut Chart -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
              <h2 class="text-lg font-semibold mb-4">Jumlah Pengunjung Wisatawan Desa Wasuemba, 2024</h2>
              <canvas id="doughnutChart"></canvas>
            </div>

            <!-- Card 3: Doughnut Chart -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
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
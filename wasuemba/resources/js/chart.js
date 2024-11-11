    // Line Chart (Sales Over Time)
    const lineChartCtx = document.getElementById('lineChart').getContext('2d');
    new Chart(lineChartCtx, {
        type: 'line',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                label: 'Orang',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ],
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Bar Chart (Revenue by Region)
    const barChartCtx = document.getElementById('barChart').getContext('2d');
    new Chart(barChartCtx, {
        type: 'bar',
        data: {
            labels: ['2019', '2020', '2021', '2022', '2023'],
            datasets: [{
                label: 'Jumlah Penduduk',
                data: [0, 0, 760, 762, 764],
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Doughnut Chart (Product Distribution)
    const doughnutChartCtx = document.getElementById('doughnutChart').getContext('2d');
    new Chart(doughnutChartCtx, {
        type: 'doughnut',
        data: {
            labels: ['Perempuan', 'Laki-laki'],
            datasets: [{
                data: [49.47, 50.53],
                backgroundColor: ['#FF5733', '#33FF57', '#3357FF', '#FF33A1'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });
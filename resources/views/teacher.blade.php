<x-layout>
    <div style="background: #F4EBD0; min-height: 91.9vh;">
        <div id="carouselExample" class="carousel slide shadow" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('img/png/goes-to-japan.png') }}" class="d-md-none w-100" alt="First slide">
                    <img src="{{ url('img/png-dekstop/1.png') }}" class="d-md-block d-none w-100" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="{{ url('img/png/teacher-training.png') }}" class="d-md-none w-100" alt="Second slide">
                    <img src="{{ url('img/png-dekstop/2.png') }}" class="d-md-block d-none w-100" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="{{ url('img/png/talkshow.png') }}" class="d-md-none w-100" alt="Third slide">
                    <img src="{{ url('img/png-dekstop/3.png') }}" class="d-md-block d-none w-100" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Report Section -->
        <div style="background: #F4EBD0; min-height: 91.9vh;">
            @if ($dataPerKelas)
                <div class="container mt-5 d-flex justify-content-center">
                    <label for="" class="h2 text-center">Report Class for {{ $tanggal }}</label>
                </div>
                <!-- Form untuk memilih tanggal -->
                <div class="container mt-3 d-flex justify-content-center">
                    <form action="{{ route('dashboard.tampil') }}" method="GET" class="d-flex">
                        <input type="date" name="tanggal" value="{{ $tanggal }}" class="form-control">
                        <button type="submit" class="btn btn-primary ms-2">Filter</button>
                    </form>
                </div>
            @endif
    
            <div class="container mt-5">
                <!-- Loop melalui setiap kelas dan tampilkan chart untuk masing-masing -->

                @forelse ($dataPerKelas as $kelasId => $data)
                    <div class="card mb-5">
                        <div class="card-header">
                            <h4 class="text-center">Kelas ID: {{ $kelasId }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="col-12 d-flex flex-column flex-md-row mt-5">
                                <div class="col-12 col-md-8">
                                    <h3 class="text-center">Weekly Attendance Report</h3>
                                    <canvas id="lineChart{{ $kelasId }}"></canvas>
                                </div>
                                <div class="col-12 col-md-4">
                                    <h3 class="text-center">Daily Attendance Report</h3>
                                    <canvas id="pieChart{{ $kelasId }}"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Script for Line and Pie Chart -->
                    <script>
                        let data{{ $kelasId }} = @json($data);
                        // Line Chart untuk mingguan
                        let ctxLine{{ $kelasId }} = document.querySelector('#lineChart{{ $kelasId }}').getContext('2d');
                        let lineChart{{ $kelasId }} = new Chart(ctxLine{{ $kelasId }}, {
                            type: 'bar',
                            data: {
                                labels: ['Hadir', 'Izin', 'Sakit', 'Alpha'],
                                datasets: 
                                [
                                    {
                                        data: [data{{ $kelasId }}['Hadir'], data{{ $kelasId }}['Izin'], data{{ $kelasId }}['Sakit'], data{{ $kelasId }}['Alpha']],
                                        borderColor: 'rgba(75, 192, 192, 1)',
                                        fill: true,
                                    },
                                    {
                                        data: [data{{ $kelasId }}['Hadir'], data{{ $kelasId }}['Izin'], data{{ $kelasId }}['Sakit'], data{{ $kelasId }}['Alpha']],
                                        borderColor: 'rgba(75, 192, 192, 1)',
                                        fill: false,
                                    },
                                    {
                                        data: [data{{ $kelasId }}['Hadir'], data{{ $kelasId }}['Izin'], data{{ $kelasId }}['Sakit'], data{{ $kelasId }}['Alpha']],
                                        borderColor: 'rgba(75, 192, 192, 1)',
                                        fill: false,
                                    },
                                    
                                ]
                            },
                            options: {
                                responsive: true, // Make the chart responsive
                                scales: {
                                    y: {
                                        beginAtZero: true // Ensure the y-axis starts at 0
                                    }
                                }
                            }
                        });

                        // Pie Chart untuk harian
                        let ctxPie{{ $kelasId }} = document.querySelector('#pieChart{{ $kelasId }}').getContext('2d');
                        let pieChart{{ $kelasId }} = new Chart(ctxPie{{ $kelasId }}, {
                            type: 'pie',
                            data: {
                                labels: ['Hadir', 'Izin', 'Sakit', 'Alpha'],
                                datasets: [{
                                    data: [data{{ $kelasId }}['Hadir'], data{{ $kelasId }}['Izin'], data{{ $kelasId }}['Sakit'], data{{ $kelasId }}['Alpha']],
                                    backgroundColor: [
                                        'rgba(75, 192, 192, 0.2)', // Hadir
                                        'rgba(255, 206, 86, 0.2)', // Izin
                                        'rgba(153, 102, 255, 0.2)', // Sakit
                                        'rgba(255, 99, 132, 0.2)'   // Alpha
                                    ],
                                    borderColor: [
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 99, 132, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                            }
                        });
                    </script>
                @empty
                    <div class="container col-11 bg-dark text-light rounded d-flex justify-content-center align-items-center py-5">
                        <h3 class="py-5 my-5">
                            <label for="" class="py-5 my-5">no data chart</label> 
                        </h3>
                    </div>
                @endforelse
            </div>
    
            <x-footer></x-footer>
        </div>
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</x-layout>

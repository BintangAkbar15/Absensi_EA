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
                <img src="{{ url('img/png-dekstop/2.png') }}" class="d-md-block d-none w-100" alt="First slide">
              </div>
              <div class="carousel-item">
                <img src="{{ url('img/png/talkshow.png') }}" class="d-md-none w-100" alt="Third slide">
                <img src="{{ url('img/png-dekstop/3.png') }}" class="d-md-block d-none w-100" alt="First slide">
              </div>
            </div>
        </div>

        <div class="container mt-5 d-flex justify-content-center">
            <label for="" class="h2 text-center">Report Class</label>
        </div>

        <div class="d-flex col-12 container overflow-scroll overflow-y-hidden gap-3 gap-md-5">
            <div class="container mt-2 mt-md-5 py-4 p-md-5 px-5 rounded" style="background: white; max-width: 100vw; ">
                <div class="d-flex flex-column">
                    <label class="text-end fs-3">Laporan Absensi Kelas A</label>
                    <div class="mt-2 d-flex flex-column flex-md-row col-12 gap-1 gap-md-5 justify-content-start">
                        <label class="text-start">Jumlah Siswa : {{ $totalhadir }}</label>
                        <label class="text-start">Siswa Hadir : {{ $hadir }}</label>
                        <label class="text-start">Siswa Izin : {{ $izin }}</label>
                        <label class="text-start">Siswa sakit : {{ $sakit }}</label>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mt-5">
                    <div class="col-12 col-md-8">
                        <h6 class="text-center">Weekly Attendance Report</h6>
                        <canvas id="blockChart"></canvas>
                    </div>
                    <div class="col-12 col-md-4">
                        <h6 class="text-center">Dialy Attendance Report</h6>
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <x-footer></x-footer>
        <script>
            const data = @json([$hadir, $izin, $sakit]);

            // Pie Chart
            const ctxPie = document.querySelector('#pieChart').getContext('2d'); // Ganti querySelectorAll dengan querySelector
            const pieChart = new Chart(ctxPie, {
                type: 'pie',
                data: {
                    labels: ['Hadir', 'Izin', 'Sakit'],
                    datasets: [{
                        label: 'Jumlah Data',
                        data: data,
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(54, 162, 235, 1)',
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
        
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>  
</x-layout>
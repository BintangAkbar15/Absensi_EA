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

        <div class="d-flex col-11 container overflow-scroll overflow-y-hidden">
            <div class="container me-5 mt-5 rounded" style="background: white; max-width: 100vw; height: 600px;">
                <div class="d-flex flex-column">
                    <label class="text-end fs-3">Laporan Absensi Kelas A</label>
                    <div class="mt-2 d-flex flex-column flex-md-row col-12 gap-1 justify-content-start">
                        <label class="text-start">Jumlah Siswa : {{ count($data) }}</label>
                        <label class="text-start">Siswa Hadir : {{ count($data) }}</label>
                        <label class="text-start">Siswa Izin : {{ count($data) }}</label>
                        <label class="text-start">Siswa Alpha : {{ count($data) }}</label>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mt-5">
                    <div class="col-12 col-md-8">
                        <h3 class="text-center">Line Chart</h3>
                        <canvas id="lineChart"></canvas>
                    </div>
                    <div class="col-12 col-md-4">
                        <h3 class="text-center">Pie Chart</h3>
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
            
            <!-- Konten Kedua -->
            <div class="container me-5 mt-5 rounded" style="background: white; max-width: 100vw; height: 600px;">
                <div class="d-flex flex-column">
                    <label class="text-end fs-3">Laporan Absensi Kelas B</label> 
                    <div class="mt-2 d-flex flex-column flex-md-row col-12 gap-1 justify-content-start">
                        <label class="text-start">Jumlah Siswa : {{ count($data) }}</label>
                        <label class="text-start">Siswa Hadir : {{ count($data) }}</label>
                        <label class="text-start">Siswa Izin : {{ count($data) }}</label>
                        <label class="text-start">Siswa Alpha : {{ count($data) }}</label>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mt-5">
                    <div class="col-12 col-md-8">
                        <h3 class="text-center">Line Chart</h3>
                        <canvas id="lineChart"></canvas>
                    </div>
                    <div class="col-12 col-md-4">
                        <h3 class="text-center">Pie Chart</h3>
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
            
            <!-- Konten Ketiga -->
            <div class="container me-5 mt-5 rounded" style="background: white; max-width: 100vw; height: 600px;">
                <div class="d-flex flex-column">
                    <label class="text-end fs-3">Laporan Absensi Kelas C</label> 
                    <div class="mt-2 d-flex flex-column flex-md-row col-12 gap-1 justify-content-start">
                        <label class="text-start">Jumlah Siswa : {{ count($data) }}</label>
                        <label class="text-start">Siswa Hadir : {{ count($data) }}</label>
                        <label class="text-start">Siswa Izin : {{ count($data) }}</label>
                        <label class="text-start">Siswa Alpha : {{ count($data) }}</label>
                    </div>
                </div>
                <div class="col-12 d-flex flex-column flex-md-row mt-5">
                    <div class="col-12 col-md-8">
                        <h3 class="text-center">Line Chart</h3>
                        <canvas id="lineChart"></canvas>
                    </div>
                    <div class="col-12 col-md-4">
                        <h3 class="text-center">Pie Chart</h3>
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
  
      <script>
          const data = @json($data);
  
          const ctxLine = document.querySelectorAll('#lineChart').getContext('2d');
          const lineChart = new Chart(ctxLine, {
              type: 'line',
              data: {
                  labels: ['Data 1', 'Data 2', 'Data 3', 'Data 4', 'Data 5'],
                  datasets: [{
                      label: 'Jumlah Data',
                      data: data,
                      borderColor: 'rgba(75, 192, 192, 1)',
                      fill: false,
                  }]
              },
              options: {
                  responsive: true,
              }
          });
  
          // Pie Chart
          const ctxPie = document.querySelectorAll('#pieChart').getContext('2d');
          const pieChart = new Chart(ctxPie, {
              type: 'pie',
              data: {
                  labels: ['Data 1', 'Data 2', 'Data 3', 'Data 4', 'Data 5'],
                  datasets: [{
                      label: 'Jumlah Data',
                      data: data,
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(255, 206, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(153, 102, 255, 0.2)'
                      ],
                      borderColor: [
                          'rgba(255, 99, 132, 1)',
                          'rgba(54, 162, 235, 1)',
                          'rgba(255, 206, 86, 1)',
                          'rgba(75, 192, 192, 1)',
                          'rgba(153, 102, 255, 1)'
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <x-header></x-header>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://www.hidros.com.tr/wp-content/uploads/2023/01/slider-dump-trailer.png" class="d-block w-100" alt="First slide">
          </div>
          <div class="carousel-item">
            <img src="https://www.hidros.com.tr/wp-content/uploads/2023/01/slider-dump-trailer.png" class="d-block w-100" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img src="https://www.hidros.com.tr/wp-content/uploads/2023/01/slider-dump-trailer.png" class="d-block w-100" alt="Third slide">
          </div>
        </div>
    </div>
    <div class="mt-2 mt-md-5 d-md-block d-none">
        <div class="w-100 d-flex justify-content-center gap-sm-3 gap-1 flex-column flex-sm-row">
            <div class="shadow border-primary border py-1 py-md-3 d-flex align-items-center justify-content-center col-1 col-sm-1 col-md-2 px-5" style="cursor: pointer;">
                <label for="" class="fs-6 fs-sm-5 fs-md-4 fs-lg-3 me-2" style="cursor: pointer;">Siswa</label> <i class="fa-solid fa-user"></i>
            </div>
            <div class="shadow border-primary border py-1 py-md-3 d-flex align-items-center justify-content-center col-1 col-sm-1 col-md-2 px-5" style="cursor: pointer;">
                <label for="" class="fs-6 fs-sm-5 fs-md-4 fs-lg-3 me-2" style="cursor: pointer;">Kelas</label> <i class="fa-solid fa-chalkboard"></i>
            </div>
            <div class="shadow border-primary border py-1 py-md-3 d-flex align-items-center justify-content-center col-1 col-sm-1 col-md-2 px-5" style="cursor: pointer;">
                <label for="" class="fs-6 fs-sm-5 fs-md-4 fs-lg-3 me-2" style="cursor: pointer;">Absensi</label> <i class="fa-solid fa-book"></i>
            </div>
            <div class="shadow border-primary border py-1 py-md-3 d-flex align-items-center justify-content-center col-1 col-sm-1 col-md-2 px-5" style="cursor: pointer;">
                <label for="" class="fs-6 fs-sm-5 fs-md-4 fs-lg-3 me-2" style="cursor: pointer;">Laporan</label> <i class="fa-solid fa-chart-simple"></i>
            </div>
        </div>
    </div>
    <div>
        <div class="col-12 d-flex justify-content-around mt-5 d-md-none">
            <div class="col-4 text-light d-flex flex-column align-items-center justify-content-center rounded shadow" style="height: 120px; background: #6f42c1">
                <i class="fa-solid fa-user"></i>
                <label for="">Siswa</label>
            </div>
            <div class="col-4 text-light d-flex flex-column align-items-center justify-content-center rounded shadow" style="height: 120px; background: #6f42c1">
                <i class="fa-solid fa-chalkboard"></i>
                <label for="">Kelas</label>
            </div>    
        </div>
        
        <div class="col-12 d-flex justify-content-around mt-5 d-md-none">
            <div class="col-4 text-light d-flex flex-column align-items-center justify-content-center rounded shadow" style="height: 120px; background: #6f42c1">
                <i class="fa-solid fa-book"></i>
                <label for="">Absensi</label>
            </div>
            <div class="col-4 text-light d-flex flex-column align-items-center justify-content-center rounded shadow" style="height: 120px; background: #6f42c1">
                <i class="fa-solid fa-chart-simple"></i>
                <label for="">Laporan</label>
            </div>    
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>      
</body>
</html>
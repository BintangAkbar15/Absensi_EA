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
<body style="background: #e1a140;">
    <x-header></x-header>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
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
    <div class="mt-2 mt-md-5 d-md-block d-none">
        <div class="w-100 d-flex justify-content-center gap-sm-3 gap-1 flex-column flex-sm-row">
            <div class="shadow light text-light border rounded py-1 py-md-3 d-flex align-items-center justify-content-center col-1 col-sm-1 col-md-2 px-5" style="cursor: pointer; background: #532200;">
                <label for="" class="fs-6 fs-sm-5 fs-md-4 fs-lg-3 me-2" style="cursor: pointer;">Siswa</label> <i class="fa-solid fa-user"></i>
            </div>
            <div class="shadow light text-light border rounded py-1 py-md-3 d-flex align-items-center justify-content-center col-1 col-sm-1 col-md-2 px-5" style="cursor: pointer; background: #532200;">
                <label for="" class="fs-6 fs-sm-5 fs-md-4 fs-lg-3 me-2" style="cursor: pointer;">Kelas</label> <i class="fa-solid fa-chalkboard"></i>
            </div>
            <div class="shadow light text-light border rounded py-1 py-md-3 d-flex align-items-center justify-content-center col-1 col-sm-1 col-md-2 px-5" style="cursor: pointer; background: #532200;">
                <label for="" class="fs-6 fs-sm-5 fs-md-4 fs-lg-3 me-2" style="cursor: pointer;">Absensi</label> <i class="fa-solid fa-book"></i>
            </div>
            <div class="shadow light text-light border rounded py-1 py-md-3 d-flex align-items-center justify-content-center col-1 col-sm-1 col-md-2 px-5" style="cursor: pointer; background: #532200;">
                <label for="" class="fs-6 fs-sm-5 fs-md-4 fs-lg-3 me-2" style="cursor: pointer;">Laporan</label> <i class="fa-solid fa-chart-simple"></i>
            </div>
        </div>
    </div>
    <div>
        <div class="col-12 d-flex justify-content-evenly mt-5 d-md-none">
            <div class="col-4 text-light d-flex flex-column align-items-center justify-content-center rounded shadow" style="height: 120px; background: #532200">
                <i class="fa-solid fs-1 fa-user"></i>
                <label class="fs-5" for="">Siswa</label>
            </div>
            <div class="col-4 text-light d-flex flex-column align-items-center justify-content-center rounded shadow" style="height: 120px; background: #efcfa0">
                <i class="fa-solid fs-1 fa-chalkboard"></i>
                <label class="fs-5" for="">Kelas</label>
            </div>    
        </div>
        
        <div class="col-12 d-flex justify-content-evenly mt-5 d-md-none">
            <div class="col-4 text-light d-flex flex-column align-items-center justify-content-center rounded shadow" style="height: 120px; background: #efcfa0">
                <i class="fa-solid fs-1 fa-book"></i>
                <label class="fs-5" for="">Absensi</label>
            </div>
            <div class="col-4 text-light d-flex flex-column align-items-center justify-content-center rounded shadow" style="height: 120px; background: #532200">
                <i class="fa-solid fs-1 fa-chart-simple"></i>
                <label class="fs-5" for="">Laporan</label>
            </div>    
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>      
</body>
</html>
<x-layout>
    
    <div class="w-100 d-flex justify-content-center">
        <label for="" class="h2 fw-bold my-3 mt-md-4">Pilih Kelas</label>
    </div>
    <div class="col-12 d-flex justify-content-center">
        <div class="col-11">
            <div class="d-flex align-items-center">
                <div>
                    <button class="btn text-light" style="background: #B68D40">
                        <i class="fa-solid fa-arrow-down-wide-short"></i>
                        <label for="">Sort By</label>
                    </button>
                </div>
            </div>
            <div class="col-6 col-md-3 mt-3 ms-auto ms-md-0">
                <form action="{{ route('kelas.tampil') }}" method="GET" class="input-group ">
                    @csrf
                    <input type="text" placeholder="Search Class" name="search" class="rounded-start-3 ps-3 col-8">
                    <button class="btn rounded-none d-flex align-items-center gap-2 justify-content-center text-light col-4" style="background: #B68D40">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <label for="" class="d-none d-md-block">Search</label>
                    </button>
                </form>
            </div>
        </div>
    </div>
        <div class="position-fixed text-light col-3 bg-dark px-5 py-3 z-3 d-none d-xl-block" style="min-height: 20vh; top: 0; right: 0; margin-top:60px;">
            <label for="" class="h3">List Kelas Yang Di Ajar</label>
            <lu>
                <li>aku</li>
                <li>halo</li>
                <li>saya</li>
                <li>mwehehe</li>
                <li>oa</li>
            </lu>
        </div>
        <button class="position-fixed text-light bg-dark p-3 z-3 d-xl-none d-flex me-3 rounded-circle" style="bottom: 0; right: 0; margin-bottom:30px;" data-bs-toggle="offcanvas" data-bs-target="#cek_list" aria-controls="offcanvasExample">
            <i class="fa-solid fa-plus"></i>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="cek_list" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <label for="" class="h3">List Kelas Yang Di Ajar</label>
            <lu>
                <li>aku</li>
                <li>halo</li>
                <li>saya</li>
                <li>mwehehe</li>
                <li>oa</li>
            </lu>
        </div>  
    </div>
    <div class="col-12 d-flex flex-wrap justify-content-center">
        {{-- {{ dd($data) }} --}}
        <div class="d-flex flex-wrap flex-column flex-xl-row gap-3 gap-xl-5 col-12 mt-5 align-items-center justify-content-center">
            <div class="col-11 justify-content-start justify-content-xl-center ps-5 ps-xl-0 h1 align-items-center col-xl-2 shadow text-xl-center text-right py-xl-5 rounded bg-warning d-flex flex-xl-column align-items-center position-relative" style="height: fit-content">
                <input type="checkbox" style="position: absolute; top: 10px; left: 10px;">
                <i class="fa-solid col-2 col-xl-12 fa-user mb-xl-3 py-3" style="font-size: 2em"></i>
                <div class="col-10 d-flex justify-content-end justify-content-xl-center text-center flex-md-column">
                    <label for="" class="h5 text-end pe-4 pe-xl-0 text-xl-center col-xl-12">kelas A</label>
                    <label for="" class="h5 text-end pe-4 pe-xl-0 text-xl-center col-xl-12">Bangku Tersisa : 1</label>
                </div>
            </div>                
        </div>
    </div>
</x-layout>
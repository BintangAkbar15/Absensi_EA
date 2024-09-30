<x-layout>  
    <div>
        <div class="col-11 d-flex fw-bold py-5 justify-content-between px-md-5 px-3 align-items-center h3">
            <a href="{{ route('dashboard.tampil') }}" class="text-dark">
                <i class="fa-solid fa-arrow-left" style=""></i>
            </a>
            <label for="" class="justify-self-center ps-md-5 ms-md-5">Teacher Form</label>
            <span></span>
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
        <div class="position-fixed text-light col-3 bg-dark px-5 pb-3 z-3 d-none d-xl-block overflow-x-scroll" style="min-height: 20vh; max-height: 30vh; top: 0; right: 0; margin-top:60px;">
            <label class="h3 mb-2 mb-md-3 col-12 py-3 position-sticky top-0 bg-dark">List Kelas Yang Di Ajar</label>
            <ul>
                @foreach ($data as $item)
                    @foreach ($item->pengajars as $newdata)
                        <li class="d-flex mb-2 align-items-center w-100 justify-content-between">
                            <label>{{ $newdata->name }}</label>
                            <form action="{{ route('pengajar.delete', $id[$loop->iteration-1]->id) }}" method="post">
                                @csrf
                                <button type="button" class="btn text-light ms-md-3 bg-danger d-md-flex align-items-center justify-content-center gap-3" data-bs-toggle="modal"  data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-trash"></i>
                                    <label class="d-none d-md-block">Delete</label>
                                </button>
                                <x-modal></x-modal>
                            </form>
                        </li>
                    @endforeach
                @endforeach
            </ul>
        </div>
            <button class="position-fixed text-light bg-dark p-3 z-3 d-xl-none d-flex me-3 rounded-circle" style="bottom: 0; right: 0; margin-bottom:30px;" data-bs-toggle="offcanvas" data-bs-target="#cek_list" aria-controls="offcanvasExample">
                <i class="fa-regular fa-clipboard"></i>
            </button>
    
            <div class="offcanvas offcanvas-end" tabindex="-1" id="cek_list" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <label for="" class="h3 mb-2 mb-md-3 position-sticky top-0">List Kelas Yang Di Ajar</label>
                <lu>
                    @foreach ($data as $item)
                        @foreach ($item->pengajars as $newdata)
                        <li class="d-flex mb-2 align-items-center w-100 justify-content-between">
                            <label for="">{{ $newdata->name }}</label>
                            <button class="btn-danger btn">Hapus</button>
                        </li>
                            
                        @endforeach
                    @endforeach
                </lu>
            </div>  
        </div>
    </div>
        <form action="{{ route('pengajar.add') }}" method="post">
            @csrf
            <input type="hidden" name="nip" value="{{ Auth::user()->nip }}">
            <div class="w-100 mt-5 d-md-none d-flex justify-content-start pb-3 ps-3">
                <button class="add_all btn btn-primary" id="submitClass" style="display: none;">Tambah siswa ke kelas</button>
            </div>
            <div class="w-100 mt-5 d-sm-flex d-none justify-content-start pb-3 ps-3">
                <button class="add_all btn btn-primary" id="submitClass  " style="display: none;">Tambah siswa ke kelas</button>
            </div>
            <div class="col-12 d-flex flex-wrap z-1 justify-content-center gap-md-5 p-md-5 overflow-y-scroll" id="boxcheck" style="min-height: 60vh; max-height: 60vh; ">
                @forelse ($kelas as $item)
                <!-- Div 1 -->
                <div class="boxcheck col-11 justify-content-start justify-content-xl-center ps-5 ps-xl-0 h1 align-items-center col-xl-2 shadow text-xl-center text-right py-xl-5 rounded bg-warning d-flex flex-xl-column align-items-center position-relative" style="height: fit-content">
                    <input type="checkbox" class="check" name="kelas[]" value="{{ $item->id }}" style="position: absolute; top: 10px; left: 10px;">
                    <i class="fa-solid col-2 col-xl-12 fa-user mb-xl-3 py-3" style="font-size: 2em"></i>
                    <div class="col-10 d-flex justify-content-end justify-content-xl-center text-center flex-md-column">
                        <label class="h5 text-end pe-4 pe-xl-0 text-xl-center col-xl-12">{{ $item->name }}</label>
                    </div>
                </div>
                @empty
                <div class="col-11 justify-content-start justify-content-xl-center ps-5 ps-xl-0 h1 align-items-center col-xl-2 shadow text-xl-center text-right py-xl-5 rounded bg-warning d-flex flex-xl-column align-items-center position-relative">
                    <h5>No Data Found</h5>
                </div>
                @endforelse
            </div>
        </form>
    
    <script src="{{ url('js/selectclass.js') }}"></script>
</x-layout>
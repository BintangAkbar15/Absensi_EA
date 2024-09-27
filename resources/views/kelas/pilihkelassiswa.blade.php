<x-layout>
    <div style="background: #F4EBD0; min-height: 91.8vh;">
        <div class="w-100 d-flex justify-content-center">
            <label for="" class="h2 fw-bold mt-5">Pilih Kelas</label>
        </div>
        {{-- {{ dd($data) }} --}}
        <div class="d-flex flex-wrap flex-column flex-xl-row gap-3 gap-xl-5 col-12 mt-5 align-items-center justify-content-center">
          
                <a href="{{ route('kelas.siswa') }}" class="text-decoration-none col-11 justify-content-start ps-4 ps-xl-0 h1 align-items-center col-xl-2 shadow text-xl-center text-right py-xl-5 rounded bg-warning d-flex flex-xl-column justify-xl-content-center align-items-center" style="height: fit-content">
                    <i class="fa-solid col-2 col-xl-12 fa-chalkboard mb-xl-3 py-3" ></i>
                    <label for="" class="h5 col-10 text-end pe-4 pe-xl-0 text-xl-center col-xl-12">kelas A</label>
                </a>
        </div>
    </div>
</x-layout>
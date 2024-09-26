<x-layout>
    <div class="d-flex mt-3 mt-md-5 w-100 justify-content-center">
        <label for="" class="h3">Tambah Siswa Ke Kelas</label>
    </div>
    <div class="w-100 ps-3 ps-md-5 d-flex align-items-center">
        <div>
            <button class="btn text-light" style="background: #B68D40">
                <i class="fa-solid fa-arrow-down-wide-short"></i>
                <label for="">Sort By</label>
            </button>
        </div>
    </div>
    <div class="col-6 col-md-3 mt-3 ms-auto me-4 me-md-5">
        <form action="" class="input-group ">
            <input type="text" placeholder="Search Student" class="rounded-start-3 ps-3 col-8">
            <button class="btn rounded-none d-flex align-items-center gap-2 justify-content-center text-light col-4" style="background: #B68D40">
                <i class="fa-solid fa-magnifying-glass"></i>
                <label for="" class="d-none d-md-block">Search</label>
            </button>
        </form>
    </div>
    <div class="container-fluid mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-11">
                <table class="table text-center table-striped table-hover border border-1 shadow">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nis</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>345678987654356</td>
                            <td>siapa aja</td>
                            <td>
                                <input type="checkbox" class="form-check-input" id="lock_student">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>345678987654356</td>
                            <td>siapa aja</td>
                            <td>
                                <input type="checkbox" class="form-check-input" id="lock_student">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>345678987654356</td>
                            <td>siapa aja</td>
                            <td>
                                <input type="checkbox" class="form-check-input" id="lock_student">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div style="transform: translateY(30vh)" class="w-100 d-md-none position-fixed d-flex justify-content-center ">
        <button class="add_all btn btn-primary" style="display: none">Tambah siswa ke kelas</button>
    </div>
    <div style="transform: translateY(25vh)" class="w-100 d-md-flex d-none position-fixed justify-content-center ">
        <button class="add_all btn btn-primary" style="display: none">Tambah siswa ke kelas</button>
    </div>    
    <script src="{{ url('js\button.js') }}"></script>
</x-layout>
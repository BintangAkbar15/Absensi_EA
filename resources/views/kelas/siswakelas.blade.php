<x-layout>
        @if (session('success'))
            <div class="alert alert-success position-fixed">
                <h6>{{ session('success') }}</h6>
            </div>
            <script>
              const alert = document.querySelector('.alert');
              setTimeout(() => {
                alert.style.display = 'none';
              }, 3000);
            </script>
        @endif
        <div class="col-11 d-flex fw-bold mb-5 justify-content-between px-md-5 px-3 align-items-center mt-4 h3">
            <a href="{{ route('siswa.kelas.pilih') }}" class="text-dark">
                <i class="fa-solid fa-arrow-left" style=""></i>
            </a>
            <label for="" class="justify-self-center ps-md-5 ms-md-5">Add Student To The Class</label>
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
            <div class="col-6 col-md-3 mt-3 ms-auto">
                <form action="" class="input-group ">
                    <input type="text" placeholder="Search Student" class="rounded-start-3 ps-3 col-8">
                    <button class="btn rounded-none d-flex align-items-center gap-2 justify-content-center text-light col-4" style="background: #B68D40">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <label for="" class="d-none d-md-block">Search</label>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="mt-4 d-flex justify-content-center">
        <div class="col-11">
            <form id="studentForm" action="{{ route('siswa.kelas.add') }}" method="POST">
                @csrf
                <div class="overflow-y-scroll" style="max-height: 50vh">
                    <table class="table text-center table-striped table-hover border border-1 shadow">
                        <thead class="top-0 position-sticky">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nis</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($siswa as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->nis }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <input type="hidden" name="jumlah_siswa" value="1">
                                    <input type="hidden" name="id_kelas" value="{{ $id }}">
                                    <input type="checkbox" name="students[]" value="{{ $item->nis }}" class="form-check-input">
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="h5">No Data Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="w-100 mt-5 d-md-none d-flex justify-content-center ">
                    <button class="add_all btn btn-primary" id="submitStudents" style="display: none">Tambah siswa ke kelas</button>
                </div>
                <div class="w-100 mt-5 d-sm-flex d-none justify-content-center ">
                    <button class="add_all btn btn-primary" id="submitStudents" style="display: none">Tambah siswa ke kelas</button>
                </div>
            </form>
        </div>
    </div>
    
    <script src="{{ url('js/button.js') }}"></script>
    <script>
        // Ambil semua row yang ada di dalam tabel
        document.querySelectorAll('tr').forEach(function(row) {
            // Tambahkan event listener untuk setiap row
            row.addEventListener('click', function() {
                // Cari checkbox yang ada di dalam row tersebut
                const checkbox = row.querySelector('input[type="checkbox"]');
                
                // Jika checkbox ditemukan, ubah status checked
                if (checkbox) {
                    checkbox.checked = !checkbox.checked; 
                    let checkboxes = document.querySelectorAll('input[type=checkbox]');
                    let addallButtons = document.querySelectorAll('.add_all'); 

                    checkboxes.forEach(function(checkbox) {
                        let isAnyChecked = Array.from(checkboxes).some(cb => cb.checked);

                            
                        addallButtons.forEach(function(button) {
                            if (isAnyChecked) {
                                button.style.display = 'block'; 
                            } else {
                                button.style.display = 'none'; 
                            }
                        });
                    });
                }

            });
        });
    </script>
</x-layout>

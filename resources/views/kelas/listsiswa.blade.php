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
        <a href="{{ route('kelas.pilihkelas') }}" class="text-dark">
            <i class="fa-solid fa-arrow-left" style=""></i>
        </a>
        <label for="" class="justify-self-center ps-md-5 ms-md-5">{{ $nama }}</label>
        <span></span>
    </div>
    <div class="col-12 d-flex justify-content-center">
        <div class="col-11">
            <div class="col-6 col-md-3 mt-3 ms-auto">
                <form action="" method="GET" class="input-group ">
                    <input type="text" placeholder="Search Student" name="search" class="rounded-start-3 ps-3 col-8">
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
                <table class="table text-center table-striped table-hover border border-1 shadow overflow-x-scroll" style="max-height: 73vh">
                    <thead>
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
                            <td class=" d-flex justify-content-center">
                                <form action="{{ route('kelas.editsiswa',$item->nis) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id_kelas" value="{{ $id }}">
                                    <button type="button" class="btn text-light ms-md-3 bg-danger d-md-flex align-items-center justify-content-center gap-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-trash"></i>
                                        <label for="" class="d-none d-md-block">Delete</label>
                                    </button>
                                    <x-modal></x-modal>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="h5">
                                
                                <h5>No Data Found</h5>
                                <a href="{{ route('siswa.kelas.pilih') }}" class="btn btn-secondary">Tambahkan Siswa ke kelas ini</a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      <li class="page-item"><a class="page-link bg-danger text-light" href="#">Back</a></li>
                    </ul>
                </nav>
            </div>
    </div>
</x-layout>
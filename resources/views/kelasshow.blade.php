<x-layout>
    <div class="w-100 ms-3 mt-4 d-flex align-items-center">
        <div>
            <button class="btn text-light" style="background: #B68D40">
                <i class="fa-solid fa-arrow-down-wide-short"></i>
                <label for="">Sort By</label>
            </button>
            <a href="{{ route('kelas.create') }}" class="btn text-light ms-3 bg-success">
                <i class="fa-solid fa-plus"></i>
                <label for="">Add</label>
            </a>
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
                            <th scope="col">Kelas</th>
                            <th scope="col">Jumlah Siswa</th>
                            <th scope="col">Jumlah Bangku</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->jumlah_siswa }}</td>
                            <td>{{ $item->bangku_tersisa }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="/edit" class="btn text-light bg-warning d-md-flex align-items-center justify-content-center gap-3">
                                    <i class="fa-solid fa-pencil"></i>
                                    <label for="" class="d-none d-md-block">Edit</label>
                                </a>
                                <form action="{{ route('kelas.delete', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn text-light ms-md-3 bg-danger d-md-flex align-items-center justify-content-center gap-3">
                                        <i class="fa-solid fa-trash"></i>
                                        <label for="" class="d-none d-md-block">Delete</label>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="h4">Data Not Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
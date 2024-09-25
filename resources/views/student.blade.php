<x-layout>
    <div class="w-100 px-5 mt-4 d-flex align-items-center justify-content-between">
        <div>
            <button class="btn text-light ms-3" style="background: #B68D40">
                <i class="fa-solid fa-arrow-down-wide-short"></i>
                <label for="">Sort By</label>
            </button>
            <button class="btn text-light ms-3 bg-success">
                <i class="fa-solid fa-plus"></i>
                <label for="">Add</label>
            </button>
        </div>
    </div>
    <form action="" class="input-group w-25 d-flex ms-auto me-5 justify-content-end">
        <input type="text" placeholder="Search Student" class="rounded-start-3 ps-3">
        <button class="btn me-4 rounded-none text-light" style="background: #B68D40">
            <i class="fa-solid fa-magnifying-glass"></i>
            <label for="">Search</label>
        </button>
    </form>
    <div class="container-fluid mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-11">

                <table class="table text-center table-striped table-hover border border-1 shadow">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nis</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <button class="btn text-light bg-warning">
                                    <i class="fa-solid fa-pencil"></i>
                                    <label for="">Edit</label>
                                </button>
                                <button class="btn text-light ms-3 bg-danger">
                                    <i class="fa-solid fa-trash"></i>
                                    <label for="">Delete</label>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
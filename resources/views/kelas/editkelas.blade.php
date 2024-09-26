<x-layout>
    <div class="col-12 d-flex align-items-center justify-content-center" style="min-height: 91.8vh">
        <form action="{{ route('kelas.update', $id) }}" method="post" class="border border-1 p-5 rounded shadow">
            @csrf
            @method('put')
            <label for="" class="h2">Form Edit Kelas</label>
            <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                    <label for="nama" class="form-label">Nama Kelas<span class="text-danger">*</span></label>
                    <input type="nama" class="form-control" name="nama" id="nama" value="" required>
                </div>
                <div class="col-12">
                    <label for="bangku_tersisa" class="form-label">Jumlah Bangku<span class="text-danger">*</span></label>
                    <input type="text" class="form-control " name="bangku_tersisa" id="bangku_tersisa" maxlength="2" required>
                  </div>
                <div class="col-12">
                    <div class="d-grid">
                        <button class="btn bsb-btn-xl fw-bold text-light" style="background: #532200;" type="submit">Change</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layout>
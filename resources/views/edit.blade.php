<x-layout>
    <div class="w-100 d-flex align-items-center justify-content-center mt-5">
        <section class="p-3 p-md-4 p-xl-5 col-5 shadow border border-1 rounded border-dark">
            <label for="" class="h3">Edit Form</label>
            <div class="container">
            <div class="row">
                <div class="col-12 bsb-tpl-bg-lotion">
                    <form action="{{ route('siswa.add') }}" method="POST">
                        @csrf
                        <div class="row gy-3 gy-md-4 overflow-hidden">
                            <div class="col-12">
                                <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                                <input type="nama" class="form-control" name="nama" id="nama" value="" required>
                            </div>
                            <div class="col-12">
                                <label for="nama" class="form-label">Kelas <span class="text-danger">*</span></label>
                                <select name="" id="Kelas" class="form-control">
                                    <option value="kelas-a">Kelas A</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn bsb-btn-xl fw-bold text-light" style="background: #532200;" type="submit">Change</button>
                                </div>
                                
                                @if (session('error'))
                                <p class="text-danger">{{ session('error') }}</p>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </section>
      @if ($errors->any())
  
      @endif
  </x-layout>
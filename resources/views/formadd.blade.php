<x-layout>
  <div class="w-100 d-flex align-items-center justify-content-center mt-5">
      <section class="p-3 p-md-4 p-xl-5 col-9 shadow border border-1 rounded border-dark">
          <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 bsb-tpl-bg-platinum">
            <div class="d-flex flex-column justify-content-start h-100 p-3 p-xl-5">
              <img class="img-fluid d-md-block d-none rounded mx-auto my-auto" loading="lazy" src="{{ url('img/logo.png') }}" width="400" alt="BootstrapBrain Logo">
              <img class="img-fluid d-md-none rounded mx-auto my-auto" style="filter: invert(1)" loading="lazy" src="{{ url('img/title.png') }}" width="400" alt="BootstrapBrain Logo">
            </div>
          </div>
          <div class="col-12 col-md-6 bsb-tpl-bg-lotion">
            <div class="p-3 p-md-4 p-xl-5">
              <div class="row">
                <div class="col-12">
                  <div class="mb-5">
                    <h3>Add Form</h3>
                  </div>
                </div>
              </div>
              <form action="{{ route('siswa.add') }}" method="POST">
                @csrf
                <div class="row gy-3 gy-md-4 overflow-hidden">
                  <div class="col-12">
                    <label for="Nis" class="form-label">NIS <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="Nis" id="Nis" required>
                  </div>
                  <div class="col-12">
                    <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                    <input type="nama" class="form-control" name="nama" id="nama" value="" required>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn bsb-btn-xl fw-bold text-light" style="background: #532200;" type="submit">Add</button>
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
  </div>
    <div class="w-100 d-flex align-items-center justify-content-center mt-5">
        <section class="p-3 p-md-4 p-xl-5 col-9 shadow border border-1 rounded border-dark">
            <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 bsb-tpl-bg-platinum">
              <div class="d-flex flex-column justify-content-start h-100 p-3 p-xl-5">
                <img class="img-fluid d-md-block d-none rounded mx-auto my-auto" loading="lazy" src="{{ url('img/logo.png') }}" width="400" alt="BootstrapBrain Logo">
                <img class="img-fluid d-md-none rounded mx-auto my-auto" style="filter: invert(1)" loading="lazy" src="{{ url('img/title.png') }}" width="400" alt="BootstrapBrain Logo">
              </div>
            </div>
            <div class="col-12 col-md-6 bsb-tpl-bg-lotion">
              <div class="p-3 p-md-4 p-xl-5">
                <div class="row">
                  <div class="col-12">
                    <div class="mb-5">
                      <h3>Add Form</h3>
                    </div>
                  </div>
                    <form action="{{ route('siswa.add') }}" method="POST">
                  @csrf
                  <div class="row gy-3 gy-md-4 overflow-hidden">
                    <div class="col-12">
                      <label for="nis" class="form-label">NIS <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="nis" id="nis" maxlength="10" placeholder="" required>
                    </div>
                    <div class="col-12">
                      <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                      <input type="nama" class="form-control" name="nama" id="nama" value="" required>
                    </div>
                    <div class="col-12">
                      <div class="d-grid">
                        <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary" data-mdb-modal-init data-mdb-target="#exampleModal">
                            Add
                        </button>
                          
                      </div>
                      
                      <p class="text-danger">{{ session('error') }}</p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    @if ($errors->any())
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">...</div>
            <div class="modal-footer">
            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>
    @endif
</x-layout>
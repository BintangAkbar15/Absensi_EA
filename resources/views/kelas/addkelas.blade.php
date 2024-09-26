<x-layout>
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      <script>
        const alert = document.querySelector('.alert');
        setTimeout(() => {
          alert.style.display = 'none';
        }, 3000);
      </script>
  @endif
    <div class="w-100 d-flex align-items-center justify-content-center mt-3">
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
                      <h3>Add Form Class</h3>
                    </div>
                  </div>
                </div>
                <form action="{{ route('kelas.add') }}" method="POST">
                  @csrf
                  <div class="row gy-3 gy-md-4 overflow-hidden">
                    <div class="col-12">
                      <label for="name" class="form-label">Nama Kelas <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="name" id="name" maxlength="10" required>
                    </div>
                    <div class="col-12">
                      <label for="bangku_tersisa" class="form-label">Bangku Tersedia<span class="text-danger">*</span></label>
                      <input type="text" class="form-control " name="bangku_tersisa" id="bangku_tersisa" maxlength="2" required>
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
      @if ($errors->any())
  
      @endif
  </x-layout>
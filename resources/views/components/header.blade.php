<header class="col-12 w-100 d-flex align-items-center text-light sticky-top" style="height: 60px; background: #914110;">
    <img src="{{ url('img\title.png') }}" width="300" alt="" class="ms-3" style="cursor: pointer;">
    <div class="ms-auto me-2 me-md-5 d-flex justify-content-end">
        @if (Auth::check())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn text-light d-none d-md-block" style="background: #122620 ">Logout</button>
                <button class="fa-solid fa-arrow-right-from-bracket btn text-dark py-2 d-md-none" style="background: #F4EBD0"></button>
            </form>
        @endif
    </div>
</header>
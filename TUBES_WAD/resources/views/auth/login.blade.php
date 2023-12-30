@extends('layouts.laylogin')

@section('content')
<section class="vh-100" style="background-color: #ffffff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card shadow" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block ">
                <img src="\img\fotomepi.jpg"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                    <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="bi bi-boxes fa-2x me-3" style="font-size: 2.5rem;"></i>
                        <span class="h1 fw-bold mb-0">Manajemen Gudang</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" />
                            <label class="form-label" for="email">Email address</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-dark btn-lg btn-block" type="submit">Sign in</button>
                        </div>
                    </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection

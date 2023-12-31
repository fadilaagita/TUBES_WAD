@extends('layouts.laylogin')

@section('content')
<section class="vh-100" style="background-color: #ffffff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card shadow" >
            <div class="row g-0">
              <div class="col-md-6  d-none d-md-block ">
                <img src="\img\fotomepi.jpg"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <div class="card-body p-3  text-black">

                    <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="bi bi-boxes fa-2x me-3" style="font-size: 2.5rem;"></i>
                        <span class="h1 fw-bold mb-0">Manajemen Gudang</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register New Account</h5>
                    <!-- Form -->
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-outline has-validation mb-3">
                            <input type="text" class="form-control" id="name" name="username" placeholder="Name" required>
                            <label for="name" class="form-label">Username</label>
                        </div>
                        <div class="form-outline has-validation mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="form-outline has-validation mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="form-outline has-validation mb-3">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                        </div>
                        <div class="pt-1 mb-4">
                            <button class="btn btn-dark btn-lg btn-block" type="submit">Sign Up</button>
                        </div>
                    </form>
                    <div>
                        <p class="mb-0">Already have an account? <a href="/" class="text-dark fw-bold">Sign In</a></p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection

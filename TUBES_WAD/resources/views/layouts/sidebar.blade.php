<!-- <style>
    .custom-navbar {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 100;
        background-color: #9A616D;
    }
    .custom-navbar .navbar-brand {
        color: #ffffff;
    }
    .custom-navbar .navbar-nav .nav-link {
        color: #ffffff;
    }
</style>

    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="/admin/dashboard">Manajemen-Gudang</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/admin/supplier">Supplier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/kategori">Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/karyawan">Karyawan</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
                </li>
            </ul>
          </div>
        </div>
    </nav> -->

<!-- <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2"><i class="bi bi-boxes"></i></span> <span class="text-white">Inv Manager</span></h1>
            </div>

            <ul class="list px-2">
                <li class=" mb-2"><a href="/admin/dashboard" class="text-decoration-none px-3 py-2 d-block"><span><i class="bi bi-clipboard-data-fill"></i> Barang</a></li></span>
                <li class="mb-2"><a href="/admin/kategori" class="text-decoration-none px-3 py-2 d-block"><span><i class="bi bi-tag"></i> Kategori</a></li></span>
                <li class=" mb-2"><a href="/admin/karyawan" class="text-decoration-none px-3 py-2 d-block"><span><i class="bi bi-file-person"></i></i> Karyawan</a></li></span>
                <li class=" mb-2"><a href="/admin/supplier" class="text-decoration-none px-3 py-2 d-block"><span><i class="bi bi-box2"></i> Kategori</a></li></span>
            </ul>
            <hr class="h-color mx-2">

            <ul class="list-unstyled px-2">
                <li class=""><a href="/logout" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-box-arrow-left"></i>Log out</a></li>

            </ul>

        </div>
        <div class="content">
            <nav class="navbar navbar-expand-md navbar-light ">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                     <button class="btn px-1 py-0 open-btn me-2"><i class="fal fa-stream"></i></button>
                        <a class="navbar-brand fs-4" href="#"><span class="bg-dark rounded px-2 py-0 text-white">CL</span></a>
                       
                    </div>
                    <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-boxes"></i>
                    </button>
                </div>
            </nav>
        </div>
    </div> -->

<div class="main-container d-flex">
  <div class="sidebar" id="side_nav">
    <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
      <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2"><i class="bi bi-boxes"></i></span> <span class="text-white">Inv Manager</span></h1>
      <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="bi bi-list"></i></i></button>
    </div>

    <ul class="list-unstyled px-2">
      <li class=""><a href="/admin/dashboard" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-clipboard-data-fill"></i> Barang</a></li>
      <li class=""><a href="/admin/karyawan" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-file-person"></i></i> Karyawan</a></li>
      <li class=""><a href="/admin/kategori" class="text-decoration-none px-3 py-2 d-block "><i class="bi bi-box2"></i> Kategori</span></a></li>
      <li class=""><a href="/admin/supplier" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-tag"></i> Supplier</a></li>
    </ul>

    <hr class="h-color mx-2">

    <ul class="list-unstyled px-2">
      <li class=""><a href="/logout" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
    </ul>

  </div>
  <div class="content">
    <nav class="navbar navbar-expand-md navbar-black bg-black">
      <div class="container-fluid">
        <div class="d-flex justify-content-between d-md-none d-block">
          <button class="btn px-1 py-0 open-btn me-2 text-white"><i class="bi bi-list"></i></button>
          <a class="navbar-brand fs-4" href="#"><span class="bg-black rounded px-2 py-0 text-white"><i class="bi bi-boxes"></i> Inv Manager</span></a>

        </div>
        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fal fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        </div>
      </div>
    </nav>

    <div class="dashboard-content px-3 pt-4">
      @yield('content')
    </div>
  </div>
</div>
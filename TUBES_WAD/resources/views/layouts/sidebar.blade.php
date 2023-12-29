<style>
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
</nav>

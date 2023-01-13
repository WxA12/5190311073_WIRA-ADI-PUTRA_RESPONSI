<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dokumen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <body>
  <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KOST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pilihan
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href='/anakkost'>Anak Kost</a></li>
              <li><a class="dropdown-item" href='/ibukkost'>Ibu Kost</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href='/kost'>Kost</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
<br><br><br> 
<table class="table table-success table-striped-columns">
  <a href='/kost/create'><button type="button" class="btn btn-outline-success">Tambah</button></a>
  <thead>
    <tr>
      <th scope="col">ID Kost</th>
      <th scope="col">Nama Kamar</th>
      <th scope="col">No Kamar</th>
      <th scope="col">Alamat</th>
      <th scope="col">ID Ibu Kost</th>
      <th scope="col">ID Anak Kost</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php $__currentLoopData = $kost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <td><?php echo e($i -> idkost); ?></td>
      <td><?php echo e($i ->name_kost); ?></td>
      <td><?php echo e($i ->nokamar_kost); ?></td>
      <td><?php echo e($i ->alamat); ?></td>
      <td><?php echo e($i ->id_ibukost); ?></td>
      <td><?php echo e($i ->id_anakkost); ?></td>
      <td>
        <a href='/kost/edit/<?php echo e($i -> idkost); ?>'><button type="button" class="btn btn-warning">Update</button></a>
        <a href='/kost/delete/<?php echo e($i -> idkost); ?>'><button type="button" class="btn btn-danger">Delete</button></a>
    </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
  </body>
</html><?php /**PATH C:\Users\wirao\Desktop\5190311073_wiraadiputra\resources\views//kost/kost.blade.php ENDPATH**/ ?>
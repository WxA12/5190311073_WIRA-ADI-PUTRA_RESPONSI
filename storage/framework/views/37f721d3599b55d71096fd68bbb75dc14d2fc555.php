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
  <?php $__currentLoopData = $kost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <form action='/kost/update' method="post">
  <?php echo e(csrf_field()); ?>

  <div class="form-group">
    <label for="exampleFormControllSelect1">Id Kost</label>
    <input type="text" class="form-control" value="<?php echo e($p->idkost); ?>" name="idkost">
  </div>
  <div class="form-group">
    <label for="exampleFormControllSelect2">Nama Kamar</label>
    <input type="text" class="form-control" name="name_kost" required="required" value="<?php echo e($p->name_kost); ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControllSelect3">No Kamar</label>
    <input type="text" class="form-control" name="nokamar_kost" required="required" value="<?php echo e($p->nokamar_kost); ?>">

  </div>
  <div class="form-group">
    <label for="exampleFormControllSelect4">Alamat</label>
    <input type="text" class="form-control" name="alamat" required="required" value="<?php echo e($p->alamat); ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControllSelect5">Id Ibukost</label>
    <input type="text" class="form-control" name="id_ibukost" required="required" value="<?php echo e($p->id_ibukost); ?>">  
  </div>
  <div class="form-group">
    <label for="exampleFormControllSelect6">Id Anakkost</label>
    <input type="text" class="form-control" name="id_anakkost" required="required" value="<?php echo e($p->id_anakkost); ?>">
  </div>
  <div>
    <input class="btn btn-primary" type="submit" value="Update">
  </div>
  </form>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <a href="/kost"><button type="button" class="btn btn-danger">Kembali</button></a>
  </body>
</html><?php /**PATH C:\Users\wirao\Desktop\5190311073_wiraadiputra\resources\views/kost/edit.blade.php ENDPATH**/ ?>
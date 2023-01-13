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
  <form action='/kost/store' method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleFormControllSelect1">Nama Kamar</label>
    <input type="text" class="form-control" name="name_kost">
  </div>
  <div class="form-group">
    <label for="exampleFormControllSelect2">No Kamar</label>
    <input type="text" class="form-control" name="nokamar_kost">

  </div>
  <div class="form-group">
    <label for="exampleFormControllSelect3">Alamat</label>
    <input type="text" class="form-control" name="alamat">
  </div>
  <div class="form-group">
    <label for="exampleFormControllSelect2">Id Ibukost</label>
    <input type="text" class="form-control" name="id_ibukost">  
  </div>
  <div class="form-group">
    <label for="exampleFormControllSelect2">Id Anakkost</label>
    <input type="text" class="form-control" name="id_anakkost">
  </div>
  <div>
    <input class="btn btn-primary" type="submit" value="Input">
  </div>
  </form>
  <a href="/kost"><button type="button" class="btn btn-danger">Kembali</button></a>
  </body>
</html>
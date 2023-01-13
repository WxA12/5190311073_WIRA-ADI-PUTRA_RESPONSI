<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<body>
<form action="/ibukost/store" method="POST">
{{csrf_field()}}
  <div class="form-group">
    <label for="idibukost">ID Ibukost</label>
    <input type="text" class="form-control" id="idibukost" name="idibukost">
    <label for="name">Nama</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
  </div>
  <div class="form-group">
    <label for="no_telp">No Telp</label>
    <input type="text" class="form-control" id="no_telp" name="no_telp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
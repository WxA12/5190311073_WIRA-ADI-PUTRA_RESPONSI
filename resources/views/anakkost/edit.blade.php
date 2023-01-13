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
  @foreach($anakkost as $p)
  <form action='/anakkost/update' method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleFormControllSelect1">Id Anakkost</label>
    <input type="text" class="form-control" value="{{ $p->idanakkost }}" name="idanakkost">
  </div>
  <div class="form-group">
    <label for="exampleFormControllSelect1">Nama</label>
    <input type="text" class="form-control" required="required" name="nama" value="{{ $p->nama }}">
  </div>
  <div class="form-group">
    <label for="exampleFormControllSelect1">Gender</label>
    <select name="gender" id="gender" required="required" value="{{ $p->gender }}"> Pilih Gender
      <option value="laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControllSelect1">Pekerjaan</label>
    <input type="text" class="form-control" name="pekerjaan" required="required" value="{{ $p->pekerjaan }}">   
  </div>
  <div class="form-group">
    <label for="exampleFormControllSelect2">No Telp</label>
    <input type="text" class="form-control" name="no_telp" required="required" value="{{ $p->no_telp }}">   
  </div>
  <div class="form-group">
    <label for="exampleFormControllSelect3">Alamat</label>
    <input type="text" class="form-control" name="alamat" required="required" value="{{ $p->alamat }}">   
  </div>
  <div>
    <input class="btn btn-primary" type="submit" value="Update">
  </div>
  </form>
  @endforeach
  <a href="/anakkost"><button type="button" class="btn btn-danger">Kembali</button></a>
  </body>
</html>
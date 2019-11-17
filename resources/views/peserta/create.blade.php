@extends('../layout/main')
<!doctype html>
<html lang="en">
  <head>
    @section('title','Tambah Data')
  </head>
  <body>
  @section('container')
  <div class="container">
    <div class="row">
        <div class="col mt-3">
            <h1>Tambah Data Baru</h1>
        </div>
    </div>
    
        <form method="post" action="create">
        @csrf
            <div class="form-group col-4">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="form-group col-4">
                <label for="idKaryawan">ID Karyawan</label>
                <input type="text" name="idKaryawan" class="form-control" id="idKaryawan">
            </div>
            <div class="form-group col-4">
                <label for="departemen">Departemen</label>
                <input type="text" name ="departemen" class="form-control" id="departemen">
            </div>
            <div class="form-group col-4">
                <label for="tanggal">Tanggal Ujian</label>
                <input type="date" name ="tanggal" class="form-control" id="tanggal">
            </div>
            <div class="form-group col-4">
                <label for="nilai">Nilai</label>
                <input type="text" name ="nilai" class="form-control" id="nilai">
            </div>
            <div class="form-group col-4">
                <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>

  </div>
  @endsection
    
    </body>
</html>
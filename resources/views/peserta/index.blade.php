@extends('../layout/main')
<!doctype html>
<html lang="en">
  <head>
    @section('title',' Peserta Psikotest')
  </head>
  <body>
  @section('container')
  <div class="container">
    <div class="row">
        <div class="col mt-3">
            <h1>Data Peserta Psikotest</h1>
        </div>
    </div>

    <div class="row">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Departemen</th>
            <th>Tanggal Test</th>
          </tr>
        </thead>
        <tbody>
        @foreach($peserta as $pst)
          <tr> 
            <td>{{$loop->iteration}}</td>
            <td>{{$pst->nama}}</td>
            <td>{{$pst->departemen}}</td>
            <td>12 Desember 2019</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    
    <div class="row">
      <a href="peserta/create" class="btn btn-primary">Tambah Data</a>
    </div>
  </div>
  @endsection
    
    </body>
</html>
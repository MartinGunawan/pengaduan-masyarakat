<html lang="en">
<head>
 @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-12">

            <h1 class="m-0">Pengaduan</h1>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengaduan</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
            </div>
            <div class="card-body">
                <a href="/pengaduan/create" class="btn btn-primary">Tambah Data</a>
                <br/>
                <br/>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>

                            <th>Id</th>
                            <th>Tanggal_Pengaduan</th>
                            <th>Nik</th>
                            <th>Isi Laporan</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengaduan as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->tgl_pengaduan}}</td>
                            <td>{{ $p->nik }}</td>
                            <td>{{ $p->isi_laporan }}</td>
                            <td>{{ $p->foto }}</td>
                            <td>{{ $p->status }}</td>
                            <td> 
                                <a href="/pengaduan/edit/{{ $p->id_pengaduan }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="/pengaduan/hapus/{{ $p->id_pengaduan }}" class="btn btn-sm btn-primary">Detail</a>
                                <a href="/pengaduan/destroy/{{ $p->id_pengaduan }}" class="btn btn-sm btn-danger">Hapus</a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

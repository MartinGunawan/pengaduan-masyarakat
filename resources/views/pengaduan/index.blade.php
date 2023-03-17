<html lang="en">
<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengaduan Terbaru</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Pengaduan Masyarakat</a>
                </div>
                <div class="card-body">
                    <a href="/pengaduan/create" class="btn btn-primary">Input Data Pengaduan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>   
                                <th>NIK</th>
                                <th>Tanggal Pengaduan</th>
                                <th>Isi Pengaduan</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduan as $p)
                            <tr>
                                <td>{{ $p->id_pengaduan }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->tgl_pengaduan }}</td>
                                <td>{{ $p->isi_laporan }}</td>
                                <td><img src="{{ asset('image/'. $p->foto)}}" height="20%" width="30%" alt="pengaduan"/></td>
                                <td>
                                    <a href="/pengaduan/edit/{{ $p->id_pengaduan }}" class="btn btn-warning">Edit</a>
                                <a href="/pengaduan/destroy/{{ $p->id_pengaduan }}" class="btn btn-danger">Hapus</a>
                                <a href="/pengaduan/show/{{ $p->id_pengaduan }}" class="btn btn-dark">detail</a>

                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
          
        </div>
    </body>
</html>
    {{-- <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Starter Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Pengaduan</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!--/.content-header -->
      <!-- Main content -->
      <div class="content">
          <div class="container-fluid">
              <div class="row">
                  <h1>ini halaman pengaduan</h1>
              </div>
          </div>
      </div> --}}
      <!-- /.content-wrapper -->
  
     <!-- Main Footer -->
      @include('template.footer')
     </footer>
    </div>
            
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->
  
  
  <!-- REQUIRED SCRIPTS -->
  
    @include('template.script')
    @include('sweetalert::alert')
  </body>
  </html>
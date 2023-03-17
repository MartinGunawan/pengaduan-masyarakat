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
        <title>Tanggapan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Tanggapan</a>
                </div>
                <div class="card-body">
                    <a href="/tanggapan/create" class="btn btn-primary">Input Data Tanggapan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Tanggapan</th>
                                <th>Tanggapan</th>
                                <th>Nik</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tanggapan as $i=> $p)
                            <tr>
                            <th>{{ $i+1 }}</th>
                                <td>{{ $p->tgl_tanggapan }}</td>
                                <td>{{ $p->tanggapan }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>
                                    @if($p->status = "0")
                                <a href='#' class="badge badge-danger">Pending</a>
                                @elseif($p->status = "proses")
                                <a href="#" class="badge badge-warning text-white">Proses</a>
                                @else
                                <a href="#" class="badge badge-success">Selesai</a>
                                @endif
                                    </td>
                                <td>
                                    <a href="/tanggapan/edit/{{ $p->id_tanggapan }}" class="btn btn-warning">Edit</a>
                                    <a href="/tanggapan/destroy/{{ $p->id_tanggapan }}" class="btn btn-danger">Hapus</a>
                                    <a href="/tanggapan/detail/{{ $p->id_tanggapan }}" class="btn btn-dark">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @include('sweetalert::alert')
                
            </div>
        </div>
    </body>
</html>
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
 </body>
 </html>
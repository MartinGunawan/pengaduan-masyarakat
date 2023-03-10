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
                    CRUD Data tanggapan - <strong>TAMBAH DATA</strong><a href="https://www.malasngoding.com/category/laravel" target="_blank"></a>
                </div>
                <div class="card-body">
                    
                    <form method="post" action="/tanggapan/store">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>id tanggapan</label>
                            <input type="text" name="id_tanggapan" class="form-control" placeholder="id_tanggapan">
 
                             @if($errors->has('id_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_tanggapan')}}
                                </div>
                            @endif
 
                        </div>

 
                        <div class="form-group">
                            <label>tanggal tanggapan</label>
                            <input type="date" name="tgl_pengaduan" class="form-control" placeholder="tgl_pengaduan">
 
                             @if($errors->has('tgl_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_pengaduan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Nik</label>
                            <textarea name="nik" class="form-control" placeholder="nik tanggapan .."></textarea>
 
                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/tanggapan" class="btn btn-primary">Kembali</a>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>
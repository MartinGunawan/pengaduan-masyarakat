<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>EDIT DATA</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    DATA PENGADUAN MASYARAKAT
                </div>
                <div class="card-body">
               
                    <br/>
                    <br/>
                  
                     <form method="post" action="/tanggapan/update/{{ $tanggapan->id_tanggapan }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tgl_tanggapan" class="form-control" placeholder="tgl_tanggapan .." value=" {{ $tanggapan->tgl_tanggapan }}">
 
                            @if($errors->has('tgl_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_tanggapan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>tanggapan</label>
                            <input type="text" name="tanggapan" class="form-control" placeholder="tanggapan .." value=" {{ $tanggapan->tanggapan }}">

                             @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif 
 
                        </div>

                        <div class="form-group">
                            <label>nik</label>
                            <input type="text" name="nik" class="form-control" placeholder="nik .." value=" {{ $tanggapan->nik }}">

                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif 
 
                        </div> 

                       
                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-danger" value="Simpan">
                            <a href="/tanggapan" class="btn btn-sm btn-primary">Kembali</a>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>
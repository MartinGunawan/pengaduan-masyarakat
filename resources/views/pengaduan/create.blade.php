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
                 PENGADUAN - <strong>TAMBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank"></a>
                </div>
                <div class="card-body">

                    <form method="post" action="/pengaduan/store" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>tgl_pengaduan</label>
                            <input type="date" name="tgl_pengaduan" class="from-control" placeholder="tgl pengaduan">

                            @if($errors->has('tgl_pengaduan'))
                                <div class="date-danger">
                                    {{ $errors->first('tgl_pengaduan')}}
                            </div>
                        @endif
                        

                    </div>

                    <div class="form-group">
                        <label>Nik</label>
                        <input type="text" name="nik" class="form-control" placeholder="nik pengaduan .."></textarea>

                        @if($errors->has('nik'))
                            <div class="text-danger">
                                {{ $errors->first('nik')}}
                            </div>
                        @endif
                    </div>

                   <div class="form-group">
                                            <label for="val-username">Keluhan Anda</label>
                                            <div class="col-lg-6">
                                                <textarea name="isi_laporan" class="form-control" id="" cols="30" rows="10"></textarea>
                                                @if($errors->has('isi_laporan'))
                                            <div class="text-danger">
                                                {{ $errors->first('isi_laporan')}}
                                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control" placeholder="foto pengaduan .."></textarea>

                        @if($errors->has('foto'))
                            <div class="text-danger">
                                {{ $errors->first('foto')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                   <p>status</p>
                        <input type="radio" name="status" value="proses"/> Proses</p>
                        <input type="radio" name="status" value="selesai"/> Selesai</p>

                @if($errors->has('status'))
                    <div class="text-danger">
                    {{ $errors->first('status')}}
                </div>
            @endif

            </div>
            
             <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <a href="/pengaduan" class="btn btn-primary">Kembali</a> 
                </div>

                </form>

            </div>
         </div>
     </div>
 </body>
 </html>
    
<!DOCTYPE html>
<html>
<head>
<title>indoregion</title>
</head>
<body>

        <form>
            <div class="form-group">
                <label for="exampleFormCotrolSelect1">Provinsi</label>
                <select class="form-control" id="provinsi">
                    <option>Pilih Provinsi...</option>
                        @foreach ($provinces as $provinsi)
                            <option>{{$provinsi->name}}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormCotrolSelect1">Kabupaten</label>
                <select class="form-control" id="kabupaten">
                    <option>Pilih Kabupaten...</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormCotrolSelect1">Kecamatan</label>
                <select class="form-control" id="kecamatan">
                    <option>Pilih Kecamatan...</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormCotrolSelect1">Desa</label>
                <select class="form-control" id="desa">
                    <option>Pilih Desa...</option>
                </select>
            </div>

</body>
</html>
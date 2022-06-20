<!doctype html>
<html lang="en">
<head>
<title>Edit Mahasiswa!</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
  <body>
    <div class="container-fluid mt-4 rounded">
    <div class="row">
            <div class="col-lg-12 bg-primary py-4"></div>
    </div>
        <div class="row">
            <div class="col-lg-2 vh-100">
            <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Dosen</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mahasiswa</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Skripsi</a>
            </div>
    </div>
    <div class="col-lg-10 vh-100">
        <div class="card mt-4">
            <div class="card-holder"></div>
    <div class="card-body">
    <div class="container-fluid mt-4 rounded">
        @php
            $bidang_minat = explode(',',$mahasiswa -> bidang_minat);
        @endphp
        <form action="/mahasiswa/updatemhs/{{$mahasiswa -> id}}" method="POST" class="pt-2 pb-2">
            @csrf
        <div class="form-group w-10">
            <label>NIM :</label>
                <input type="number" name="nim" class="form-control" value="{{$mahasiswa -> nim}}" readonly>
        </div> 
        <div class="form-group w-65">
            <label>Nama Mahasiswa :</label>
                <input type="text" name="nama" class="form-control" value="{{$mahasiswa -> nama}}" required>
        </div> 
        <label>Gender :</label>
        <div class="form-check w-25">
                <input type="radio" name="gender" value="Perempuan" {{ $mahasiswa -> gender = 'Perempuan' ? 'checked':''}}
                class="form-check-input">
            <label>Perempuan</label>
        </div> 
        <div class="form-check w-25">
                <input type="radio" name="gender" value="Laki-laki" {{ $mahasiswa -> gender = 'Laki-laki' ? 'checked':''}} 
                class="form-check-input">
            <label>Laki-Laki</label>
        </div> 
        <div class="form-check w-25">
            <label>Jurusan :</label>
                <select name="jurusan" class="form-control">
                    <option value="Sistem Informasi" {{$mahasiswa->jurusan = 'Sistem Informasi'?'selected':''}}>Sistem Informasi</option>
                    <option value="Manajemen" {{$mahasiswa->jurusan = 'Manajemen'?'selected':''}}> Manajemen</option>
                    <option value="Kedokteran" {{$mahasiswa->jurusan = 'Kedokteran'?'selected':''}}> Kedokteran</option>
                    <option value="Akutansi" {{$mahasiswa->jurusan = 'Akutansi'?'selected':''}}> Akutansi</option>
                </select>
        </div>
        <label>Bidang minat :</label>
            <div class="form-check w-25">
                <input type="checkbox" name="bidang_minat" value="Kewirausahaan" {{ in_array('Kewirausahaan', $bidang_minat) ? 'checked':'' }} class="form-check-input">   
                <label>Kewirausahaan</label>   
            </div> 
            <div class="form-check w-25">
                <input type="checkbox" name="bidang_minat" value="Pemrograman Mobile" {{ in_array( 'Pemrograman Mobile', $bidang_minat) ? 'checked':'' }} class="form-check-input">   
                <label>Pemrograman Mobile</label>   
            </div> 
            <div class="form-check w-25">
                <input type="checkbox" name="bidang_minat" value="Pemrograman Front End" {{ in_array( 'Pemrograman Front End', $bidang_minat) ? 'checked':'' }} class="form-check-input">   
                <label>Pemrograman Front End</label>   
            </div> 
            <div class="form-check w-25">
                <input type="checkbox" name="bidang_minat" value="Manajemen Informasi" {{ in_array( 'Manajemen Informasi', $bidang_minat) ? 'checked':'' }} class="form-check-input">   
                <label>Manajemen Informasi</label>   
            </div> 
        <div class="form-group w-25 mt-4">
            <input type="submit" value="SAVE" class="btn btn-outline-primary">
        </form></div>
        </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="row bg-success">
    <div class="col-5">
      <img src="img/logo-uinsu.png" alt="LOGO UINSU" width="100">
    </div>
    <div class="col-6">
      <nav class="navbar navbar-expand-lg bg-transparent-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-transparent" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1>Universitas Islam Negeri Sumatera Utara</h1>
        <h4>Fakultas Sains dan Teknologi</h4>
      </div>
    <div class="row">
      <div class="col-sm-6">
        <h4>Tabel Mahasiswa</h4>
        <table class="table table-danger table-sm table-hover table-striped table-bordered text-center">
          <thead>
            <tr>
              <th>NPM</th>
              <th>Nama Mahasiswa</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal Lahir</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>
            <?php $nilai_awal = 0; ?>
            @while ($nilai_awal < $jumlah)
            <tr>
              <td>{{ $npm [$nilai_awal] }}</td>
              <td>{{ $nama [$nilai_awal] }}</td>
              <td>Perempuan</td>
              <td>30-06-2004</td>
              <td>Medan</td>
            </tr>
            <?php $nilai_awal++ ?>
            @endwhile
          </tbody>
        </table>
      </div>
      <div class="col-sm-6">
        <h4>Form Mahasiswa</h4>
        <form action="" method="GET">
          <div class="row">
            <div class="col-sm-6">
              <label for="">NPM</label>
              <input type="number" name="npm" class="form-control" placeholder="Input NPM">
            </div>
            <div class="col-sm-6">
              <label for="">Nama Mahasiswa</label>
              <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Input Nama Mahasiswa">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label for="">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" class="form-control">
            </div>
            <div class="col-sm-6">
              <label for="">Program Studi</label>
              <select name="prodi" class="form-control">
                <option>Sistem Informasi</option>
                <option>Ilmu Komputer</option>
                <option>Biologi</option>
                <option>Fisika</option>
                <options>Matematika</option>
              </select>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-sm-12">
              <button class="btn btn-primary" style="width: 100%">Simpan</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
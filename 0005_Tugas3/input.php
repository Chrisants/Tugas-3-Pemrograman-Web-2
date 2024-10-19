<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OOP PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
    <h1>CRUD OOP PHP</h1>
    <h4>Tambah Data</h4>
    <hr class ="mt-0">
    <!-- form tambah data -->
    <form method="POST" action="proses.php?aksi=tambah" enctype="multipart/form-data" onsubmit="return validateForm()">
      <div class="mb-3">
        <label for="nama" class="form-label" >Nama <span class="text-danger"></span></label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat <span class="text-danger"></span></label>
        <input type="text" class="form-control" id="alamat" name="alamat" required>
      </div>
      <div class="mb-3">
        <label for="nohp" class="form-label">No HP <span class="text-danger"></span></label>
        <input type="text" class="form-control" id="nohp" name="nohp" required>
      </div>
      <div class="mb-3">
          <label for="kelas" class="form-label">Kelas <span class="text-danger"></span></label>
          <input type="text" class="form-control" id="kelas" name="kelas" required>
        </div>
      <div class="mb-3">
        <label for="nim" class="form-label">NIM <span class="text-danger"></span></label>
        <input type="text" class="form-control" id="nim" name="nim" required>
      </div>
      <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="text-danger"></span></label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="foto" class="form-label">Upload Foto</label>
        <input type="file" class="form-control" id="foto" name="foto" required>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="index.php" class="btn btn-danger" >Kembali</a>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      function validateForm(){
        const jenis_kelamin =document.getElementById('jenis_kelamin').value;
        if(jenis_kelamin == ""){
          alert("Di Isi");
          return false;
        }
        return true;
      }
    </script>
  </body>
</html>
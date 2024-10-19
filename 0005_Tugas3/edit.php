<?php
include 'database.php';
$db = new Database;
$id = $_GET['id'];
$detail = $db->editData($_GET['id']);
$dataUser = $detail[0]; // Ambil data pertama dari array
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-3">
      <h1>Edit Data</h1>
      <form method="POST" action="proses.php?aksi=edit">
        <?php foreach ($detail as $dataUser) { ?>
          <input type="hidden" name="id" value="<?php echo $dataUser['id']; ?>">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dataUser['nama']; ?>"required>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $dataUser['alamat']; ?>"required>
          </div>
          <div class="mb-3">
            <label for="nohp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $dataUser['nohp']; ?>" required>
          </div>
          <div class="mb-3">
          <label for="kelas" class="form-label">Kelas</label>
          <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $dataUser['kelas']; ?>" required>
        </div>
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $dataUser['nim']; ?>" required>
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki-laki" <?php if ($dataUser['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?> required>Laki-laki</option>
            <option value="Perempuan" <?php if ($dataUser['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?> required>Perempuan</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="foto" class="form-label" >Unggah Foto Baru</label>
          <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-danger" >Kembali</a>
      </form>
    </div>
        <?php } ?> 
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
          <script>
            const nama =document.getElementById('nama').value.trim();
            const alamat =document.getElementById('alamat').value.trim();
            const nohp =document.getElementById('nohp').value.trim();
            const kelas =document.getElementById('kelas').value.trim();
            const nim =document.getElementById('nim').value.trim();
            const jenis_kelamin =document.getElementById('jenis_kelamin').value.trim();

            if (!nama || !alamat || !nohp || !kelas || !nim || !jenis_kelamin){
              alert("DI Isi");
              return false;
            }
            return true;
          </script>
  </body>
</html>



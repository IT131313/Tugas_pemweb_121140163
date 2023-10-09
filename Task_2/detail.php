<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Informasi Pendaftar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Detail Informasi Pendaftar</h1>
        <div class="info-box">
          <?php 
         $nama = $_GET['nama'];
         $nim = $_GET['nim'];
         $prodi = $_GET['prodi'];
         $email = $_GET['email'];
         $alamat = $_GET['alamat'];

        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>NIM:</strong> $nim</p>";
        echo "<p><strong>Nama:</strong> $prodi</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>ALamat:</strong> $alamat</p>";
          ?>
        </div>
    </div>
</body>
</html>

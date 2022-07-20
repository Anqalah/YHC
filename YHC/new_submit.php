<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    p {
      color: black;
    }

    h1 {
      color: black;
    }
  </style>
  <title>Contact</title>
</head>

<body style="background-color: #87CEFA;">
  <?php

  //display all varibel
  //print_r($_POST);

  //cek submit
  if (!$_SERVER["REQUEST_METHOD"] == "POST") {
    header("location: index.php");
    exit();
  } elseif (isset($_POST['cancel'])) {
    header("location: index.php");
    exit();
  }

  //koneksi ke db
  $con = mysqli_connect("localhost", "root", "", "tp5");

  //tampung semua var form
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $fakultas = $_POST['fakultas'];
  $jurusan = $_POST['jurusan'];

  //buat query
  $query_str = "insert into dosen (nim,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,fakultas,jurusan) 
                  values ('$nim', '$nama','$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$fakultas', '$jurusan')";

  //eksekusi
  $query = mysqli_query($con, $query_str);

  echo "<p>Sukses ... </p>";

  echo "<a href='index.php'><p> Klik untuk Kembali ke beranda </p></a>";

  ?>
</body>

</html>
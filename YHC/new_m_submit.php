<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    p {
      color: white;
    }

    h1 {
      color: white;
    }
  </style>
  <title>Contact</title>
</head>

<body style="background-color: #2E8B57;">
  <?php

  //display all varibel
  //print_r($_POST);

  //cek submit
  if (!$_SERVER["REQUEST_METHOD"] == "POST") {
    header("location: index3.php");
    exit();
  } elseif (isset($_POST['cancel'])) {
    header("location: index3.php");
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
  $ipk = $_POST['ipk'];
  $fakultas = $_POST['fakultas'];
  $jurusan = $_POST['jurusan'];
  $id_dosen = $_POST['id_dosen'];

  //buat query
  $query_str = "insert into mahasiswa (nim,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,ipk,fakultas,jurusan,dosen_id) 
                  values ('$nim', '$nama','$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$ipk' ,'$fakultas', '$jurusan', '$id_dosen')";

  //eksekusi
  $query = mysqli_query($con, $query_str);
  echo "<p>Sukses ... </p>";

  echo "<a href='index3.php'><p> Klik untuk Kembali</p></a>";

  ?>
</body>

</html>
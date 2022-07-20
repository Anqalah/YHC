<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Contact</title>
    <style>
        p {
            color: black;
        }

        h1 {
            color: black;
        }
    </style>
</head>

<body style="background-color: #87CEFA;">
    <?php
    //cek key, jika kosong kembali ke index
    if (!isset($_GET['key'])) {
        header("location:index.php");
        exit();
    }

    //ambil key
    $key = $_GET['key'];

    //koneksi ke db
    $con = mysqli_connect("localhost", "root", "", "tp5");

    //membuat query
    $query = mysqli_query($con, "select * from dosen
                 where id = '$key'");

    //ambil field
    $data = mysqli_fetch_array($query);
    $nim = $data['nim'];
    $nama = $data['nama'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $tempat_lahir = $data['tempat_lahir'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $fakultas = $data['fakultas'];
    $jurusan = $data['jurusan'];

    ?>
    <form style="margin: 20px auto; width:80%" action="update_submit.php" method="post">
        <h1>Data Dosen Baru</h1>
        <input style="display: none;" name="id" value="<?= $key; ?>">
        <p>Nim <input class="form-control" type="number" name="nim" value="<?= $nim; ?>"></p>
        <p>Nama <input class="form-control" type="text" name="nama" value="<?= $nama; ?>"></p>
        <div class="form-row">
            <div class="form-group col-md-6">
                <p>Tempat lahir <input class="form-control" type="text" name="tempat_lahir" value="<?= $tempat_lahir; ?>"></p>
            </div>
            <div class="form-group col-md-6">
                <p>Tanggal Lahir <input class="form-control" type="date" name="tanggal_lahir" value="<?= $tanggal_lahir; ?>"></p>
            </div>
        </div>
        <p>Jenis Kelamin <input class="form-control" type="text" name="jenis_kelamin" value="<?= $jenis_kelamin; ?>"></p>
        <div class="form-row">
            <div class="form-group col-md-6">
                <p>Fakultas <input class="form-control" type="text" name="fakultas" value="<?= $fakultas; ?>"></p>
            </div>
            <div class="form-group col-md-6">
                <p>Jurusan <input class="form-control" type="text" name="jurusan" value="<?= $jurusan; ?>"></p>
            </div>
        </div>
        <p><input class="btn btn-primary" type="submit" name="save" value="Save">
            <input class="btn btn-primary" type="submit" name="cancel" value="Cancel">
        </p>
    </form>
</body>

</html>
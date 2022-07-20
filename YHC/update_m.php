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
            color: white;
        }

        h1 {
            color: white;
        }
    </style>
</head>

<body style="background-color: #2E8B57;">
    <?php
    //cek key, jika kosong kembali ke index
    if (!isset($_GET['key'])) {
        header("location:index3.php");
        exit();
    }

    //ambil key
    $key = $_GET['key'];

    //koneksi ke db
    $con = mysqli_connect("localhost", "root", "", "tp5");

    //membuat query
    $query = mysqli_query($con, "select * from mahasiswa
                 where id = '$key'");

    //ambil field
    $data = mysqli_fetch_array($query);
    $nim = $data['nim'];
    $nama = $data['nama'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $tempat_lahir = $data['tempat_lahir'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $ipk = $data['ipk'];
    $fakultas = $data['fakultas'];
    $jurusan = $data['jurusan'];
    $id_dosen = $data['dosen_id'];

    ?>
    <form style="margin: 20px auto; width:80%" action="update_m_submit.php" method="post">
        <h1>Edit Data Mahasiswa</h1>
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
        <p>IPK <input class="form-control" type="text" name="ipk" value="<?= $ipk; ?>"></p>
        <div class="form-row">
            <div class="form-group col-md-6">
                <p>Fakultas <input class="form-control" type="text" name="fakultas" value="<?= $fakultas; ?>"></p>
            </div>
            <div class="form-group col-md-6">
                <p>Jurusan <input class="form-control" type="text" name="jurusan" value="<?= $jurusan; ?>"></p>
            </div>
        </div>
        <select name="id_dosen" class="form-control">
            <option disabled selected> Pilih </option>
            <?php
            $query = mysqli_query($con, "select * from dosen");
            while ($data2 = mysqli_fetch_array($query)) {
            ?>
                <option value="<?= $data2['id'] ?>"><?= $data2['id'] ?> - <?= $data2['nama'] ?></option>
            <?php
            }
            ?>
        </select>
        <p><input class="btn btn-primary" type="submit" name="save" value="Save">
            <input class="btn btn-primary" type="submit" name="cancel" value="Cancel">
        </p>
    </form>
</body>

</html>
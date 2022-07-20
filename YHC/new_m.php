<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Add Data Mahasiswa</title>
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
    <form style="margin: 20px auto; width:80%" action="new_m_submit.php" method="post">
        <h1>Data Mahasiswa Baru</h1>
        <p>Nim <input class="form-control" type="number" name="nim"></p>
        <p>Nama <input class="form-control" type="text" name="nama"></p>
        <div class="form-row">
            <div class="form-group col-md-6">
                <p>Tempat lahir <input class="form-control" type="text" name="tempat_lahir"></p>
            </div>
            <div class="form-group col-md-6">
                <p>Tanggal Lahir <input class="form-control" type="date" name="tanggal_lahir"></p>
            </div>
        </div>
        <p>Jenis Kelamin <input class="form-control" type="text" name="jenis_kelamin"></p>
        <p>IPK <input class="form-control" type="number" name="ipk"></p>
        <div class="form-row">
            <div class="form-group col-md-6">
                <p>Fakultas <input class="form-control" type="text" name="fakultas"></p>
            </div>
            <div class="form-group col-md-6">
                <p>Jurusan <input class="form-control" type="text" name="jurusan"></p>
            </div>
        </div>
        <select name="id_dosen" class="form-control">
            <option disabled selected> Pilih </option>
            <?php
            $con = mysqli_connect("localhost", "root", "", "tp5");
            $query = mysqli_query($con, "select * from dosen");
            while ($data2 = mysqli_fetch_array($query)) {
            ?>
                <option value="<?= $data2['id'] ?>"><?= $data2['id'] ?> - <?= $data2['nama'] ?> </option>
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
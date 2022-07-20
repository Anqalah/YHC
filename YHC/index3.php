<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Mahasiswa</title>
</head>

<body style="background-color: #2E8B57;">

    <main style="margin: 20px auto; width: 80%">
        <h2 align="center" style="color: white;">Data Seluruh Mahasiswa</h2>
        <a role='button' class='btn btn-success' href='index.php'>Kembali</a>
        <a style="float: right;" role='button' class='btn btn-success' href='new_m.php'>Tambah Data Mahasiswa</a>
        </br>
        <?php

        $sql = "select * from mahasiswa";
        $con = mysqli_connect("localhost", "root", "", "tp5");

        $query = mysqli_query($con, $sql);

        echo '<table class="table table-dark">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>IPK</th>
                        <th>Fakultas</th>
                        <th>Jurusan</th>
                        <th>Id Dosen</th>
                    </tr>
                </thead>
                <tbody>';

        while ($data = mysqli_fetch_array($query)) {

            echo '<tr>
                <td>' . $data['nim'] . '</td>
                <td>' . $data['nama'] . '</td>
                <td>' . $data['tempat_lahir'] . '</td>
                <td>' . $data['tanggal_lahir'] . '</td>
                <td>' . $data['jenis_kelamin'] . '</td>
                <td>' . $data['ipk'] . '</td>
                <td>' . $data['fakultas'] . '</td>
                <td>' . $data['jurusan'] . '</td>
                <td>' . $data['dosen_id'] . '</td>
                ';

            $key = $data['id'];
            echo " <td>
                    <a role='button' class='btn btn-primary' href='update_m.php?key=$key'>Update</a>
                    <a role='button' class='btn btn-danger' href='delete_m.php?key=$key'>Delete</a>
                   </td>";
        }
        echo '
        </tbody>
        </table>';
        ?>
    </main>


</body>
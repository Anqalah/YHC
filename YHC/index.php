<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Dosen</title>
</head>

<body style="background-color: #87CEFA;">

    <main style="margin: 20px auto; width: 80%;">
        <h2 align="center" style="color: black;">Data Dosen</h2>
        <a role='button' class='btn btn-success' href='index3.php'>Data Seluruh Mahasiswa</a>
        <a style="float: right;" role='button' class='btn btn-success' href='new.php'>Tambah Data Dosen</a>
        </br>
        <?php
        //KONEKSI DATABASE
        $con = mysqli_connect("localhost", "root", "", "tp5");
        $sql = "select * from dosen";
        $query = mysqli_query($con, $sql);

        //awal loop
        echo '<table class="table table-dark">
		<thead>
			<tr>
				<th>NIM</th>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
				<th>Fakultas</th>
                <th>Jurusan</th>
			</tr>
		</thead>
		<tbody>';
        while ($data = mysqli_fetch_object($query)) {
            //print -> menampilkan data
            echo '<tr>
			<td>' . $data->nim . '</td>
			<td>' . $data->nama . '</td>
            <td>' . $data->tempat_lahir . '</td>
			<td>' . $data->tanggal_lahir . '</td>
            <td>' . $data->jenis_kelamin . '</td>
			<td>' . $data->fakultas . '</td>
            <td>' . $data->jurusan . '</td>
			';

            $key = $data->id;
            echo " <td> <a role='button' class='btn btn-info' href='index2.php?key=$key'>Detail</a>
                    <a role='button' class='btn btn-primary' href='update.php?key=$key'>Update</a>
                    <a role='button' class='btn btn-danger' href='delete.php?key=$key'>Delete</a>
                </td>";
        }
        echo '
	</tbody>
    </table>';
        ?>

    </main>


</body>

</html>
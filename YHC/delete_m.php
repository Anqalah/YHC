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
    $query = mysqli_query($con, "delete from mahasiswa where id = '$key'");

    echo "<p>Record telah dihapus!</p>";
    echo "<a href='index3.php'><p> Klik untuk Kembali ke beranda </p></a>";
    //awal loop
    ?>
</body>

</html>
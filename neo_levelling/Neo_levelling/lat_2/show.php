<?php
#menangkap data
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$email = $_POST['email'];
$kelamin = $_POST['kelamin'];
$beasiswa = $_POST['beasiswa'];
$jurusan = $_POST['jurusan'];
$universitas = $_POST['universitas'];


?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
</head>
<div class="title_head">
    <h>Menampilkan Data yang di Inputkan</h>
</div>


<body>
    </br>
    </br>
    </br>
    </br>
    </br>

    </br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Email</th>
                <th scope="col">Kelamin</th>
                <th scope="col">Beasiswa</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Universitas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $nama; ?></td>
                <td><?php echo $tanggal; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $kelamin; ?></td>
                <td><?php echo $beasiswa; ?></td>
                <td><?php echo $jurusan; ?></td>
                <td><?php echo $universitas; ?></td>
            </tr>

        </tbody>
    </table>

</body>

</html>
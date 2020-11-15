<!DOCTYPE html>
<title>Pendaftaran mahasiswa</title>

<head>
    <link rel="shortcut icon" type="images/x-icon" href="android-chrome-192x192.png">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width-device-width. initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>

<body>
    <div class="title_head">
        <h>Pendaftaran Mahasiswa Baru</h>
    </div>
    <div class="container">
        <div class="title_head">
            <h6>Informasi biaya kuliah</h6>
        </div>
        <table>
            <tr>
                <th>Fakultas</th>
                <th>Biaya Kuliah</th>

            </tr>
            <tr>
                <td>Teknik</td>
                <td>Rp 5.000.000</td>

            </tr>
            <tr>
                <td>MIPA</td>
                <td>Rp 4.000.000</td>
            </tr>
            <tr>
                <td>Kedokteran</td>
                <td>Rp 12.000.000</td>
            </tr>
            <tr>
                <td>Kesehatan Masyarakat</td>
                <td>Rp 9.000.000</td>
            </tr>
            <tr>
                <td>Teknologi Informasi</td>
                <td>Rp 5.000.000</td>
            </tr>

        </table>
        <p><b>Beasiswa yang dapat diambil</b></p>
        <ul>
            <li>Beasiswa berprestasi</li>
            <li>Beasiswa bantuan kuliah</li>
        </ul>
        <div class="title_head">
            <h>Pendaftaran Data Calon Mahasiswa</h>
        </div>
        <div class="gambar_person">
            <img src="person.jpg" />
            <p>Gambar mahasiswa(dummy)</p>
        </div>
        <form method="post" action="show.php">
            <label for="fname">Nama Lengkap</label></br>
            <input type="text" name="nama" placeholder="Fadhil Elrizanda"><br><br>
            <label for="tanggal" id="tanggal" name="tanggal">Tanggal lahir </label></br>
            <input type="date" name="tanggal"></br></br>
            <label for="email">Enter your email:</label></br>
            <input type="email" id="email" name="email" placeholder="fadhilelrizandamicr@gmail.com">
            <p>Pilih jenis kelamin </p>
            <label for="Laki-laki">Laki-laki</label></br>
            <input type="radio" name="kelamin" value="laki-laki"><br><br>
            <label for="Perempuan">Perempuan</label></br>
            <input type="radio" name="kelamin" value="perempuan"><br><br>
            <label for="fname">Nama Institusi</label><br>
            <input type="text" name="universitas" placeholder="Universitas Andalas"><br><br>
            <label for="fname">Fakultas</label><br>
            <input type="text" name="fakultas" placeholder="Teknik"><br><br>
            <label for="fname">Jurusan</label><br>
            <input type="text" name="jurusan" placeholder="Teknik Elektro"><br><br>
            <p>Beasiswa yang diambil</p>
            <input type="checkbox" id="beasiswa" name="beasiswa" value="prestasi">
            <label for="beasiswa">Prestasi</label><br>
            <input type="checkbox" id="beasiswa" name="beasiswa" value="bantuan">
            <label for="vehicle2">Bantuan</label><br><br>
            <label for="berkas">Masukkan Berkas Rapor SMA</label><br>
            <input type="file" id="berkas" name="berkas"> </br> </br>
            <label for="foto">Masukkan Foto</label><br>
            <input type="file" id="foto" name="foto"><br><br>
            <input type="submit" value="submit">
        </form>
</body>

</html>
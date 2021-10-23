<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us |Donasi TaPe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="dashboard.css">
</head>
<style>
    body {
    font-family: Arial, Helvetica, sans-serif;
    background:#292931;
}
form {
    border: 3px solid #f1f1f1;
    width: 80%;
}

input[type=text],input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
    width: 80%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td,
#customers th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

#customers tr:nth-child(even) {
    background-color: #f2f2f2;
}

#customers tr:hover {
    background-color: #ddd;
}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #423143;
    color: white;
}

.button {
    background-color: #423143;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
h1{
    display:flex;
    justify-content:center;
    align-items:center;
    font-weight: bold;
    font-size: 35pt;
    font-weight: bold;
    font-family: "Source Sans Pro", sans-serif;
    margin-left: 15px;
    margin-top: 30px;
    color:white;
    height: 120px;
    width:100%;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <img src="logo2.png" alt="Gsmbar Tidak Tersedia" style="max-height:120px;">
            <a class="navbar-brand" href="#" style="font-family: 'Domine', serif; font-size: 40px; font-weight:bold; color: #7fdcda;"> Donasi TaPe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      My Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Log In</a></li>
                      <li><a class="dropdown-item" href="#">Sign In</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Program Kegiatan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Berbagi Kuota</a></li>
                      <li><a class="dropdown-item" href="#">Berbagi Ponsel</a></li>
                      <li><a class="dropdown-item" href="#">Peduli Pendidikan</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Keranjang Donasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                      <li><a class="dropdown-item" href="#">Langganan</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
        </div>
    </nav> 
        <div class="container bg-light p-4 mb-4 mt-4 justify-content-center" style=" border-radius: 15px;">
        <div class="container">
        <h3><i class="fa fa-user-plus" aria-hidden="true" style="font-size:30pt"></i>  Registrasi Barang | Gudang</h3><hr>
        </div>
        <h1>Daftar Barang</h1>
        <table id="customers">
            <tr>
                <th>Kode Barang</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Keluar</th>
                <th>Nama Barang</th>
                <th>Merek Barang</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Total Harga</th>
                <th>Expired</th>
                <th colspan="2">Action</th>
            </tr>
            <?php foreach ($datas as $data) : ?>
                <tr>
                    <td><?= $data['ID'] ?></td>
                    <td><?= $data['Nama'] ?></td>
                    <td><?= $data['Username'] ?></td>
                    <td><?= $data['JenisKelamin'] ?></td>
                    <td><?= $data['Provinsi'] ?></td>
                    <td><?= $data['Email'] ?></td>
                    <td><?= $data['Foto'] ?></td>
                    <td><a href="edit.php"?id=<?= $data['ID'] ?>class="button">Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

        </div>         
          <!----------- Footer ------------>
          <footer class="footer-bs">
              <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <div class="footernya">
                        <img class="img-fluid" src="logo2.png" width="100" height="100" style="margin: left 10px;">
                        <h2 style="font-family: 'Domine', serif; font-size: 30px;  color: #7fdcda;">Donasi TaPe </h2>
                      <p>Donasi TaPe adalah wadah online untuk mempertemukan relawan/donatur yang ingin menyumbangkan bantuannya untuk diberikan kepada pelajar yang kurang mampu</p>
                      </div>
                  </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Menu —</h4>
                    <div class="col-md-6">
                          <ul class="list">
                            <li><a href="dashboard.html">Beranda</a></li>
                            <li><a href="tentang-kami-view.html">Tentang Kami</a></li>
                            <li><a href="hubungi-kami.html">Hubungi Kami</a></li>
                            <li><a href="FAQ.html">FAQ</a></li>
                          </ul>
                      </div>
                  </div>
                <div class="col-md-2 footer-social animated fadeInDown">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/donasi.tape">Facebook</a></li>
                        <li><a href="https://twitter.com/DonasiTape">Twitter</a></li>
                        <li><a href="https://www.instagram.com/donasi_tape/">Instagram</a></li>
                      </ul>
                  </div>
                <div class="col-md-3 footer-ns animated fadeInRight">
                    <h4>Donasi TaPe</h4>
                    <div class="alamat">
                        <i class="fas fa-home me-3"></i> Jl. Majapahit No. 62 Mataram
                    <div class="tlp">
                        <i class="fas fa-phone me-3"></i> 
                        + 62 877 321 9940
                    </div>
                    <br>
                    <h6>
                        Ayo bantu para generasi muda bangsa!
                    </h6>
                </div>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Data </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <img src="logo2.png" alt="Gsmbar Tidak Tersedia" style="max-height:110px;">
            <a class="navbar-brand me-4 ms-4" href="#" style="font-family: 'Domine', serif; font-size: 40px; font-weight:bold; color: #7fdcda;"> Inventory Box </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">About Us</a>
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
                  <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Produk 
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Penjualan</a></li>
                      <li><a class="dropdown-item" href="#">Pembelian</a></li>
                      <li><a class="dropdown-item" href="#">Biaya</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Laporan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Pengaturan Aset</a></li>
                      <li><a class="dropdown-item" href="#">Pengaturan Pajak </a></li>
                      <li><a class="dropdown-item" href="#">Kas & Bank </a></li>
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
          <form action="action.php" method="POST">
          <div class="form group">
                  <label for="kd">Kode Barang</label>
                  <input type="kd" class="form-control" id="kd" name="kd" required>
              </div>
              <div class="form group">
                  <div class="row justify-content-center">
                      <div class="col-md-6">
                      <label for="tgl">Tanggal Masuk</label>
                      <input type="date" class="form-control" id="tgl" name="tgl" required>
                      </div>
                      <div class="col-md-6">
                      <label for="tglk">Tanggal Keluar</label>
                      <input type="date" class="form-control" id="tglk" placeholder="" name="tglk" required>
                      </div>
                  </div>
              </div>
              <div class="form group">
                  <div class="row justify-content-center">
                      <div class="col-md-6">
                      <label for="nama">Nama Barang</label>
                      <input type="text" class="form-control" id="nama" name="nama" required>
                      </div>
                      <div class="col-md-6">
                      <label for="mrk">Merek Barang</label>
                      <input type="text" class="form-control" id="mrk" placeholder="" name="mrk" required>
                      </div>
                  </div>
              </div>
              <div class="form group">
                  <label for="jml">Jumlah Barang</label>
                  <input type="number" class="form-control" id="jml" placeholder="Dalam satuan" name="jml" required>
              </div>
              <div class="form group">
                  <label for="harga">Harga Satuan</label>
                  <input type="number" class="form-control" id="harga" placeholder="Rp. " name="harga" required>
              </div>
              <div class="form group">
                  <label for="total">Total Harga</label>
                  <input type="number" class="form-control" id="total" placeholder="Rp. " name="total" required>
              </div>
              <div class="form group">
                  <label for="exp">Tanggal Kadaluarsa</label>
                  <input type="date" class="form-control" id="exp" name="exp" required> </textarea>
              </div>
              <div class="container mt-3" style="display:flex; justify-content:center">
              <input type="submit" value="Daftar" class=" btn btn-dark" name="daftar">
              </div>
          </form> 
        </div>         
          <!----------- Footer ------------>
          <footer class="footer-bs">
              <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <div class="footernya">
                        <img class="img-fluid" src="logo2.png" width="100" height="100" style="margin: left 10px;">
                        <h2 style="font-family: 'Domine', serif; font-size: 30px;  color: #7fdcda;">Inventory Box </h2>
                      <p>Aplikasi integrasi stok gudang online terbaik di Indonesia. Membantu pembukuan & operasional bisnis perusahaan menjadi lebih mudah & efisien. Kelola usaha dengan solusi automasi, real-time, kapanpun & dimanapun.</p>
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
                    <h4>Inventory Box </h4>
                    <div class="alamat">
                        <i class="fas fa-home me-3"></i> Jl. Majapahit No. 62 Mataram
                    <div class="tlp">
                        <i class="fas fa-phone me-3"></i> 
                        + 62 877 321 9940
                    </div>
                    <br>
                    <h6>
                        
                    </h6>
                </div>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>Petugas Dashboard</title>
    <style>
body {
    background-image: url('../assets/background.png');
    background-size: cover;
    background-position: center;
    margin: 0; /* Menetapkan margin menjadi 0 */
    padding: 0; /* Menetapkan padding menjadi 0 */
    height: 100vh;
}

        .navbar-brand {
            position: absolute;
            top: 0;
            left: 0;
            margin: 10px;
        }

        .dropdown {
            position: absolute;
            top: 25px;
            right: 20px;
        }

        .dropdown-menu {
            margin-top: 10px;
        }

        .btn-custom {
            color: #000;
            border: 3px solid #ccc;
            border-radius: 15px; /* Sudut tombol yang melengkung */
            padding: 20px 50px; /* Panjang dan lebar tombol yang sama */
            margin-bottom: 20px;
            cursor: pointer;
            font-weight: bold; /* Membuat teks di dalam tombol menjadi tebal */
        }

        .btn-custom:hover {
            background-color: #e6e6e6;
        }

        /* Memberi warna latar belakang yang berbeda pada setiap tombol */
        .btn-generate { background-color: #f2f2f2; }
        .btn-tambah { background-color: #737373; }
        .btn-peminjaman { background-color: #f2f2f2; }
        .btn-pengembalian { background-color: #737373; }
        .btn-akun { background-color: #f2f2f2; }
        .btn-daftar { background-color: #737373; }

    </style>
</head>
<body>
    <a class="navbar-brand">
        <img src="../assets/lgoo.png" alt="logo" width="150px">
    </a>
    
    <div class="dropdown">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../assets/lgoadmin.png" alt="memberLogo" width="40px">
        </button>
        <ul class="dropdown-menu position-absolute mt-2 p-2">
        <li>
            <a class="dropdown-item text-center" href="#">
            <img src="../assets/lgoadmin.png" alt="adminLogo" width="30px">
            </a>
          </li>
          <hr>         
          <li>
            <a class="dropdown-item text-center p-2 bg-danger text-light rounded" href="signout.php">Sign Out <i class="fa-solid fa-right-to-bracket"></i></a>
          </li>
        </ul>
    </div>

    <div class="mt-5 p-4">

        <h1 class="mt-5 fw-bold">Dashboard <span class="fs-4 text-secondary"></span></h1>
      
        <div class="mt-4 p-3">
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <div class="cardImg">
                    <button onclick="location.href='generatelaporan/generatelaporan.php';" class="btn-custom btn-generate">Generate Laporan</button>
                </div>
                <div class="cardImg">
                    <button onclick="location.href='buku/tambahBuku.php';" class="btn-custom btn-tambah">Tambah Barang/Kategori</button>
                </div>
                <div class="cardImg">
                    <button onclick="location.href='peminjaman/daftarpinjam.php';" class="btn-custom btn-peminjaman">Peminjaman</button>
                </div>
                <div class="cardImg">
                    <button onclick="location.href='pengembalian/daftarpengembalian.php';" class="btn-custom btn-pengembalian">Pengembalian</button>
                </div>
                <div class="cardImg">
                    <button onclick="location.href='buku/daftarbuku.php';" class="btn-custom btn-daftar">Daftar Buku</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>Petugas Dashboard</title>
    <style>
        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0; /* Menetapkan margin menjadi 0 */
            padding: 0; /* Menetapkan padding menjadi 0 */
            height: 100vh;
        }

        .navbar-brand {
            position: absolute;
            top: 0;
            left: 0;
            margin: 10px;
        }

        .dropdown {
            position: absolute;
            top: 25px;
            right: 20px;
        }

        .dropdown-menu {
            margin-top: 10px;
        }

        .btn-custom {
            color: #000;
            border: 3px solid #ccc;
            border-radius: 15px; /* Sudut tombol yang melengkung */
            padding: 20px 50px; /* Panjang dan lebar tombol yang sama */
            margin-bottom: 20px;
            cursor: pointer;
            font-weight: bold; /* Membuat teks di dalam tombol menjadi tebal */
        }

        .btn-custom:hover {
            background-color: #e6e6e6;
        }

        /* Memberi warna latar belakang yang berbeda pada setiap tombol */
        .btn-generate { background-color: #f2f2f2; }
        .btn-tambah { background-color: #737373; }
        .btn-peminjaman { background-color: #f2f2f2; }
        .btn-pengembalian { background-color: #737373; }
        .btn-akun { background-color: #f2f2f2; }
        .btn-daftar { background-color: #737373; }

        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #A5CEE8;
            padding-top: 60px; /* Adjust based on your navbar height */
        }

        .sidenav a {
            padding: 10px;
            text-decoration: none;
            font-size: 20px;
            color: white;
            display: block;
            text-align: center;
        }

        .sidenav a:hover {
            background-color: #6C7A89;
        }
        .box1 {
    width: 250px;
    height: 110px;
    background: #767d99;
    border-radius: 10px;
    font-size: 20px;
    margin-top: 20px;
    font-family: Poppins;
    font-weight: bold;
    color: #000;
    text-align: center;
    margin-bottom: 20px;
}

.box1 a {
    text-decoration: none;
    font-weight: lighter;
    color: #000;
}
 
.box3 {

    width: 900px;
    height: 25px;
    background: #afb1ba;
}
    </style>
</head>
<body>
<header class="row w-100 z-3 position-fixed justify-content-between align-items-center py-2 p-0 m-0" style="background-color: #A5CEE8 ; width:90px;">
        <img class="col-2 mt-3" style="width: 150px; margin-left:15px;" src="../assets/logo.png" alt="">
        <div class="dropdown col-1 d-flex flex-row align-items-center mt-0 p-0" style="padding-top: 100px;">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../assets/memberlogo.png" alt="memberLogo" width="35px">
            </button>
            <ul class="dropdown-menu position-absolute mt-2 p-2">
                <li>
                    <a class="dropdown-item text-center" href="#">
                        <img src="../assets/memberlogo.png" alt="adminLogo" width="40px">
                    </a>
                </li>
                <hr>         
                <li>
                    <a class="dropdown-item text-center p-2 bg-danger text-light rounded" href="signout.php">Sign Out <i class="fa-solid fa-right-to-bracket"></i></a>
                </li>
            </ul>
        </div>
    </header> 
    <br>
    <div class="sidenav mt-5">
        <a onclick="location.href='generatelaporan/generatelaporan.php';"><i class=" cardImg fas fa-chart-bar"></i> Generate Laporan</a>
        <br>
        <a onclick="location.href='buku/tambahBuku.php';"><i class="cardImg fas fa-plus"></i> Tambah Buku/kategori</a>
        <br>
        <a onclick="location.href='peminjaman/daftarpinjam.php';"><i class=" cardImg fas fa-book"></i> Peminjaman</a>
        <br>
        <a onclick="location.href='pengembalian/daftarpengembalian.php';"><i class=" cardImg fas fa-undo"></i> Pengembalian</a>
        <br>
        <a onclick="location.href='buku/daftarbuku.php';"><i class=" cardImg fas fa-list"></i> Daftar Buku</a>
    </div>
    
    <div class="mt-3 p-4" style="margin-left: 220px;">
        <h1 class="mt-5 fw-bold">Selamat Datang Petugas <span class="fs-4 text-secondary"></span></h1>
        <div class="d-flex">
      <div class="d-flex flex-column mt-5">
        <div class="box1 flex-column d-flex align-items-center justify-content-center">
          <i class="bi bi-people" ></i>
          <p>2</p>
          <a  href="">Total Petugas</a>
        </div>
        
        <div class="box1 flex-column d-flex align-items-center justify-content-center">
          <p>112</p>
          <a onclick="location.href='buku/daftarbuku.php';">Total Buku</a>
        </div>
    
        <div class="box1 flex-column d-flex align-items-center justify-content-center">
          <p>23</p>
          <a href="">Total Pengguna</a>
        </div>
      </div>
  </div>
    <div class="boxbawah mt-5">
      <h3>Top Populer Books</h3>

      <div class="box3 d-flex mb-3 justify-content-evenly align-items-center">
        <h5>1.</h5>
        <h5>Yang Katanya Cemara</h5>        
        <h5>Vania Wilona</h5>       
        <h5>20RB dibaca</h5>
      </div>
      <div class="box3 d-flex mb-3 justify-content-evenly align-items-center">
        <h5>1.</h5>
        <h5>Yang Katanya Cemara</h5>        
        <h5>Vania Wilona</h5>       
        <h5>20RB dibaca</h5>
      </div>
      <div class="box3 d-flex mb-3 justify-content-evenly align-items-center">
        <h5>1.</h5>
        <h5>Yang Katanya Cemara</h5>        
        <h5>Vania Wilona</h5>       
        <h5>20RB dibaca</h5>
      </div>
      <div class="box3 d-flex mb-3 justify-content-evenly align-items-center">
        <h5>1.</h5>
        <h5>Yang Katanya Cemara</h5>        
        <h5>Vania Wilona</h5>       
        <h5>20RB dibaca</h5>
      </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

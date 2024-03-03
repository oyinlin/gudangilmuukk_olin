<?php
$conn = mysqli_connect("localhost", "root", "", "eperpus");
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ../../login.php");
    exit;
}

// Mengecek apakah parameter kategori_id sudah diatur
if (isset($_GET['kategori_id'])) {
    $kategori_id = $_GET['kategori_id'];
    // Buat query pencarian berdasarkan kategori
    $query = "SELECT buku.*, kategoribuku.nama_kategori FROM buku
              JOIN kategoribuku_relasi ON buku.id = kategoribuku_relasi.buku_id
              JOIN kategoribuku ON kategoribuku_relasi.kategori_id = kategoribuku.id
              WHERE kategoribuku.id = $kategori_id";
} else if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    // Buat query pencarian
    $query = "SELECT buku.*, kategoribuku.nama_kategori FROM buku
              JOIN kategoribuku_relasi ON buku.id = kategoribuku_relasi.buku_id
              JOIN kategoribuku ON kategoribuku_relasi.kategori_id = kategoribuku.id
              WHERE buku.judul LIKE '%$keyword%'
              OR kategoribuku.nama_kategori LIKE '%$keyword%'";
} else {
    // Jika tidak ada kategori yang dipilih dan tidak ada pencarian, ambil semua buku
    $query = "SELECT buku.*, kategoribuku.nama_kategori FROM buku
            JOIN kategoribuku_relasi ON buku.id = kategoribuku_relasi.buku_id
            JOIN kategoribuku ON kategoribuku_relasi.kategori_id = kategoribuku.id";
}

$result = mysqli_query($conn, $query);
$buku = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Fungsi untuk memeriksa apakah buku sudah disimpan oleh pengguna
function isBookSaved($userId, $bookId, $connection) {
    $query = "SELECT * FROM koleksi WHERE userid = $userId AND bukuid = $bookId";
    $result = mysqli_query($connection, $query);
    return mysqli_num_rows($result) > 0;
}

// Handle simpan dan hapus simpan
if (isset($_POST['simpan'])) {
    $userId = $_SESSION["user_id"];
    $bookId = $_POST['bukuid'];
    $isSaved = isBookSaved($userId, $bookId, $conn);

    if ($isSaved) {
        // Hapus penyimpanan buku
        $deleteQuery = "DELETE FROM koleksi WHERE userid = $userId AND bukuid = $bookId";
        mysqli_query($conn, $deleteQuery);
    } else {
        // Simpan buku
        $insertQuery = "INSERT INTO koleksi (userid, bukuid) VALUES ($userId, $bookId)";
        mysqli_query($conn, $insertQuery);
    }
    // Redirect kembali ke halaman setelah simpan atau hapus simpan
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>User Dashboard</title>
    <style>
        body {
    /* background-image: url('../assets/background.png'); */
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
            margin: 10px; /* Add margin to adjust positioning */
        }

        /* .dropdown {
            position: absolute;
            top: 25px;
            right: 0;
        } */

        /* .dropdown-menu {
            margin-top: 10px;
        } */

        .layout-card-custom {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem;
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

        .btn-generate { background-color: #f2f2f2; }
        .btn-tambah { background-color: #737373; }
        .btn-peminjaman { background-color: #f2f2f2; }
        .btn-pengembalian { background-color: #737373; }
        .btn-akun { background-color: #f2f2f2; }
        .btn-daftar { background-color: #737373; }
        

        @media screen and (max-width: 600px) {
            .d-flex flex-wrap gap-2 cardImg a img {
                width: 200px;
            }
        }
    </style>
</head>
<body class="container-fluid h-100 p-0 m-0">
    <header class="row w-100 z-3 position-fixed justify-content-between align-items-center py-2 p-0 m-0" style="background-color: #A5CEE8">
      <img class="col-2" style="width: 150px;" src="../assets/logo.png" alt="">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="col-lg-4 col-md-6 col-sm-8 mx-auto mt-2 ">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="keyword" placeholder="Cari Buku.." aria-label="Keyword Pencarian" aria-describedby="basic-addon1">
        <button class="btn btn-outline-secondary" type="submit" name="search">Cari</button>
    </div>
</form>
      <div class="dropdown col-1 d-flex flex-row align-items-center mt-0 p-0" style="padding-top: 100px;">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../assets/memberlogo.png" alt="memberLogo" width="35px">
        </button>
        <ul class="dropdown-menu position-absolute mt-2 p-2">
        <li>
            <a class="dropdown-item text-center" href="#">
            <img src="../assets/memberlogo.png" alt="adminLogo" width="30px">
            </a>
          </li>
          <div class="alert alert-success" role="alert">Selamat datang - <span class="fw-bold text-capitalize"><?php echo $_SESSION['username']; ?></span> di gudang ilmu</div>
          <hr>         
          <li>
            <a class="dropdown-item text-center p-2 bg-danger text-light rounded" href="signout.php">Sign Out <i class="fa-solid fa-right-to-bracket"></i></a>
          </li>
        </ul>
      </div>
    </header>
    <div class="mt-0 p-4">
         <?php
         // Mendapatkan tanggal dan waktu saat ini
         $date = date('Y-m-d H:i:s'); // Format tanggal dan waktu default (tahun-bulan-tanggal jam:menit:detik)
         // Mendapatkan hari dalam format teks (e.g., Senin, Selasa, ...)
         $day = date('l');
         // Mendapatkan tanggal dalam format 1 hingga 31
         $dayOfMonth = date('d');
         // Mendapatkan bulan dalam format teks (e.g., Januari, Februari, ...)
         $month = date('F');
         // Mendapatkan tahun dalam format 4 digit (e.g., 2023)
         $year = date('Y');
         ?>

    <div class="mt-5 p-5">
    <div class="d-flex flex-wrap justify-content-center gap-5">
        <div class="button">
            <button onclick="location.href='buku/detailpeminjaman.php';" class="btn-custom btn-tambah">Peminjaman</button>
        </div>
        <div class="button">
            <button onclick="location.href='buku/koleksibuku.php';" class="btn-custom btn btn-info btn-peminjaman">Koleksi</button>
        </div>  
        <div class="dropdown">
            <button class="btn-custom btn-dropdown btn btn-info" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Kategori
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php 
            $select_kategori = mysqli_query($conn, "SELECT * FROM kategoribuku"); // tambahkan titik koma di sini
            while ($kategori = mysqli_fetch_assoc($select_kategori)) {
                echo '<li><a class="dropdown-item" href="?kategori_id=' . $kategori['id'] . '">' . $kategori['nama_kategori'] . '</a></li>';
            }
            ?>
            </ul>
        </div>    
    </div>
</div>
<h4 style="text-shadow: 0px 9px 4px rgba(0, 0, 0, 0.25); color:grey;" class="fw-bold text-center">coba mulai membaca untuk melihat dunia </h4>
</div>
        <div class="layout-card-custom">
    <?php foreach ($buku as $item) : ?>
                <?php
                $isSaved = isBookSaved($_SESSION["user_id"], $item["id"], $conn);
                $buttonColor = $isSaved ? 'pink' : '#3c4a6b';
                $buttonLabel = $isSaved ? '<i class="fas fa-check"></i> Disimpan' : '<i class="far fa-bookmark"></i> Simpan';
                ?>
       <div class="card" style="width: 15rem;">
         <img src="../imgDB/<?= $item["cover"]; ?>" class="card-img-top" alt="coverBuku" height="250px">
         <div class="card-body">
           <h5 class="card-title"><?= $item["judul"]; ?></h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Kategori : <?= $item["nama_kategori"]; ?></li>            
          </ul>
          <div class="card-body text-center">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="userid" value="<?php echo $_SESSION["user_id"]; ?>">
            <input type="hidden" name="bukuid" value="<?= $item["id"]; ?>">
            <button type="submit" name="simpan" class="btn btn-tandai" data-bukuid="<?= $item["id"]; ?>" style="background-color: <?= $buttonColor; ?>">
                <?= $buttonLabel; ?></button>
            <a class="btn btn-primary btn-ulasan" href="buku/ulasan.php?id=<?= $item["id"]; ?>">Ulasan</a>
            <hr>
            <a class="btn btn-info" href="buku/detailBuku.php?id=<?= $item["id"]; ?>">Detail</a>
            </form>
            </div>
        </div>
       <?php endforeach; ?>
      <div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

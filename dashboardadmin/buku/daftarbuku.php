<?php
$conn = mysqli_connect("localhost", "root", "", "eperpus");
session_start();

if(!isset($_SESSION["user_id"]) ) {
  header("Location: ../../login.php");
  exit;
}

if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    // Buat query pencarian
    $query = "SELECT buku.*, kategoribuku.nama_kategori FROM buku
        JOIN kategoribuku_relasi ON buku.id = kategoribuku_relasi.buku_id
        JOIN kategoribuku ON kategoribuku_relasi.kategori_id = kategoribuku.id
            WHERE buku.judul LIKE '%$keyword%'
                  OR kategoribuku.nama_kategori LIKE '%$keyword%'";
  } else {
    // Jika tidak ada pencarian, ambil semua buku
    $query = "SELECT buku.*, kategoribuku.nama_kategori FROM buku
              JOIN kategoribuku_relasi ON buku.id = kategoribuku_relasi.buku_id
              JOIN kategoribuku ON kategoribuku_relasi.kategori_id = kategoribuku.id";
  }

$result = mysqli_query($conn, $query);
$buku = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola buku || Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(90deg, #ffffff 0%, #a5cee8 100%);
    background-size: cover;
    background-position: center;
    margin: 0; /* Menetapkan margin menjadi 0 */
    padding: 0; /* Menetapkan padding menjadi 0 */
    height: 100vh;
}

        .title {
            text-align: center;
            color: #fff;
            margin-bottom: 2rem;
            text-shadow: 0 0 3px black; /* Tambahkan stroke pada judul */
        }

        .layout-card-custom {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem;
        }

        .back-btn {
            text-align:center;
            margin-bottom: 20px;            
            margin-left: -40px;
            position: absolute;
            top: 0;
            transform: translate(-50%, 50%);
            background-color: #3c4a6b;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #2c3859;
        }

        .card{
            border: 2px solid #000;
        }

    </style>
</head>
<body>
<body class="container-fluid h-100 p-0 m-0">
    <header class="row w-100 z-3  justify-content-between align-items-center py-2 p-0 m-0" style="background-color: #A5CEE8">
      <img class="col-2" style="width: 150px;" src="../../assets/logo.png" alt="">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="col-lg-4 col-md-6 col-sm-8 mx-auto mt-2 ">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="keyword" placeholder="Cari Buku.." aria-label="Keyword Pencarian" aria-describedby="basic-addon1">
        <button class="btn btn-outline-secondary" type="submit" name="search">Cari</button>
    </div>
</form>
    </header>
    <ul class="position-absolute top-5 end-0 mt-5 p-5">
    <a href="../dashboardadmin.php" class="btn btn-primary back-btn"><i class="fas fa-arrow-left me-2"></i>Kembali</a>
    </ul>
        <!-- Content -->
        <div class="p-4 mt-4">
            <h2 class="title" style="color: #000;">Daftar Buku</h2>
            <!-- Card buku -->
            <div class="layout-card-custom">
                <?php foreach ($buku as $item) : ?>
                    <div class="card" style="width: 15rem;">
                        <img src="../../imgDB/<?= $item["cover"]; ?>" class="card-img-top" alt="coverBuku" height="250px">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item["judul"]; ?></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Kategori : <?= $item["nama_kategori"]; ?></li>
                            <li class="list-group-item">Id Buku : <?= $item["id"]; ?></li>                    
                        </ul>
                        <div class="card-body">
                            <a class="btn btn-success" href="updatebuku.php?id=<?= $item["id"]; ?>" id="review">Edit</a>
                            <a name ="delete" class="btn btn-danger" href="../../backend/deletebuku.php?id=<?= $item["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data buku ? ');">Delete</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>


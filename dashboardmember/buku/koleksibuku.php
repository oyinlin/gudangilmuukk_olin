<?php
$conn = mysqli_connect("localhost", "root", "", "eperpus");
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ../../login.php");
    exit;
}

$query = "SELECT buku.*, kategoribuku.nama_kategori FROM buku
            JOIN kategoribuku_relasi ON buku.id = kategoribuku_relasi.buku_id
            JOIN kategoribuku ON kategoribuku_relasi.kategori_id = kategoribuku.id
            INNER JOIN koleksi ON buku.id = koleksi.bukuid
            WHERE koleksi.userid = {$_SESSION['user_id']}";

$result = mysqli_query($conn, $query);
$buku = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>Koleksi Buku</title>
    <style>
        body {
    background-image: url('../../assets/background.jpg');
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

        .title {
            text-align: center;
            color: #fff;
            margin-bottom: 2rem;
            text-shadow: 0 0 3px black;
        }

        .layout-card-custom {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem;
        }

        .card {
            border: 2px solid #000;
        }

        .btn-detail {
            background-color: #3c4a6b;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin-right: 5px;
        }

        .btn-detail:hover {
            background-color: #2c3756;
        }

        .btn-kembali {
            text-align:center;
            right:0;
            margin-top: 150px;            
            position: absolute;
            top: -100px;
            transform: translate(-50%, 50%);
            background-color: #3c4a6b;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-kembali:hover {
            background-color: #2c3756;
        }
    </style>
</head>
<body class="container-fluid h-100 p-0 m-0">
    <header class="row w-100 z-3 justify-content-between align-items-center py-2 p-0 m-0" style="background-color: #A5CEE8">
      <img class="col-2" style="width: 150px;" src="../../assets/logo.png" alt="">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="col-lg-4 col-md-6 col-sm-8 mx-auto mt-2 ">
</form>
      <div class="dropdown col-1 d-flex flex-row align-items-center mt-0 p-0" style="padding-top: 100px;">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../../assets/memberlogo.png" alt="memberLogo" width="35px">
        </button>
        <ul class="dropdown-menu position-absolute mt-2 p-2">
        <li>
            <a class="dropdown-item text-center" href="#">
            <img src="../../assets/memberlogo.png" alt="adminLogo" width="30px">
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
    <div>
    <h2 class="title">Koleksi Buku</h2>
    <div class="p-4 mt-5">
        <div class="layout-card-custom">
            <?php foreach ($buku as $item) : ?>
                <div class="card" style="width: 15rem;">
                    <img src="../../imgDB/<?= $item["cover"]; ?>" class="card-img-top" alt="coverBuku" height="250px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item["judul"]; ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Kategori : <?= $item["nama_kategori"]; ?></li>
                    </ul>
                    <div class="card-body">
                        <a class="btn btn-detail" href="detailBuku.php?id=<?= $item["id"]; ?>">Detail</a>
                    </div>
                </div>
            <?php endforeach; ?>
            <a href="../dashboardmember.php" class="btn btn-kembali"><i class="fas fa-arrow-left me-2"></i>Kembali</a>
            </div>
</body>
</html>

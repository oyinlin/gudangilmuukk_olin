<?php
if(!isset($_SESSION["user_id"]) ) 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Eperpus</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="register/registerr.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
     body {
      background-image: url('assets/background.jpg'); /* Ganti 'path/to/your/image.jpg' dengan path menuju gambar latar belakang Anda */
      background-size: cover; /* Menyesuaikan ukuran gambar agar mencakup seluruh halaman */
      background-position: center; /* Posisi gambar di tengah halaman */
    }
    .title {
      text-align: left; /* Mengatur teks "Login" menjadi rata kiri */
      margin-top: 20px; /* Mengatur jarak dari atas */
      margin-left: 280px; /* Mengatur jarak dari kiri */
      padding-bottom: 10px;
    }
    hr {
      margin-left: 40px; /* Mengatur jarak garis dari kiri */
      width: 0rem; /* Mengatur lebar garis sesuai dengan form login */
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="title">Login</div> <!-- Memindahkan teks "Login" ke kiri atas -->

    <div class="content d-flex justify-content-center">
      <form action="backend/login.php" method="post" style="width: 40rem; background-color: #f2f2f2; padding: 20px; border-radius: 10px;"> <!-- Mengubah warna latar belakang form login menjadi abu-abu -->
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username/Email</span>
            <input type="text" class="form-control" placeholder="username/email" required name="username_email" />
            <hr>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" class="form-control" placeholder="password" required name="password" />
          </div>
          <p class="text-center mt-3">
            Don't have an account yet?
            <a href="register/register.html" class="text-decoration-none text-primary">Sign Up</a>
          </p>
        </div>
        <div class="button d-flex justify-content-center">
          <input type="submit" class="btn btn-primary" value="Login" style="  color: #000000;"> <!-- Mengubah warna latar belakang tombol dan teksnya menjadi putih dan hitam -->
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

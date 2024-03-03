<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mountains+of+Christmas&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <style>
        .text {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin: 0%;
        }

        .text h1 {
            color: #000;
            -webkit-text-stroke-color: rgba(23, 10, 14, 0.66);
            font-family: 'Poppins', sans-serif;
            font-size: 6vw; /* Menggunakan ukuran font responsif */
            font-weight: 300;
            line-height: 100%;
            margin: 0%;
        }

        .text h2 {
            color: #000;
            font-family: 'Poppins', sans-serif;
            font-size: 2vw; /* Menggunakan ukuran font responsif */
            font-weight: 300;
            line-height: 0%;
            margin: 0%;
        }

        .text h3 {
            color: #000;
            text-align: right;
            font-family: 'Mountains of Christmas', cursive;
            font-size: 2.5vw; /* Menggunakan ukuran font responsif */
            font-weight: 500;
            line-height: normal;
        }

        .text h4 {
            color: #000;
            font-family: 'Poppins', sans-serif;
            font-size: 3vw; /* Menggunakan ukuran font responsif */
            font-weight: 500;
            line-height: 60%;
        }

        body {
            background: linear-gradient(90deg, #ffffff 0%, #a5cee8 100%);
        }
    </style>
</head>
<body class="container-fluid p-0 m-0">
    <header class="row position-fixed justify-content-between align-items-center py-2 p-0 m-0">
        <img src="assets/logo.png" alt="" class="img-fluid"> <!-- Menambahkan kelas img-fluid untuk membuat gambar responsif -->
    </header>
    <div class="d-flex justify-content-center" style="padding-top: 1em !important">
        <div class="d-flex flex-column flex-md-row gap-5 mt-5 p-0r">
            <img class="w-100 pt-5" style="max-width: 90%;" src="assets/orang.png" alt="">  
            <div class="text mt-5 pt-5">
                <h1 >GU&IM</h1>
                <h2>Gudang Ilmu</h2>
                <br>
                <br>
                <h3>Mari temukan petualangan baru didalam </h3>
                <h4>buku!</h4>
                <br>
                <br>
                <a style="text-decoration: none; color:black; font-weight:bold; font-size:large;" href="login.php">Get Started</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<?php

include 'includes/auth.php';
include '../config/database.php';

$jml_berita = mysqli_num_rows(
    mysqli_query(
        $conn,
        "SELECT * FROM berita"
    )
);

$jml_galeri = mysqli_num_rows(
    mysqli_query(
        $conn,
        "SELECT * FROM galeri"
    )
);

$jml_guru = mysqli_num_rows(
    mysqli_query(
        $conn,
        "SELECT * FROM guru"
    )
);

$jml_ppdb = mysqli_num_rows(
    mysqli_query(
        $conn,
        "SELECT * FROM ppdb"
    )
);

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1">

<title>Dashboard Admin</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark bg-success">

<div class="container">

<span class="navbar-brand">

Dashboard Admin

</span>

<a
href="logout.php"
class="btn btn-light btn-sm">

Logout

</a>

</div>

</nav>

<div class="container mt-4">

<h3>

Selamat Datang,
<?= $_SESSION['admin_nama']; ?>

</h3>

<hr>

<div class="row">

<div class="col-md-3">

<div class="card border-success">

<div class="card-body text-center">

<h2><?= $jml_berita ?></h2>

<p>Berita</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card border-primary">

<div class="card-body text-center">

<h2><?= $jml_galeri ?></h2>

<p>Galeri</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card border-warning">

<div class="card-body text-center">

<h2><?= $jml_guru ?></h2>

<p>Guru</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card border-danger">

<div class="card-body text-center">

<h2><?= $jml_ppdb ?></h2>

<p>PPDB</p>

</div>

</div>

</div>

</div>

<hr>

<div class="row">

<div class="col-md-2 mb-3">

<a
href="berita/index.php"
class="btn btn-success w-100">

Berita

</a>

</div>

<div class="col-md-2 mb-3">

<a
href="galeri/index.php"
class="btn btn-primary w-100">

Galeri

</a>

</div>

<div class="col-md-2 mb-3">

<a
href="guru/index.php"
class="btn btn-warning w-100">

Guru

</a>

</div>

<div class="col-md-2 mb-3">

<a
href="slider/index.php"
class="btn btn-info w-100">

Slider

</a>

</div>

<div class="col-md-2 mb-3">

<a
href="ppdb/index.php"
class="btn btn-danger w-100">

PPDB

</a>

</div>

<div class="col-md-2 mb-3">

<a
href="setting/index.php"
class="btn btn-dark w-100">

Setting

</a>

</div>

</div>

</div>

</body>
</html>
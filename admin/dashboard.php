<?php

session_start();

if(!isset($_SESSION['login'])){

header("Location:login.php");

exit;

}

include '../config/koneksi.php';

?>

<!DOCTYPE html>

<html>

<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark bg-success">

<div class="container">

<span class="navbar-brand">

Dashboard Admin

</span>

<a href="logout.php"
class="btn btn-light">

Logout

</a>

</div>

</nav>

<div class="container py-5">

<h2>

Selamat Datang

<?= $_SESSION['nama'] ?>

</h2>

<div class="row mt-4">

<div class="col-md-3">

<div class="card">

<div class="card-body text-center">

<h1>

<?php

$j=mysqli_query(
$conn,
"SELECT COUNT(*) total
FROM berita"
);

echo mysqli_fetch_assoc($j)['total'];

?>

</h1>

Berita

</div>

</div>

</div>

</div>

</div>

</body>

</html>
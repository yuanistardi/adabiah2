<?php

include_once 'config/database.php';

$setting = mysqli_fetch_assoc(
    mysqli_query(
        $conn,
        "SELECT * FROM setting LIMIT 1"
    )
);

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1">

<title>

<?= $setting['nama_sekolah']; ?>

</title>

<meta
name="description"
content="Website Resmi SMAS Adabiah 2 Padang">

<meta
name="keywords"
content="SMAS Adabiah 2 Padang, SMA Padang, PPDB">

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
rel="stylesheet">

<link
href="assets/css/style.css"
rel="stylesheet">

</head>

<body>
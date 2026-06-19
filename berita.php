<?php

include 'config/koneksi.php';
include 'includes/header.php';

?>

<div class="container py-5">

<h2>

Berita Sekolah

</h2>

<div class="row">

<?php

$data = mysqli_query(
$conn,
"SELECT * FROM berita
ORDER BY id DESC"
);

while($d = mysqli_fetch_assoc($data)){

?>

<div class="col-md-4 mb-4">

<div class="card">

<img
src="uploads/<?= $d['gambar'] ?>"
class="card-img-top">

<div class="card-body">

<h5>

<?= $d['judul'] ?>

</h5>

<a href="#"
class="btn btn-success">

Baca

</a>

</div>

</div>

</div>

<?php } ?>

</div>

</div>

<?php

include 'includes/footer.php';

?>
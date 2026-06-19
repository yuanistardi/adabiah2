<?php

session_start();

include '../config/koneksi.php';

if(isset($_POST['login'])){

$username=$_POST['username'];

$password=md5(
$_POST['password']
);

$query=mysqli_query(
$conn,
"SELECT * FROM users
WHERE username='$username'
AND password='$password'"
);

if(mysqli_num_rows($query)>0){

$data=mysqli_fetch_assoc($query);

$_SESSION['login']=true;

$_SESSION['nama']=$data['nama'];

header(
"Location:dashboard.php"
);

}else{

$error="Login gagal";

}

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Login Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container">

<div class="row justify-content-center">

<div class="col-md-4 mt-5">

<div class="card shadow">

<div class="card-body">

<h3 class="text-center">

Login Admin

</h3>

<?php

if(isset($error)){

echo "<div class='alert alert-danger'>$error</div>";

}

?>

<form method="post">

<input
type="text"
name="username"
class="form-control mb-3"
placeholder="Username">

<input
type="password"
name="password"
class="form-control mb-3"
placeholder="Password">

<button
name="login"
class="btn btn-success w-100">

Login

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</body>

</html>
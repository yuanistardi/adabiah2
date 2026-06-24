<?php

session_start();

include '../config/database.php';

if (isset($_SESSION['admin_login'])) {

    header("Location: dashboard.php");
    exit;
}

$error = '';

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string(
        $conn,
        $_POST['username']
    );

    $password = $_POST['password'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM admins
        WHERE username='$username'
        LIMIT 1"
    );

    if (mysqli_num_rows($query) > 0) {

        $admin = mysqli_fetch_assoc($query);

        if (
            password_verify(
                $password,
                $admin['password']
            )
        ) {

            session_regenerate_id(true);

            $_SESSION['admin_login'] = true;
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_nama'] = $admin['nama'];

            header("Location: dashboard.php");
            exit;
        }
    }

    $error = "Username atau password salah";
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1">

<title>Login Admin</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

<div class="row justify-content-center">

<div class="col-md-4">

<div class="card shadow mt-5">

<div class="card-header bg-success text-white">

<h4 class="mb-0">

Login Administrator

</h4>

</div>

<div class="card-body">

<?php if($error!=''){ ?>

<div class="alert alert-danger">

<?= $error ?>

</div>

<?php } ?>

<form method="POST">

<div class="mb-3">

<label>Username</label>

<input
type="text"
name="username"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>

<button
type="submit"
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
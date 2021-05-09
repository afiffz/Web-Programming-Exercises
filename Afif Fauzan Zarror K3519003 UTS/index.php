<?php 
if (isset($_POST['submit'])){
// mengeset cookie username dari namanya, lama cookie 3 bulan
setcookie("username", $_POST['username'], time()+3*30*24*3600,"/");
// mengeset cookie email dari emailnya, Lama cookie 3 bulan
setcookie("email", $_POST['email'], time()+3*30*24*3600,"/");
// mengeset cookie nyawa default menjadi 5, Lama cookie 3 bulan
setcookie("live", 5, time()+3*30*24*3600,"/");
// mengeset cookie nyawa default menjadi 5, Lama cookie 3 bulan
setcookie("score", 0, time()+3*30*24*3600,"/");
header("Location:game.php");
}

if (isset($_COOKIE['username']) == TRUE){
    header("Location:cek.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UTS Pemweb</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/style.css" rel="stylesheet">
</head>
<body class="text-center">
    <form class="form-signin" method="post" action="index.php">
        <h1 class="h3 mb-3 font-weight-normal">Masuk Dulu</h1>
        <hr>
        <label for="inputnama" class="sr-only">Nama Kamu</label>
        <input type="text" id="masukNama" name="username" class="form-control" placeholder="Nama Kamu" required autofocus>
        <label for="inputemail" class="sr-only">Alamat Email</label>
        <input type="email" id="masukPass" nama="email" class="form-control" placeholder="Alamat Email" required>
        <hr>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Masuk</button>
        <p class="mt-5 mb-3 text-muted">Crafted with ♥ by <i>Afif FZ</i></p>
    </form>
</body>
</html>
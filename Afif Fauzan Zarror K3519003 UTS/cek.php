<?php 
if ($_COOKIE['username'] == FALSE) {
  header("Location:index.php");
}?>

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
<body>
    <div class="container">
      <div class="card text-center mx-auto" style="width: 40%;">
          <div class="card-header bg-secondary" style="color: white;">
            Hallo, <?php echo $_COOKIE['username'] ?>
          </div>
          <div class="card-body">
            <p class="card-text">Selamat datang kembali di permainan ini!!!</p>
            <a href="game.php" class="btn btn-primary">Start Game</a>
          </div>
        </div>
        <br>
        <p class="text-center text-muted">Bukan kamu? <a href="logout.php">Klik Disini</a></p>
    </div>
</body>
</html>
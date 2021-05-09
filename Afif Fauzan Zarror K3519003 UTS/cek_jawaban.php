<?php
if ($_COOKIE['username'] == FALSE) {
  header("Location:index.php");
}
//baca kedua bilangan
function jml($bil1, $bil2){
  $x = $bil1 + $bil2;
  return $x;
}

$bil1   = $_POST['bil1'];
$bil2   = $_POST['bil2'];
$jawab  = $_POST['jawab'];
$c = jml($bil1, $bil2);


//baca operator
if ($jawab == $c){
  $status = "Benar";
  $ucapan = "selamat jawaban anda benar";
  setcookie("score", $_COOKIE['score']+=10, time()+3*30*24*3600,"/");
} else {
  $status = "Salah";
  $ucapan = "sayang jawaban anda salah… tetap semangat ya !!!";
  setcookie("score", $_COOKIE['score']-=2, time()+3*30*24*3600,"/");
  setcookie("live", $_COOKIE['live']-=1, time()+3*30*24*3600,"/");
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
      <div class="card text-center mx-auto" style="width: 60%;">
          <div class="card-header bg-secondary" style="color: white;">
            Jawaban <?php echo $status ?>
          </div>
          <div class="card-body">
            <p class="card-text">Hello <?php echo $_COOKIE['username']." ".$ucapan?>
              <br>Jawaban kamu <?php echo $jawab ?></p>
             <div class="input-group" style="width: 100%;float: right;">
                <input type="text" class="form-control text-center text-muted" value="<?php echo $_COOKIE['username'] ?>" disabled>
                <input type="text" class="form-control text-center text-muted" value="♥ <?php echo $_COOKIE['live'] ?>" disabled>
                <input type="text" class="form-control text-center text-muted" value="<?php echo $_COOKIE['score'] ?>" disabled>
             </div>      
             <br><br><hr>      
            <a href="game.php" class="btn btn-primary">Soal Selanjutnya</a>
          </div>
        </div>
        <!-- Disini footer -->
        <br><p class="text-center text-muted">Crafted with ♥ by <i>Afif FZ</i></p>
    </div>
</body>
</html>
<?php 
$bil1 = rand(0,20);
$bil2 = rand(0,20);
function jml($bil1, $bil2){
  $x = $bil1 + $bil2;
  return $x;
}

if ($_COOKIE['username'] == FALSE) {
  header("Location:index.php");
} if ($_COOKIE['username'] == TRUE & $_COOKIE['live'] <= 0){
  header("Location:end.php");
} else {
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
<body>
    <div class="container">
      <div class="card mx-auto" style="width: 75%;">
          <div class="card-header bg-secondary" style="color: white; text-align: center;">
            Program Tebak Angka
          </div><hr>
          <!-- Box 1 -->
          <div class="card mx-auto" style="width: 90%;">
            <div class="card-header bg-secondary" style="color: white;">
              Ketentuan Game
            </div>
            <div class="card-body text-muted">
             <p>-  Setiap kali jawaban yang diberikan salah, maka lives berkurang satu dan skor berkurang 2  
             <br>- Setiap kali jawaban yang diberikan benar, maka skor bertambah 10  
             <br>- Permainan berakhir (game over) jika livesnya habis</p>  
            </div>
          </div>
          <hr class="mx-auto" style="width: 90%;"> 
          <!-- Box 2 -->
          <div class="card mx-auto" style="width: 90%;">
            <div class="card-body text-muted">
             <div class="input-group" style="width: 100%;float: right;">
                <input type="text" class="form-control text-center text-muted" value="<?php echo $_COOKIE['username'] ?>" disabled>
                <input type="text" class="form-control text-center text-muted" value="♥ <?php echo $_COOKIE['live'] ?>" disabled>
                <input type="text" class="form-control text-center text-muted" value="<?php echo $_COOKIE['score'] ?>" disabled>
             </div>
             <br><br><br>
             <form method="POST" action="cek_jawaban.php">
             <div class="form-group">
              <div class="input-group">
                <input type="hidden" name="bil1" value="<?php echo $bil1?>">
                <input type="hidden" name="bil2" value="<?php echo $bil2?>">
                <input type="text" class="form-control" name="tanya" placeholder="<?php echo $bil1 ."+". $bil2 ?> :" disabled />
              </div>
             </div>
             <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" name="jawab" placeholder="Masukkan Jawabanmu" required/>
              </div>
             </div> 
             <input type="submit" name="cek" class="btn btn-primary" value="Jawab">            
             </form>
            </div>
          </div>
          <hr class="mx-auto" style="width: 90%;"> 
        </div>
        <br><p class="text-center text-muted">Crafted with ♥ by <i>Afif FZ</i></p>
    </div>
</body>
</html>
<?php } ?>
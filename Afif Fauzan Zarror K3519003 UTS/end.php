<?php 
if ($_COOKIE['username'] == FALSE) {
  header("Location:index.php");
} else {
$nama   = $_COOKIE["username"];
$score  = $_COOKIE["score"];

include 'config.php';

$sql = "INSERT INTO tabel (nama, score) VALUES ('$nama', '$score')";

mysqli_query($conn, $sql);

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
      @media screen and (min-width: 1201px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        .container {
          margin-top: 20%;
        } 
      }
      @media screen and (max-width: 1200px) {
          .container {
          margin-top: 60%;
      }      
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/style.css" rel="stylesheet">
</head>
<body><br><br>
    <div class="container">
      <div class="card text-center mx-auto" style="width: 60%;">
          <div class="card-header bg-secondary" style="color: white;">
            Game Over!
          </div>
          <div class="card-body">
            <p class="text-muted" style="text-align: left;">Hello <?php echo $_COOKIE['username'] ?>, sayang permainan sudah selesai. Semoga kali lain bisa lebih baik..
            <br>Score Anda : <?php echo $_COOKIE['score'] ?></p>
            <table class="table">
              <thead>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Score</th>
              </thead>
              <tbody>
                <?php 
                $sql = "SELECT * FROM tabel ORDER BY score DESC limit 10";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  $no = 1;
                  while($row = $result->fetch_assoc()) { ?>
                    <th scope="row"><?php echo $no++?></th>
                    <th scope="row"><?php echo $row['nama']?></th>
                    <th scope="row"><?php echo $row['score']?></th>
              </tbody>
                  <?php }} ?>              
            </table>     
            <br><hr>      
            <a href="logout.php" class="btn btn-primary">Main Lagi</a>
          </div>
        </div>
        <!-- Disini footer -->
        <br><p class="text-center text-muted">Crafted with ♥ by <i>Afif FZ</i></p>
    </div>
</body>
</html>
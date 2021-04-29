<?php

include('cek.php');

echo "<h3>Hallo, ".$_COOKIE['namauser'].", nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</h3>";
?>
<form method="get">
Bilangan Tebakan Anda : <input type="text" name="tebakan">
<input type="submit" name="submit" value="Submit">
</form>

<?php
$bilAcak = $_COOKIE['random'];

if(isset($_GET['tebakan'])){
    $nilaiTebak = $_GET['tebakan'];

    if ($nilaiTebak == $bilAcak){
        echo "<p><h2>Yeay tebakan anda benar</h2></p>";
        setcookie("random", "", time()+3*30*24*3600,"/");
        setcookie("random", rand(0,100), time()+3*30*24*3600,"/");
        echo ("<a href='game.php'>Mulai lagi</a>");
    
    }else if ($nilaiTebak > $bilAcak){
        echo "<p><h3>Nilai tebakan anda terlalu besar :(</h3></p>";
    
    }else if ($nilaiTebak < $bilAcak){
        echo "<p><h3>Nilai tebakan anda terlalu kecil :(</h3></p>";
    }
}
echo ("<p><a href=logout.php>Log Out</a></p>");
?>
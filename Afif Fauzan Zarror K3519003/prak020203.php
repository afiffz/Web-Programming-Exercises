<?php
$baris = 4;
$kolom = 5;
echo "<table border='1'>";
$angka = 1;
for ($i=0 ; $i < $baris; $i++){
    
    echo "<tr>";
    for ($j= 0 ; $j < $kolom; $j++){
        if ($angka % 2 == 0){
            $warna = 'white';
            $sel = "style='background-color: red;'";
            
        } else {
            $warna = 'red';
            $sel = "style='background-color: white;'";
    
        }
        echo "<td <?php $sel ?><font color=$warna> $angka</font> </td>";
        $angka++;
    }
    echo "</tr>";
    
}
echo "</table>";
?>
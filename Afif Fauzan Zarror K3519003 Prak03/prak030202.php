<?php

function hitungDenda($tglHarusKembali, $tglKembali){
    $tgl1 = explode("-", $tglHarusKembali);
    $date1 = $tgl1[2];
    $month1 = $tgl1[1];
    $year1 = $tgl1[0];

    $tgl2 = explode("-", $tglKembali);
    $date2 = $tgl2[2];
    $month2 = $tgl2[1];
    $year2 = $tgl2[0];

    $jd1 = gregoriantojd($month1, $date1, $year1);
    $jd2 = gregoriantojd($month2, $date2, $year2);

    $selisihHari = $jd2 - $jd1;

    $denda = $selisihHari * 3000;

    return $denda;
}

echo "Jadi, Dendanya sebanyak Rp. ".hitungDenda("2021-01-03", "2021-01-05");

?>
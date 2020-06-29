<?php
function pasangan_terbesar($angka){
  // buat string dari $angka
  $string_angka = "$angka";
  $terbesar = substr($string_angka, 0, 2);
  for($i=0; $i <= strlen($string_angka) - 2; $i++){
    $cek = substr($string_angka, $i, 2);
    if($cek > $terbesar) {
      $terbesar = $cek;
    }
  }
  return $terbesar;
}

var_dump((int)pasangan_terbesar(641573));


?>
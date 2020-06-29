<?php
function skor_terbesar($arr){
  $output = [];
  foreach ($arr as $key => $skor_siswa) {
    $cekKelas = $skor_siswa["kelas"];
    if(isset($output[$cekKelas]) == 0){
      $output[$cekKelas] = $skor_siswa;
    } else {
      if($output[$cekKelas]["nilai"] < $skor_siswa["nilai"]){
        $output[$cekKelas] = $skor_siswa;
      }
    }
  }
  return $output;
}

$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

echo "<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";

?>
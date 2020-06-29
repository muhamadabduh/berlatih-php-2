<?php
/**
 * PSEUDOCODE
 * 0. function menerima parameter angka integer, validasi parameter harus integer
 * 0.a integer di-increment +1
 * 1. buat variabel $stringAngka = angka diubah jadi string (type casting)
 * 2. buat variabel $reversed = strrev($stringAngka) 
 * 3. buat variabel boolean $isPalindrome = false pengecekan apakah angka yang sedang dilooping merupakan palindrome, kalo iya ganti $isPalindrome  jadi true
 * 4. looping while (isPalindrome == false) maka indeks terus increment + 1
 * 5. looping akan berhenti ketika isPalindrome true, munculkan angka
 */
function isPalindrome($string){
  return strrev($string) == $string;
}

function palindrome_angka($angka){
  // validasi
  if(is_int($angka) == false){
    echo "parameter bukan integer <br>";
    return null;
  }
  $angka++;
  while(isPalindrome("$angka") == false){
    $angka++;
  }
  echo "<br>";
  return $angka;

}

// TEST CASES
// var_dump(palindrome_angka(8)); // 9
// var_dump(palindrome_angka(10)); // 11
// var_dump(palindrome_angka(117)); // 121
// var_dump(palindrome_angka(175)); // 181
// var_dump(palindrome_angka(1000)); // 1001

$arr = ["name" => "Abduh"];
// echo isset($arr["name"]); // true
var_dump(isset($arr["kelas"])); // false
?>
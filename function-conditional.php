<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php 

        echo "<h3> Soal No 1 Greetings </h3>";
        /* 
            Soal No 1
            Greetings
            Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

            contoh: greetings("abduh");
            Output: "Halo Abduh, Selamat Datang di Sanbercode!"
        */

        // Code function di sini
        function greetings($name) {
          echo "Halo $name, Selamat Datang di Sanbercode!<br>";
        }

        // Hapus komentar untuk menjalankan code!
        greetings("Bagas");
        greetings("Wahyu");
        greetings("Abdul");

        echo "<br>";
        
        echo "<h3>Soal No 2 Reverse String</h3>";
        /* 
            Soal No 2
            Reverse String
            Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
            Function reverseString menerima satu parameter berupa string.
            NB: DILARANG menggunakan built-in function PHP seperti strrev(), HANYA gunakan LOOPING!

            reverseString("abdul");
            Output: ludba

            // pseudo code
            // 0. function menerima parameter string, 
            // 1. deklarasikan string penampung
            // 2. lakukan looping sebanyak panjang dari string, looping dilakukan dari indeks paling terakhir
            // 3. di dalam looping, string penampung di-concat dengan karakter pada indeks yang sedang di looping
            // 4. looping selesai, variabel penampung sudah siap
            
        */
 
        // Code function di sini 
        function reverseString($string){
          $tampung = "";
          // $cek = "abc";
          // $concat = $tampung . $cek;
          // indeks terakhir string => strlen($string) - 1
          for($i= strlen($string) - 1; $i >= 0; $i--){
            $tampung = "$tampung$string[$i]";
          }
          // echo $tampung;
          echo "<br>";
          return $tampung;
        }

        // Hapus komentar di bawah ini untuk jalankan Code
        echo reverseString("abduh");
        echo reverseString("Sanbercode");
        echo reverseString("We Are Sanbers Developers");
        echo "<br>";

        echo "<h3>Soal No 3 Palindrome </h3>";
        /* 
            Soal No 3 
            Palindrome
            Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
            Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
            Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
            NB: 
            Contoh: 
            palindrome("katak") =>  output : true
            palindrome("jambu") => output : false
            NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!
            
            Pseudocode:
            0. buat function menerima parameter string
            1. gunakan function reverseString untk membalikkan string, tampung ke variabel reversed
            2. gunakan kondisional if bandingkan string dengan reversed
            3. jika sama return true
            4. jika tidak sama return false
        */


        // Code function di sini
        function palindrome($string){
          $reversed = reverseString($string);
          if($string == $reversed){
            // echo "true";
            return true;
          } else {
            // echo "false";
            return false;
          } 
        }
        // Hapus komentar di bawah ini untuk jalankan code
        echo "civic is palindome ? " . palindrome("civic") ; // true
        echo "nababan is palindrome ? ". palindrome("nababan") ; // true
        palindrome("jambaban"); // false
        palindrome("racecar"); // true
    ?>
</body>
</html>
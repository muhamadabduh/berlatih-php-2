<?php

function papan_catur($ukuran){
  $output = "";
  for ($i=0; $i < $ukuran; $i++){
    $baris = "";
    for($j=0; $j<$ukuran; $j++ ){
      if($i%2 == 0){
        $baris .= "# ";
      } else {
        if($j == $ukuran-1){
          $baris .= "";
        } else {
          $baris .= "&nbsp#";
        }
      }
    }
    $output .= $baris. "<br>";
  }
  return $output;
}

echo "papan catur 5: <br>" . papan_catur(5);
echo "papan catur 8: <br>" . papan_catur(8);
echo "papan catur 4: <br>" .papan_catur(4);

?>
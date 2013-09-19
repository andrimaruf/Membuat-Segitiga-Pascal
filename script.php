<?php
/* Membuat segitiga pascal dengan php */
$banyaknya = 13;
for($i=1;$i<=$banyaknya;$i++) {
 for($j=1;$j<=$i;$j++){
  if($j==1 || $j==$i){
   $value[$i][$j] = 1;
  }else{
   $value[$i][$j] = $value[$i-1][$j] + $value[$i-1][$j-1];
  }
  $pascal .= $value[$i][$j]." ";
 }
 $pascal .= "\n";
}
echo "<center><pre>\n".$pascal."</pre></center>";
?>

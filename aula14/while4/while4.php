<?php
 $a = 0;
 $b = 1;
 $c = 1;
 $i = 1;
 while ($i < 100) {
 $c = $a + $b;
 $a = $b;
 $b = $c;
 print $c."<br>";
 $i++;
 	}

 ?>
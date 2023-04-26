<?php
$n=$_GET['n'];
$summ=0;
for ($i =1; $i<=$n;$i++){
    $summ+=$i;
}

echo $summ;

?>
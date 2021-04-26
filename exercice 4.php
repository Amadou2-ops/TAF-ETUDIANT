<?php
$a=10;
$b=5;
$c=8;
$delta= ($b**2)-(4*$a*$c);
echo"{$a}X2+{$b}X+{$c}=0 <br><br>";
if($delta > 0){
    $x1 = (-$b + sqrt($delta))/2*$a;
    $x2 = (-$b - sqrt($delta))/2*$a;
    echo "les solutions sont {$x1} et {$x2} <br>";
}elseif($delta < 0){
    $x0 = -$b/2*$a;
    echo "la solution est {$x0}<br>";
}else{
    echo "Pas de solution <br>";
}

?>
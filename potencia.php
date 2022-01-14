<?php


function post($x, $y){
    if (!is_int($y)) {
        return 'Número não é inteiro';
    
    }
    if ($y < 0){
        $x = 1 / $x;
        $y = $y * -1;
    }
    $total = 1;
    for ($i = 0; $i < $y; $i++)
    {
        $total = $total * $x;
    
    }
    return $total;
}
$nro1 = (int)$_POST['num1'];
$nro2 = (int)$_POST['num2'];
$pot = post($nro1, $nro2);
 echo $pot;




?>
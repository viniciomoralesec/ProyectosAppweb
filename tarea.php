
<?php

$Item       = 'Notebook ';
$Model      = 'Dell 3140';
$TransDate  = 01/01/2024;
$Qty        = 2;
$Amount     = 990.808080;
$Posting    = true;
$Puntaje    = 5;
$Arreglo    = array();
$Arreglo    = [1,2,3,4,5,6,7,8,9,10];

echo ($Qty * $Amount);

echo($Item . $Model);

if($Puntaje >7)
echo('Aprobado');
else
echo('Reprobado');


while ($i < count($Arreglo))
{
    echo '<div class="card-opening"><b>'.$Arreglo[$i]. '</b></div>';
    $i++;
}

?>



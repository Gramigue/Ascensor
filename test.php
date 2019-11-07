<?php
$gente = [];

array_push($gente, 75);
array_push($gente, 60);
array_push($gente, 55);
array_push($gente, 45);

print_r($gente);

function chicharra($arr)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i ++) {
        $sum += $arr[$i];
    }

    return $sum;
}

echo chicharra($gente);

?>    
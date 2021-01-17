<?php
function addCar($car)
{
    $carTxt = '';
    foreach ($car as $key => $value) {
        if ($key !== "accept")
            $carTxt .= $key . ":" . $value . "&";
    }
    $carTxt = mb_substr($carTxt, 0, -1);
    $fd = fopen("cars.txt", "a+") or die("Error");
    $carsTxt = '';
    $check = false;


    while (!feof($fd)) {
        $carsTxt .= fgets($fd);

        if (strpos($carsTxt, $carTxt) !== false) {
            $check = true;
            break;
        }
    }
    if (!$check) {
        fputs($fd, $carTxt . "\n");
    }

    fclose($fd);
}
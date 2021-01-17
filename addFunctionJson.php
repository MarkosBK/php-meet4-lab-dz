<?php
function addCar($car)
{
    unset($car["accept"]);
    $cars = array();
    if (file_exists("cars.json")) {
        $str = file_get_contents("cars.json");
        $cars = json_decode($str, true);
    }

    if (!in_array($car, $cars)) {
        $car["photo"] = "images/" . $_FILES["photo"]["name"];
        array_push($cars, $car);
        $str = json_encode($cars);
        file_put_contents("cars.json", $str);
    }

    if ($_FILES && $_FILES["photo"]["error"] == UPLOAD_ERR_OK) {
        $name = $_FILES["photo"]["name"];
        move_uploaded_file($_FILES["photo"]["tmp_name"], "images/" . $name);
    }
}
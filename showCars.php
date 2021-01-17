<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container mx-auto d-flex flex-wrap">
        <?php
        if (file_exists("cars.json")) {
            $str = file_get_contents("cars.json");
            $cars = json_decode($str, true);
        }
        foreach ($cars as $value) {
        ?>
        <div class="card m-2  shadow" style="width: 18rem;">
            <img src="<?echo $value['photo'] ?>" class="card-img-top" alt="...">
            <ul class="list-group list-group-flush">
                <?php
                    foreach ($value as $key => $value1) {
                        if ($key !== "photo") {
                    ?>
                <li class="list-group-item">
                    <?echo $key.": ".$value1?>
                </li>
                <?php
                        }
                    }
                    ?>
            </ul>
        </div>
        <?php
        }
        ?>
    </div>
</body>

</html>
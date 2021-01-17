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
    <form method="POST" class="container mx-auto" enctype="multipart/form-data">
        <div class="form-group">
            <label for="model">Модель:</label>
            <input type="text" name="model" class="form-control">
        </div>
        <div class="form-group">
            <label for="manufacturer">Производитель:</label>
            <input type="text" name="manufacturer" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Цена:</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Изображение</label>
            <input type="file" name="photo" class="form-control">
        </div>

        <input type="submit" name="accept" value="Add" class="btn btn-dark">
    </form>
    <?
    if(isset($_POST["accept"])){
        include_once("addFunctionJson.php");
        addCar($_POST);
        unset($_POST);
        unset($_FILES);
    }
    ?>
</body>

</html>
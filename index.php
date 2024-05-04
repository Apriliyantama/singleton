<?php
require_once('ViewSepatu.php');

$read = ViewSepatu::shoe();
$data = $read->readSepatu();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shoes List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/adidas.css' rel='stylesheet'>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mt-5">Shoes Product</h1>
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th scope="col"><i class="gg-adidas"></i></th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Color</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1;?>
                <?php foreach ($data as $key => $value) : ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $value['Brand'] ?></td>
                        <td><?= $value['Model'] ?></td>
                        <td><?= $value['Color'] ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
?>
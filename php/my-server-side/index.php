<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family: sans-serif;">
    <h3>My Page</h3>


    <?php

        $products = [
            [
                "id" => 1,
                "name" => "Apple",
                "price" => 400,
            ],
            [
                "id" => 2,
                "name" => "Orange",
                "price" => 500,
            ],
            [
                "id" => 3,
                "name" => "Mango",
                "price" => 300,
            ],
            [
                "id" => 4,
                "name" => "Banana",
                "price" => 700,
            ],
        ]

    ?>

    <?php foreach($products as $product) : ?>

        <div>
            <h3>
                <?= $product["name"] ?>
            </h3>
            <p>
                <?= $product["price"] ?>
            </p>
            <hr>
        </div>

    <?php endforeach; ?>

    <!-- <pre>
        <?php print_r($products)  ?>
    </pre> -->

</body>
</html>
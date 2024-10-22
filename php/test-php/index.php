<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Hi I'm php";
    ?>
    <p>
        <?= 'San gyi dr' ?>
    </p>

    <!-- <?php if (false) { ?>
        <h2>It is true</h2>
    <?php } else { ?>
        <h2>It is false</h2>
    <?php } ?> -->
    <!-- 
    <?php if (false) : ?>
        <h2>It is true</h2>
    <?php else : ?>
        <h2>It is fales</h2>
    <?php endif; ?> -->

    <?php $fruits = array("Apple", "Banana", "Orange", "Grapes", "Mango");
    ?>

    <ul>
        <?php foreach($fruits as $fruit) : ?>
            <li>
                <?=$fruit ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- <pre>
        <?php print_r($fruits); ?>
    </pre> -->



</body>

</html>
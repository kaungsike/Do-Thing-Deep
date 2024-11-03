<?php

$con = mysqli_connect("localhost", 'me', 'root', 'wad_shop');

// var_dump($con);

if (!$con) {
    die(mysqli_connect_errno());
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Edit Product</h2>

    <?php

    $id = $_GET['row_id'];

    $sql = "SELECT * FROM products WHERE id=$id";
    
    $query = mysqli_query($con,$sql);

    $row = mysqli_fetch_assoc($query);


    ?>

    <form action="./update.php" method="post">
    <input type="text" hidden name="id" id="" value="<?=$row['id'] ?>" required>
        <input type="text" name="name" id="" value="<?=$row['name'] ?>" required>
        <input type="number" name="price" id="" value="<?=$row['price'] ?>"  required>
        <input type="number" name="stock" id="" value="<?=$row['stock'] ?>"  required>
        <button type="submit">Create</button>
    </form>

</body>

</html>
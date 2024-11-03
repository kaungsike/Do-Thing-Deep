<?php

echo "<pre>";


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
    <title>SQL & PHP Shop</title>
</head>

<body>
    <h2>Create Product</h2>
    <form action="save.php" method="post">
        <input type="text" name="name" id="" required>
        <input type="number" name="price" id="" required>
        <input type="number" name="stock" id="" required>
        <button type="submit">Create</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM products';


            $query = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($query)) :
            ?>
            <tr>
                <td><?=$row['id'] ?></td>
                <td><?=$row['name'] ?></td>
                <td><?=$row['price'] ?></td>
                <td><?=$row['stock'] ?></td>
                <td><?=$row['created_at'] ?></td>
                <td><a href="">Update</a> | <a href="./delete.php?row_id=<?=$row['id'] ?>">Delete</a></td>
            </tr>

            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>
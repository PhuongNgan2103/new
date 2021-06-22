<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Product Detail</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Sku</th>
        <th>Category</th>
        <th>Color</th>
        <th>Img</th>
        <th>Size</th>
        <th>Price</th>
        <th>Currency</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <?php if (isset($product)): ?>
            <tr>
                <td><?php echo $product->getId() ?></td>
                <td><?php echo $product->getName() ?></td>
                <td><?php echo $product->getSku() ?></td>
                <td><?php echo $product->getCategoryID() ?></td>
                <td><?php echo $product->getColor() ?></td>
                <td><img src="<?php echo $product->getImg() ?>"></td>
                <td><?php echo $product->getSize() ?></td>
                <td><?php echo $product->getPrice() ?></td>
                <td><?php echo $product->getCurrency() ?></td>
                <td><?php echo $product->getDescription() ?></td>
                <td><?php echo $product->getStatusId() ?></td>
                <td>
                    <button class="btn btn-outline-secondary"><a href="../../index.php" class="text-decoration-none">Close</a></button>
                </td>
            </tr>
    <?php endif; ?>
</table>
</body>
</html>
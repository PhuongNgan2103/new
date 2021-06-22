<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <?php if (!empty($product)): ?>
        <fieldset>
            <legend>Edit item</legend>
            Id: <input type="number" name="id" value="<?php echo $product[0]['id'] ?>">
            Name: <input type="text" name="name" value="<?php echo $product[0]['name'] ?>">
            Sku: <input type="text" name="sku" value="<?php echo $product[0]['sku'] ?>">
            Category: <input type="text" name="categoryId" value="<?php echo $product[0]['CategoryId'] ?>">
            Color: <input type="text" name="color" value="<?php echo $product[0]['color'] ?>">
            Img: <input type="text" name="img" value="<?php echo $product[0]['img'] ?>">
            Size: <input type="text" name="size" value="<?php echo $product[0]['size'] ?>">
            Price: <input type="text" name="price" value="<?php echo $product[0]['price'] ?>">
            Currency: <input type="text" name="currency" value="<?php echo $product[0]['currency'] ?>">
            Description: <input type="text" name="description" value="<?php echo $product[0]['description'] ?>">
            StatusId: <input type="text" name="statusId" value="<?php echo $product[0]['statusId'] ?>">
            Create_at: <input type="text" name="create_at" value="<?php echo $product[0]['create_at'] ?>">
            <button>Save</button>
        </fieldset>
    <?php endif; ?>
</form>
</body>
</html>
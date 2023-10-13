<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    <?php include 'css/styles.css';
    ?>
    </style>

    <meta name="description"
        content="Explore a collection of essential products including furniture, home appliances, photo albums, and more. Always with great prices.">
    <title>TR-PLP</title>
</head>

<body>
    <main>
        <h3 class="product-title">Office Essentials</h3>
        <?php include 'components/sortBy.php'; ?>

        <div class="product-listing" id="productListing">
            <?php
      $productData = file_get_contents('data/product.json');
      $products = json_decode($productData, true);

      require_once "components/productTemplate.php";

      renderProduct($products['product_arr']);
      ?>
        </div>
    </main>

    <script src="filters/productSortByFilter.js"></script>
</body>

</html>
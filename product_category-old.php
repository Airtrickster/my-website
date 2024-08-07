<?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
    include "db_conn.php";
    include "check_item.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="lib/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="icon" href="images/icon.png">
    <title>On your feet | Products | <?php echo $_GET["category"] ?> Shoes <?php $_GET["gender"] ?></title>
</head>
<body>

    <?php include "header.php"; ?>
    
    <section class="product-category">
        <h1 class="heading"> <span><?php echo $_GET["category"] ?> Shoes </span><?php echo $_GET["gender"] ?></h1>
        <div class="box-container">
    
            <?php
                $productstmt = mysqli_prepare($link, "SELECT * FROM products WHERE category = ? AND gender = ?");
                mysqli_stmt_bind_param($productstmt, "ss", $_GET["category"], $_GET["gender"]);
                mysqli_stmt_execute($productstmt);
                $productResults = mysqli_stmt_get_result($productstmt);         

                while ($productRow = mysqli_fetch_array($productResults)) {
                    echo '<a class="desc" href="product_details.php?product_id=' . $productRow["product_id"] . '"> 
                        <div class="box">
                        <div class="image">
                        <img src="images/products/'. $productRow["image"] . '" alt="'.$productRow["name"].'">
                        </div>
                        <div class="content">
                        <h3>' . $productRow["name"] . '</h3>
                        <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">Php ' . $productRow["price"] . '</div>
                        </div>
                        </div>
                    </a>';
                }
            ?>
    
        </div>
    </section>

    <?php include "footer.php"; ?>


    <script src="js/script.js"></script>

</body>
</html>
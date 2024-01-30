<?php
require 'database.php';



//de sql query
$sql = "SELECT * FROM products";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Mijn website</title>
</head>

<body>
    <?php include "header.html";
            ?>
    <main>
        <div class="center">
            
            <!-- foreach -->
            <?php foreach ($products as $product) : ?>
                <div>
                    <a href="product-detail.php?id=<?php echo $product["id"] ?>"><img src="images/<?php echo $product["image"] ?>"></a>
                    <p><?php echo $product["naam"] ?></p>
                </div>
            <? endforeach ?>
            <!-- endforeach -->

        </div>
    </main>
    <?php include "footer.html";
    ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
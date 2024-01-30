<?php
 
require 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id = $id";

$result = mysqli_query($conn,$sql);
//zolang een rij gevuld kan worden wordt de loop uitgevoerd
$product = mysqli_fetch_assoc($result);
?>

<?php echo $product['naam'];?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details Pagina</title>
</head>
<body>
  <?php include "header.html";
  ?>
</body>
</html>

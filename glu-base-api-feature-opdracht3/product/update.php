<?php
// required headers
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// database connection will be here
// include database and object files
include_once '../config/database.php';
include_once '../objects/product.php';
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
// initialize object
$product = new Product($db);
// create product here
// query products
// $insertArray = [
// "naam" => "Mountain Dew",
// "beschrijving" => "lekker drankje USA",
// "prijs" => 2.49// ];
echo "<pre>";
var_dump($_POST);
$updateArray = $_POST;
$result = $product->update($updateArray);?>



<form action="http://localhost/glu-base-api-feature-opdracht3-uitleg/product/update.php" method="post">
    <input type="text" name="naam" id="naam" placeholder="Naam product">
    <input type="text" name="beschrijving" id="beschrijving" placeholder="Beschrijving product">
    <input type="number" name="prijs" id="prijs" placeholder="prijs product">
    <input type="id" name="id" id="id" placeholder="id">
    <input type="submit" value="Verzenden">
</form>


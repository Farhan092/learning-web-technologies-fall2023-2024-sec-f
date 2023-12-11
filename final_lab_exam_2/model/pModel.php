<?php
    require_once('db.php');
    function seeProduct(){
        $con = getConnection();
        $sql = "select * from products";
        $result = mysqli_query($con, $sql);
        $products = [];     
        while($product = mysqli_fetch_assoc($result)){
            array_push($products, $product);
        }
        return $products;
    }

    function addProduct($name, $price, $brand)
    {
        $con = getConnection();
    
        $sql = "INSERT INTO products (name, price,brand)
                VALUES ('$name', '$price', '$brand')";
    
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

?>
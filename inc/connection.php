<?php
    $baseUrl = "http://localhost/perfume/";
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "perfume";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sqlProduct = "SELECT * FROM products"; 
    $resultProducts = mysqli_query($conn, $sqlProduct);
    if (!$resultProducts) {
        die("Query failed: " . mysqli_error($conn));
    }
    $productArray = array();
    if (mysqli_num_rows($resultProducts) > 0) {
        while($rowProduct = mysqli_fetch_assoc($resultProducts)) {
            
            $productArray[$rowProduct['id']] = $rowProduct;
           
        }
    }
?>
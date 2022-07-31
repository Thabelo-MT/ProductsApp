<?php
$con = mysqli_connect("localhost","root","","productsapp");
$response = array();
if($con){
    $sql = "SELECT * FROM products";
    $results = mysqli_query($con, $sql);

    if($results){
        header("Content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($results)){
            $response[$i]['id'] = $row['id'];
            $response[$i]['Name'] = $row['Name'];
            $response[$i]['Price'] = $row['Price'];
            $response[$i]['Description'] = $row['Description'];
            $response[$i]['quantity_on_stock'] = $row['quantity_on_stock'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
    else {
        echo "Database failed to connect";
    }
}
?>
<?php

include 'conn.php';
if ( $_SERVER["REQUEST_METHOD"] == "POST") {
    $un = $_POST['uname'];
    $pw = $_POST['psw'];
    // $query = mysqli_query( $conn, "SELECT * FROM 'admin'" );
    $sql = "SELECT * FROM login WHERE username = '".$un."' AND pass = '".$pw."' ";
    $result = mysqli_query($conn, $sql);
    // $result_can = mysqli_query( $conn, $query );
    $row = mysqli_fetch_array( $result );

    if ( $row["usertype"] == "admin" ) {
        header( "Location: product.php" );
    } 
    elseif($row['usertype'] == "user") {
        header( "Location: home.php" );
    }else{
        echo "Username or Password incorrect";
    }
}
?>
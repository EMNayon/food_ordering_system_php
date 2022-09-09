<?php

include 'conn.php';
$name = $comment = "";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    if(!empty($name) && !empty($comment)){
       $sql = "INSERT INTO comments ( name , comment) VALUES ('$name' , '$comment')";
        mysqli_query($conn , $sql);
        header('location:index.php');
    }
    else{
        ?>

       <script>
			window.alert('Please select a product');
			window.location.href='index.php';
		</script>
		<?php
    }
}
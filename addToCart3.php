<?php
include('dbconfig.php');
    $query="INSERT INTO BOOK_DETAILS(IMG_NAME,AUTH_NAME,Price) VALUES ('Organic Chemistry','Arihant',25)";
      $result=mysqli_query($connection,$query);
      if(!$result){
        echo "Error:".mysqli_error($connection);
      }  
      else{
        echo "Your Item is added to the cart";
        header("location:products.php");
         } 
  ?>
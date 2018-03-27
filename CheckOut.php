<!DOCTYPE html>
<head>
  <title>CheckOut Order</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").toggle(1000);
        alert("Your Order has been placed.Thank You!!. Please visit Our site Again.")
    });
   
});
</script>
</head>
<body>
  <?php
include('dbconfig.php');
$sql="SELECT * FROM BOOK_DETAILS";
$result=mysqli_query($connection,$sql);
  ?>
  <style>
table {
    border-collapse: collapse;
    border: 1px solid black;
} 

th,td {
    border: 1px solid black;
}
table.d {
    table-layout: fixed;
    width: 100%;    
}
#wrapper {
  width: 100%;
  height: 400px;
  display: flex;
  align-items: center;
  justify-content: center;

}

button {
  background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
button:hover{
  background-color: #3e8e41;
}
a {
  background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
a:hover{
  background-color: #3e8e41;
}



  </style>
<table class="d">
  <tr>
    <th>Book Name</th>
    <th>Author Name</th>
    <th>Book Price</th>
  </tr>
  <?php
while($row=mysqli_fetch_assoc($result)){
  ?>
  <tr>
    <td><?php echo $row['img_name'] ?></td>
    <td><?php echo $row['auth_name'] ?></td>
    <td><?php echo $row['Price'] ?></td>
  </tr>
  
  <?php } ?> 

</table>
<div id="wrapper">
  <button type="button">Place the Order</button>&nbsp;
  <a href="products.php" class="btn" >Go back</a><br/>
</div>
<p>Total:<?php  
$result = mysqli_query($connection,"SELECT SUM(Price) AS value_sum FROM BOOK_DETAILS"); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];
echo "$".$sum;

              
?></p>
</body>
</html>
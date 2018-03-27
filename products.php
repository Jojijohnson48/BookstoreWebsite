<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/productStyle.css" type="text/css" rel="stylesheet"/>
<style>
* {box-sizing: border-box;
padding: 0;}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: #E65100;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

.container1 {
    position: relative;
    width: 100%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container1:hover .image {
  opacity: 0.3;
}

.container1:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
  /*padding: 16px 32px;*/
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
  <?php
  include('dbconfig.php');
  ?>

<div class="header">

 <div class="navigator">
    <h1><img id="leaf" src="http://ww1.prweb.com/prfiles/2012/04/18/9412361/gI_59571_deepershopping_logo_cropped_graphic_only.jpg"/>Treeshelf Book Store</h1>
    
    <p>User Name: JOJI JOHNSON&nbsp;</p><img id="leaf1" src="../images/myPic.jpg"/>
  </div>
  <div class="container">
    <ul class="nav-menu">
     <li><img id="leaf2" src="../images/cart.jpg"/>&nbsp;</li>
     <li><input type="text" id="shopCart" ></li>
     <li><a href="index.php">LOG OUT</a></li>
     <li><a href="CheckOut.php">BUY ITEMS</a></li>
     <li><form method="post" action="search.php"><input type="search" id="bhai"><input type="submit" value="Books" id="bhai"></form></li>
    </ul>
  </div>
 
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <div class="container1">
    <img src="../images/pic1.jpg" style="width:100%" class="image" />
    <div class="middle">
    <div class="text" ><a href="addToCart.php" >ADD TO CART($20)</a></div>
  </div>
</div>
  

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <div class="container1">
  <img src="../images/pic2.jpg" style="width:100%" class="image"/>
  <div class="middle">
    <div class="text" ><a href="addToCart2.php">ADD TO CART($30)</a></div>
  </div>
</div>
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <div class="container1">
    <img src="../images/pic3.jpg" style="width:100%" class="image"/>
    <div class="middle">
    <div class="text" ><a href="addToCart3.php">ADD TO CART($25)</a></div>
  </div>
</div>
  
</div>
</div><br/><br/>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>


<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

 
<div class="footer">
  <div class="container">
    <h3>&copy; Developed by JOJI JOHNSON</h3><br/>
    <span>Open Source Programming</span>
  </div>
</div>


<script>
var slideIndex = 1,ctr=0;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
/*function func1()
{
    <?php
    $query="INSERT INTO BOOK_DETAILS(IMG_NAME,AUTH_NAME,IMG) VALUES ('Problems In Physics','I.E.IRODOV',LOAD_FILE('../images/pic1.jpg')";
      $result=mysqli_query($connection,$query);
      if(!$result){
        echo "Error:".mysqli_error();
      }   
  ?>
}
function func2()
{
    <?php
    $query="INSERT INTO BOOK_DETAILS(IMG_NAME,AUTH_NAME,IMG) VALUES ('Web Design','Raghu Raghav',LOAD_FILE('../images/pic2.jpg')";
      $result=mysqli_query($connection,$query);
      if(!$result){
        echo "Error:".mysqli_error();
      }   
  ?>
}
function func3()
{
    <?php
    $query="INSERT INTO BOOK_DETAILS(IMG_NAME,AUTH_NAME,IMG) VALUES ('Organic','I.E.IRODOV',LOAD_FILE('../images/pic1.jpg')";
      $result=mysqli_query($connection,$query);
      if(!$result){
        echo "Error:".mysqli_error();
      }   
  ?>
}*/
</script>

</body>
</html> 

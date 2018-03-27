<!DOCTYPE html>
<html>
<head>
	<title>Online book shopping</title>
	 <!--<link href="../css/IndexStyle.css" type="text/css" rel="stylesheet"/>-->
	 
	 
	 <script type="text/javascript">
	 	function myfunction()
	 	{
	 		alert("PLEASE LOGIN TO ENJOY OUR SERVICES");
	 	}
</script>
</head>
<body>
<style>

body {
  margin: 0;
  padding: 0;  
}
.header {
	
	background-color: #333;
	margin:0;

}

h1 {
	
  color: #fff;
  font-family: 'Covered By Your Grace', sans-serif;
  font-size: 40px;
  line-height: 76px;
  margin: 0;
  position: relative;
  text-align: center;
  top: 20%;
}
.navigator {
	padding: 0;
	margin: 0;

}

#leaf {
	height: 30px;

}
#leaf1 {
	height: 400px;
	width: 100%;
}
a {
	color:#fff;
	text-decoration: none;
}
.btn a {
	color: black;

}


.btn {
	list-style: disk;
}
.col {
	margin-top: 10px;
	margin-left: 80px;
	margin-bottom: 10px;
	margin-right: 70px;
	background-color: #fff;
	border:2px solid;
	padding-top:0;
	padding-bottom: 0;
	padding-right:10px;
	padding-left:5px;

}

.col li {
	font-family: 'Raleway', sans-serif;
	font-size: 20px;
	
}
.col h2 {
	text-align: center;
	text-decoration: underline;
}

div.jumbotron {
	margin: 0;
	background: url('http://getwallpapers.com/wallpaper/full/1/b/a/166020.jpg');
	/*background: url(http://wallpaperus.org/wallpapers/03/122/books-1920x1080-wallpaper-1711426.jpg);*/
	height:800px;width: 100%;
	background-position:center center;
	background-repeat: no-repeat;
}

.nav-menu li{
    list-style: none;
    padding: 10px;
    font-size: 15px;
    line-height: 10px;
    font-family: 'Tahoma', sans-serif;
    margin: 0 auto;
    display: inline-block; 
    text-align:center;
    font-weight: 500;
}
.nav-menu a:hover {
	padding: 10px;
	background-color: #777;
}
.main {
	position: relative;
	top:180px;
	text-align: center;
}
.main h1 {
	color: #333;
  	font-family: 'Raleway', sans-serif;
  	font-weight: 600;
  	font-size: 70px;
  	margin-top: 0;
  	margin-bottom: 80px;
  	text-transform: uppercase;
}
.btn-main {
	top:20px;
	background-color: #333;
	color: #fff;
	font-family: 'Raleway', sans-serif;
	font-size: 20px;
	padding:10px;
	text-transform:uppercase;
	letter-spacing: 1.3px;
}
.btn-main:hover {
	background-color:#C70039;
}
.supporting{
	display: table;

	
}
.container {
	display: table-cell;
}
/* Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-style: 'Raleway',sans-serif;
    font-size: 17px;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
.clearfix {
	clear: both;
}
.book {
	background-color:#C70039 ;
	text-align: center;
	padding:10px;
}
.supporting {
	font-family: 'Raleway', sans-serif;
}
.col1 {
	margin-top: 10px;
	margin-left: 150px;
	margin-bottom: 10px;
	margin-right: 100px;
	background-color: #fff;
	border:2px solid;
	padding-top:0;
	padding-bottom: 0;
	padding-right:10px;
	padding-left:5px;

}

.col1 h2 {
	text-align: center;
	text-decoration: underline;
}

.book:hover {
	background-color:#3e8e41;
}
p {
	text-align: center;
}
.footer {
	background-color: #F0F3F4  ;
	padding: 50px 30px;

}
.footer p {
  font-family: 'Raleway', sans-serif;
  text-transform: uppercase;
  font-size: 15px;
  display: sticky;
}
.footer .container h3 {
	font-size: 15px;
	font-family: 'Raleway', sans-serif;
	float: right;
}
#login a {
	float: right;
}
	 </style>


	<div class="header">
	<div class="navigator">
		<h1><img id="leaf" src="http://ww1.prweb.com/prfiles/2012/04/18/9412361/gI_59571_deepershopping_logo_cropped_graphic_only.jpg"/>Treeshelf Book Store</h1>
	</div>
	<div class="container">
		<ul class="nav-menu">
			<li><a href="#" onclick="myfunction()">ABOUT</a></li>
			<li><a href="#">HOME</a></li>
			<li><a href="#">TYPES</a></li>
			<li><a href="#" onclick="myfunction()">CATEGORIES</a><li>
			<li><form method="post" action="search.php"><input type="search"><input type="submit" value="Search"></form></li>
			<li><a href="SignIn.php" ID="login">LOGIN</li>
		</ul>
	</div>


		<div class="jumbotron">
		<div class="main">
				<h1>The best online book website</h2>
				<div class="dropdown">
  					<button class="dropbtn" >GET STARTED</button>
 				     <div class="dropdown-content">
    					<a href="#" onclick="myfunction()">Academic</a>
    					<a href="#">Action & Adventure</a>
    					<a href="#">Business, Investing and Management</a>
    					<a href="#">Children's Books</a>
    					<a href="#">Comics & Manga</a>
    					<a href="#">Computing & Internet</a>
    					
  					</div>
				</div>
			</div>
		</div>
	
	
<div class="supporting">
		<div class="container">
		   <div class="col">
			<h2>ACADEMIC</h2>
					<img id="leaf1" src="https://images.gr-assets.com/books/1298417570l/22463.jpg"/>
					<p><strong>ON THE ORIGIN OF SPECIES</strong> by <strong>CHARLES DARWIN</strong></p>
					<div class="book"><a href="#" onclick="myfunction()">BUY NOW</a></div>
				</div>
		</div>

		<div class="container">
			<div class="col">
			<h2>ENTRANCE EXAM PREPARATION</h2>
			 	<img id="leaf1" src="http://www.shrilaxmistores.com/images/master-resource-book-in-physics-for-jee-main-entrance-examination.jpg"/>
			 	<p><strong>JEE PHYSICS</strong> by <strong>ARIHANT</strong></p>
			 	<div class="book"><a href="#" onclick="myfunction()">BUY NOW</a></div>
			 </div>
		</div>
		<div class="container">
			<div class="col">
			<h2>COMPUTING AND INTERNET</h2>
			 	<img id="leaf1" src="http://imshopping.rediff.com/imgchkbooks/200-250/books/pixs/16/9788131705216.jpg"/>
			 	<p><strong>LET US C++</strong> by <strong>SANKET KHOTARI</strong></p>
			 	<div class="book"><a href="#" onclick="myfunction()">BUY NOW</a></div>
			 </div>
		</div>
	</div>

	<div class="supporting">
		<div class="container">
		   <div class="col1">
			<h2>COMICS AND MANGA</h2>
					<img id="leaf1" src="https://s3.amazonaws.com/images.viz.com/products/1421591170.jpg"/>
					<p><strong>ONE PIECE</strong> by <strong>EIICHIRO ODA</strong></p>
					<div class="book"><a href="#" onclick="myfunction()">BUY NOW</a></div>
				</div>
		</div>

		<div class="container">
			<div class="col1">
			<h2>HISTORY & POLITICS</h2>
			 	<img id="leaf1" src="http://www.ibtauris.com/-/media/Images/Book%20Covers/20th%20century%20history%20c%201900%20%20to%20c%202000/9781848851108.ashx"/>
			 	<p><strong>ART AND POLITICS</strong> by <strong>CLAUDIA MESCH</strong></p>
			 	<div class="book"><a href="#" onclick="myfunction()">BUY NOW</a></div>
			 </div>
		</div>
		<div class="container">
			<div class="col1">
			<h2>CHILDREN'S BOOKS</h2>
			 	<img id="leaf1" src="https://images.gr-assets.com/books/1465539139l/188572.jpg"/>
			 	<p><strong>SHERLOCK HOLMES</strong> by <strong>ARTHUR CONAN DOYLE</strong></p>
			 	<div class="book"><a href="#" onclick="myfunction()">BUY NOW</a></div>
			 </div>
		</div>
	</div>

</div>

<div class="footer">
	<div class="container">
		<h3>&copy; Developed by JOJI JOHNSON</h3><br/>
		<span>Open Source Programming</span>
	</div>
</div>
</body>
</html>




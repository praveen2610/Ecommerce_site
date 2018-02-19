

<?php
session_start();
if(!isset($_SESSION['user'])){
   header("Location:Login.html");
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}
.row:after {
    content: "";
    clear: both;
    display: block;
}
[class*="col-"] {
    float: left;
    padding: 15px
	padding-top:200px;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
html {
    font-family: "Lucida Sans", sans-serif;
}
a:link, a:visited {
    display: block;
    width: 120px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #98bf21;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
}

a:hover, a:active {
    background-color: #7A991A;
}
.wrapper {
    outline: 2px dotted blue; /** optional **/

    /** Top padding so that initially, the content is below the header **/
    padding-top: 100px;

}
.header {
    background-color: #9933cc;
    color: #ffffff;
    padding: 50px;
	text-align:center;
	width: 400px;
	height:50px
	margin:0 auto;
	position: fixed;
	float:center
	padding-bottom:100;
	padding-right:100;

}
.header_ulist
{

    list-style-type:none;
    margin: 0;
    padding: 50px;
	padding-left:500px;
	padding-bottom:0px;
    overflow: hidden;
}
 .header_lilist
{
float:left;
}

}
.menu ul {
    list-style-type:;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 7px;
    background-color :#33b5e5;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: #0099cc;
}
footer {
    background-color:#98bf21;
    color:white;
    clear:both;
    text-align:center;
    padding:5px; 
}
ul.products li {
    width: 200px;
    display: inline-block;
    vertical-align: top;
    *display: inline;
    *zoom: 1;
	background-color: #ffffff;
}
</style>
</head>
<body>
<div class="wrapper">
<header>
<ul class=header>
<p>"COMP344 Assignment 1 2015" Praveen Mohan 43930379</p> 
</ul>
<ul class=header_ulist>
  
  <li class=header_lilist><a href="#home">Home</a></li>
  <li class=header_lilist><a href="#news">News</a></li>
  <li class=header_lilist><a href="#contact">Contact</a></li>
  <li class=header_lilist><a href="#about">About</a></li>
  <li class=header_lilist><a href="Logout.php"> log out</a>
</ul>
</header>
</div>
 

<div class="row">

<div class="col-3 menu">
<ul>
<li>Shoes</li>
<li>bags</li>
<li>shirts</li>
<li>Jeans</li>
</ul>
</div>

<div class="col-9">
<ul class="products">
    <li>
        <a href="#">
            <img src="images.jpg">
            <h4>Logo Shirt (Gray)</h4>
            <p>$20.00</p>
        </a>
    </li>
    <li>
        <a href="#">
            <img src="download.jpg">
            <h4>Mike the Frog Shirt (Orange)</h4>
            <p>$25.00</p>
        </a>
    </li>
	 <li>
        <a href="#">
            <img src="images.jpg">
            <h4>Logo Shirt (Gray)</h4>
            <p>$20.00</p>
        </a>
    </li>
	 <li>
        <a href="#">
            <img src="burger.jpg">
            <h4>chicken burger</h4>
            <p>$20.00</p>
        </a>
    </li>
	 <li>
        <a href="#">
            <img src="images.jpg">
            <h4>Logo Shirt (Gray)</h4>
            <p>$20.00</p>
        </a>
    </li>
	 <li>
       <a href="#">
            <img src="burger.jpg">
            <h4>beef burger</h4>
            <p>$20.00</p>
        </a>
        
    </li>
	 <li>
        <a href="#">
            <img src="images.jpg">
            <h4>Logo Shirt (Gray)</h4>
            <p>$20.00</p>
        </a>
    </li>
	 <li>
        <a href="#">
            <img src="burger.jpg">
            <h4>baecon burger</h4>
            <p>$20.00</p>
        </a>    
        </li>
	 <li>
        <a href="#">
            <img src="images.jpg">
            <h4>Logo Shirt (Gray)</h4>
            <p>$20.00</p>
        </a>
    </li>
	 <li>
        <a href="#">
            <img src="images.jpg">
            <h4>Logo Shirt (Gray)</h4>
            <p>$20.00</p>
        </a>
    </li>
	 <li>
        <a href="#">
            <img src="images.jpg">
            <h4>Logo Shirt (Gray)</h4>
            <p>$20.00</p>
        </a>
    </li>
</ul>
</div>

</div>
<footer>
Prohi
</footer>
</body>
</html>

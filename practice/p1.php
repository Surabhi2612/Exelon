<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
html{
	font-size:62.5%;
}

a{
	text-decoration:none;
}
.header{
	background:#000;
	padding:1%;
}
.logo{
	background:#FFF;
	width:3rem;
	height:3rem;
	left:2%;
	position:relative;
}
.navbar{
	position:relative;
	left:30%;
	top:-1rem;
	word-spacing:0.5rem;
}
.navbar a{
	color:#999;
	border-right:0.2rem solid #666;
	padding:0 2.5rem;
	font-size:2.0rem;
}
.navbar a:hover{
	color:#FFF;
}
.new{
	background:#F00;
	border-radius:40%;
	position:relative;
	left:-1%;
	padding-left:0.5rem;
	padding-right:0.5rem;
	padding-bottom:0.5rem;
	padding-top:0.5rem;
	border-right:none;
}
.signup{
	background:#36F;
	position:relative;
	border-radius:10%;
	border-spacing:1rem;
	padding-left:1rem;
	padding-right:1rem;
	padding-bottom:0.5rem;
	padding-top:0.5rem;
	left:18%;
}
.checkbtn{
	font-size:3rem;
	color:#FFF;
	float:right;
	cursor:pointer;
	display:none;
}
#check{
	display:none;
}
.firstpart{
	background-image:url(images/pic1.jpg);
	position:relative;
	height:60rem;
	width:100%;
	
}

.text1{
	color:#999;
	position:relative;
	left:10rem;
	top:8rem;
	font-size:1.4rem;
}
.text2{
	color:#FFF;
	position:relative;
	left:10rem;
	top:10rem;
	font-size:3rem;
}
.firstpart2{
	position:relative;
	left:65%;
	height:10rem;
	width:32rem;
}
.text3{
	color:#CCC;
	font-size:1.8rem;
}
.firstpart3{
}
.btn1{
	color:#FFF;
	background-color:#333;
	border:none;
	border-radius:1rem;
	font-size:2rem;
	position:relative;
	left:65%;
	top:-1rem;
	padding:1% 1%;
}
.btn1:hover{
	background-color:#00F;
}
.middlepart1{
	position:relative;
	top:-31rem;
	left:10%;
	height:5rem;
	width:5%;
	background-color:#000;
	border-right:0.3rem solid #333;
	border-bottom:0.3rem solid #333;
	text-align:center;
}

.middlepart2{
	position:relative;
	top:-36.3rem;
	left:15.2%;
	height:5rem;
	width:75%;
	background-color:#000;
	border-bottom:0.3rem solid #333;
}
.middlepart3{
	position:relative;
	top:-36.3rem;
	left:10%;
	height:60rem;
	width:80%;
	background-color:#000;
	
}
.middlepart3_1{
	position:relative;
	top:10%;
	left:8%;
	height:90%;
	width:60%;
	background-color:#333;
}
.img_container{
	position:relative;
	top:15%;
	left:5%;
	height:70%;
	width:90%;
	background-color:#FFF;
}
.btns{
	position:relative;
	font-size:2rem;
	top:-50rem;
	left:2%;
	color:#CCC;
	background-color:#000;
	border:none;
}
.btnl{
	position:relative;
	font-size:2rem;
	top:-35rem;
	left:2%;
	color:#CCC;
	background-color:#000;
	border:none;
}
.btntl{
	position:relative;
	font-size:2rem;
	top:-88rem;
	left:10%;
	color:#CCC;
	background-color:#000;
	border:none;
}
.btntr{
	position:relative;
	font-size:2rem;
	top:-90rem;
	left:45%;
	color:#CCC;
	background-color:#000;
	border:none;
}
.btntopl{
	position:relative;
	top:2rem;
	left:2%;
	color:#FFF;
	background-color:#000;
	border:none;
	font-size:2rem;
}
.btntotr{
	position:relative;
	top:1.5rem;
	left:75%;
	color:#FFF;
	background-color:#00F;
	border:none;
	height:3rem;
	width:5rem;
	border-radius:10%;
}
.tobc{
	position:relative;
	top:2rem;
	left:40%;
	color:#FFF;
	font-size:2rem;
}
.btntotr1{
	position:relative;
	top:2rem;
	left:75%;
	color:#FFF;
	background-color:#000;
	border:none;
	font-size:2rem;
}
.right1b{
	position:relative;
	top:-87rem;
	left:67%;
	color:#FFF;
	background-color:#000;
	border:none;
	font-size:2rem;
	padding:0 1.5rem;
	
}
.right1t{
	position:relative;
	top:-90rem;
	left:75%;
	color:#FFF;
	font-size:1.5rem;
}
.footer{
	background:#FFF;
	height:50rem;
	width:80%;
	position:relative;
	top:-30rem;
	left:10%;
}
.footert{
	position:relative;
	left:35%;
	color:#000;
	font-size:1.5rem;
}
.footerb{
	position:relative;
	top:10%;
	left:-10%;
	padding:1.5rem;
	background-color:#FFF;
	color:#999;
	border:none;
	font-size:2.5rem;
	text-align:center;
}
.imglbl{
	position:relative;
	top:12%;
	left:5%;
	color:#CCC;
	font-size:1rem;
}
.logoimg{
	background-color:#000;
	color:#00C;
	border:none;
	font-size:3rem;
}
.productimg{
	width:60%;
	height:60%;
	position:relative;
	top:20%;
	left:20%;
	
}

@media(max-width:998px){
	html{
		font-size:55%;
	}
}
@media(max-width:768px){
	html{
		font-size:45%;
}
.checkbtn{
		display:block;
	}
	.navbar{
		position:fixed;
		width:100%;
		height:1rem;
		background:#000;
		text-align:center;
		top:8rem;
		left:0;
	}
	
}
</style>
</head>

<body>
<div class="header">
<input type="checkbox" id="check" />
    <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>
	<div class="logo">
    	<button type="button" class="logoimg"><i class="fa-solid fa-sun"></i></button>
    </div>
	<nav class="navbar">
		<a href="#">Home</a>
  	 	<a href="#">Products</a>
   		<a href="#">Showcase</a>
    	<a href="#">Discover</a>
  		<a href="#" class="new">new</a>
    	<a href="#" class="signup">signup</a>
	</nav>
</div>
<div class="firstpart">
	<div class="firstpart1">
    	<label class="text1">INTRODUCING THE LATEST INNOVATION</label><br />
        <label class="text2">Create all your product<br />mockups <b>easily</b></label>
    </div>
    <div class="firstpart2">
        <label class="text3">Force is a service for creating all your mockup needs. You just drag and drop and the mockup is immediately ready to use.</label>
    </div>
    <div class="firstpart3">
    	<button type="button" class="btn1">Try for free</button>
        <button type="button" class="btn1">Get app</button>
    </div>
</div>
<div class="middlepart1">
	<button type="button" class="logoimg"><i class="fa-solid fa-sun"></i></button>
</div>
<div class="middlepart2">
    	<button type="button" class="btntopl"><i class="fa fa-bars" aria-hidden="true"></i></button>
        <label class="tobc">Untitled project</label>
         <button type="button" class="btntotr1"><i class="fa fa-user" aria-hidden="true"></i></button>
    	<button type="button" class="btntotr">Share</button>
</div>
<div class="middlepart3">
	<div class="middlepart3_1">
    	 <label class="imglbl">Untitled project</label>
    	<div class="img_container">
        	<img src="images/product image.jpg" class="productimg" />
   	    </div>
    </div>
     <div class="lefttop">
     	<button type="button" class="btns"><i class="fa fa-paper-plane" aria-hidden="true"></i></button><br /><br /><br />
     	<button type="button" class="btns"><i class="fa fa-plus-square" aria-hidden="true"></i></button><br /><br /><br />
     	<button type="button" class="btns"><i class="fa fa-text-width" aria-hidden="true"></i></button><br /><br /><br />
   		<button type="button" class="btns"><i class="fa fa-camera" aria-hidden="true"></i></button><br /><br /><br />
    	<button type="button" class="btns"><i class="fa fa-video-camera" aria-hidden="true"></i></button><br /><br /><br />
     	<button type="button" class="btns"><i class="fa fa-upload" aria-hidden="true"></i></button><br /><br /><br />
    	<button type="button" class="btns"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></button>
    </div>
    <div class="leftbottom">
    	<button type="button" class="btnl"><i class="fa fa-cog" aria-hidden="true"></i></button><br /><br /><br />
    	<button type="button" class="btnl"><i class="fa fa-cog" aria-hidden="true"></i></button>
    </div>
     <div class="topleft">
    	<button type="button" class="btntl"><i class="fa fa-undo" aria-hidden="true"></i></button>
    	<button type="button" class="btntl"><i class="fa fa-redo" aria-hidden="true"></i></button>
    </div>
     <div class="topright">
     	<input type="range" class="btntr" />
    	<button type="button" class="btntr"><i class="fa fa-expand" aria-hidden="true"></i></button>
    	<button type="button" class="btntr"><i class="fa fa-window-restore" aria-hidden="true"></i></button>
        <button type="button" class="btntr"><i class="fa fa-trash" aria-hidden="true"></i></button>
    </div>
   
    <div class="right2>
    	 <label class="imglbl">Untitled project</label>
 	</div>
</div>

<div class="footer">
	<label class="footert">other brands have trusted our service</label>
    <button type="button" class="footerb">Bolt</button>
    <button type="button" class="footerb"><i class="fa-brands fa-microsoft"></i>Microsoft</button>
    <button type="button" class="footerb"><i class="fa-brands fa-dropbox"></i>Dropbox</button>
     <button type="button" class="footerb">fiverr.</button>
    <button type="button" class="footerb"><i class="fa-brands fa-squarespace"></i>SQUARESPACE</button>
   
</div>
</body>
</html>
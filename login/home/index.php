<!DOCTYPE html>
<html>
<head>
	<title>HOOPLA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	
</head>
<style>
	*{
		margin:0;
		padding:0;
	}

	a{
		font-size:24px
	}
	.spasia{
		width:100%;
		height:75px;
	}
	.badan{
		width:90%;
		background-color:rgba(248,248,248);
		height: auto;
		border-radius:5px;
		box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.2), 0 3px 3px 0 rgba(0, 0, 0, 0.2);
		overflow:hidden;
		z-index:9999999;
	}
</style>
<body>
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login.php?pesan=belum_login");
	}
	?>
	<div id="main">

	<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
		<button class="w3-bar-item w3-button w3-large"
		onclick="w3_close()"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
		</svg></button>
		<a href="../home/index.php" type="button" class="list-group-item list-group-item-action" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
			<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
		</svg> Home</a>
		<a href="../home/views.php" type="button" class="list-group-item list-group-item-action"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-view-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z"/>
			</svg> Views</a>
		<a href="../home/buy.php" type="button" class="list-group-item list-group-item-action"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
			</svg> Buy</a>
		<a href="../home/about.php" type="button" class="list-group-item list-group-item-action"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
			</svg> About</a>
	</div>

	<nav class="navbar" style="height:75px; background-color: rgba(30,30,30); color:white; display: flex;s">
	<div class="container-fluid">
			<div class="justify-content-start" style="">
				<div class="">
					<button id="openNav" type="button" class="btn btn-light" onclick="w3_open()">&#9776;</button>
				</div>
			</div>
				<div class="justify-content-center" style="text-align:center; font-size:20px; "><b>Home</b></div>
			<div class="justify-content-end">
				<div class="">
					<a href="../login.php" class="btn btn-light" role="button" aria-pressed="true" >Logout</a>
				</div>
			</div>
		</div>
	</div>
    </nav>
	<div class="spasia"></div>
	<div class="container">
		<img src="../gambar/Asset 1.svg" class="img-fluid" alt="Responsive image">
	</div>
	<div align="center">
		<div class="badan">
			<div class="d-flex justify-content-between">
				<div class="row " style=" margin:30px;">
				<div class="col-sm-4">
					<div class="card" style="width: 320px;">
						<img src="../gambar/undraw_web_shopping_dd4l.png" class="card-img-top" alt="sjop">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				</div>
				<div class="row " style=" margin:30px;">
				<div class="col-sm-4">
					<div class="card" style="width: 320px;">
						<img src="../gambar/undraw_web_shopping_dd4l.png" class="card-img-top" alt="sjop">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				</div>
				<div class="row " style=" margin:30px;">
				<div class="col-sm-4">
					<div class="card" style="width: 320px;">
						<img src="../gambar/undraw_web_shopping_dd4l.png" class="card-img-top" alt="sjop">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				</div>
			</div>
			<div class=""></div>
					<h1>Lorem Ipsum Dolor ...</h1>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam eos, saepe aliquam ad natus 
					ab minima accusamus nesciunt tempore inventore quos consectetur eaque id corporis rerum neque 
					ipsum magni consequatur!</p>
			</div>
		</div>
	</div>

	<div class="spasia"></div> 
		
	<div class="footer" style="height:150px; background-color: rgba(30,30,30); color:white;">
		<p style="text-align:center; padding-top:20px;">| Footer |</p><br>
		<div align="center">
		<a href="" style="text-align:center;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-app" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M11 2H5a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z"/>
			</svg></i>Ig  </a> |
		<a href="" style="text-align:center;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-app" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M11 2H5a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z"/>
			</svg></i>Fb  </a> |
		<a href="" style="text-align:center;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-app" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M11 2H5a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z"/>
			</svg></i>Tw  </a>
		</div>
	</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.width = "12%";
  document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>


</body>
</html>
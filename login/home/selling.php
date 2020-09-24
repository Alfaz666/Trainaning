<?php 
	include('../koneksi.php');
	if(isset($_POST['tombol']))
	{
		$temp = $_FILES['gambar']['tmp_name'];
		$name = rand(0,9999).$_FILES['gambar']['name'];
		$size = $_FILES['gambar']['size'];
		$type = $_FILES['gambar']['type'];
		$keterangan = $_POST['keterangan'];
		$folder = "files/";
		if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png' or $type == 'image/jpeg')) {
			move_uploaded_file($temp, $folder . $name);
			mysqli_query($koneksi, "insert into tb_gambar (gambar,keterangan,tipe_gambar,ukuran_gambar) values ('$name','$keterangan','$type','$size')");
			header('location:views.php');
		}else{
			echo "<script>alert('Gagal mengUpload')</script>";
			//header('location:selling.php');
		}
	}
	?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selling</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    *{
		margin:0;
        padding:0;
        font-family: Arial;
    }
    body{
        background-image: url("../gambar/bg-buy.svg");
        background-size:cover;
    }
    a{
		font-size:24px
    }
	.container-fluid {
		background-color: rgba(248,248,248 );
		padding:15px;
		position:fixed;
	}
	#pilih{
		border:1px solid rgba(200, 200, 200);
		border-radius:4px;
		width:100%;
		padding:5px;
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
        <a href="../home/selling.php" type="button" class="list-group-item list-group-item-action"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
			<path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
		    </svg> Selling</a>
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

	<div class="container-fluid">
		<div class="row">
			<div class="col-6 col-md-4">
				<div class="float-left">
					<button id="openNav" type="button" class="btn btn-light" onclick="w3_open()">&#9776;</button>
				</div>
			</div>
				<div class="col-6 col-md-4" style="text-align:center; font-size:20px;"><b>Selling</b></div>
			<div class="col-6 col-md-4">
				<div class="float-right">
					<a href="../login.php" class="btn btn-light" role="button" aria-pressed="true" >Logout</a>
				</div>
			</div>
		</div>
	</div>
	<div class="spasi" style="height:100px;"></div>
	<div class="container shadow p-3 mb-5 bg-white rounded" style="background-color:white; padding:10px; border-radius:5px;">
		<h1 style="text-align:center;"><b>Jual Disini</b></h1>
		<form method="post" action="" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<td>Gambar</td>
					<td>:</td>
					<td><input type="file" name="gambar" id="pilih"/></td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td>:</td>
					<td><textarea class="form-control" name="keterangan"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="tombol" class="btn btn-primary" data-toggle="modal" data-target="#myModal"/></td>
				</tr>
			</table>
        </form>
	</div>
	
	
	<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">View</button> -->

	<!-- OPEN MODAL ! ! !-->
	<!--<div class="modal fade" id="mymodal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body" align="center">
					<div class="spasi" style="height:20px;"></div>
					<svg width="7em" height="7em" color="red" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
					<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
					</svg>
					<div class="spasi" style="height:20px;"></div>
					<p style="font-size:24px; text-align:center;">Gagal Upload!</p>
				</div>
				<div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                </div>
			</div>
		</div>
	</div>-->

<script>
// MODAL OPEN MENU BAR 
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
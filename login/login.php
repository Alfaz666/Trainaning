<!DOCTYPE html>
<html>
<head>
	<title>HOOPLA</title>
	<link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">
</head>
<style>
	*{
		margin: 0;
		padding: 0;
		font-family: Arial;
	}
	body{
		background-image:url(gambar/back.png);
		background-size:cover;
		background-attachment: fixed;
	}
	.spasi{
		width:100%;
		height:100px;
	}
	.spasi2{
		width:100%;
		height:25px;
	}
	.atas{
		font-size:28px;
		width:200px;
		height:50px;
		background-color:white;
		text-align:center;
		padding:7px;
		border:1px solid grey;
		border-radius:3px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
	}
	.login{
		width: 250px;
		height:250px;
		background-color:white;
		text-align:center;
		padding:10px;
		border:1px solid grey;
		border-radius:3px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
	}
	.dalam{
		margin:7px;
		padding:2px;
	}
	.dalam-reg{
		margin:15px;
		padding:15px;
	}
	.tombol{
		width:120px;
		cursor:pointer;
		background-color:white;
		color:black;
		padding:5px;
		margin-top:10px;
		border-radius:5px;
		border: 1px solid grey;
	}
	#username{
		margin-top:5px;
		padding:5px;
	}
	#password{
		margin-top:5px;
		padding:5px;
	}
	.bak{
    float: right;
    font-size: 36px;
    margin: 10px;
    padding: 10px;
    border-radius: 7px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
	}
	.bak:hover{
    cursor: pointer;
    background-color: rgba(255, 255, 255, 0.8);
    background-attachment: fixed;
    border: 1px solid black;
	border-radius: 7px;
	}
</style>
<body>
	<div class="bak">
        <a href="index.html" style="text-decoration:none; color:black;">Back</a>
    </div>
	<div class="spasi"></div>
	<div class="spasi"></div>
	<div align="center">
		<div class="atas" >
		<h2>Login</h2>
		</div>
	</div>
	<div class="spasi2"></div>
	<div align="center">
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "Login gagal! username dan password salah!";
			}else if($_GET['pesan'] == "logout"){
				echo "Anda telah berhasil logout";
			}else if($_GET['pesan'] == "belum_login"){
				echo "Anda harus login untuk mengakses halaman yang dituju!";
			}
		}
		?>
	</div>
	<div class="spasi2"></div>
	<div align="center">
		<form method="post" action="cek_login.php">
		<div align="center">
			<div class="login">
				
				<form>
					<div class="dalam">
						<label><i class="fas fa-user"></i> Username :</label><br>
						<input type="text" name="username" id="username" />
					</div>
					<div class="dalam">
						<label><i class="fas fa-lock"></i> Password :</label><br>
						<input type="password" name="password" id="password" />
					</div>			
					<div class="dalam1">
						<input type="submit" value="Login" class="tombol">
					</div>
					<div class="dalam-reg">
						<a href="register.php" style="text-decoration:none; color:blue; ">Register</a>
					</div>
				</form>
			</div>		
		</div>
		</form>
	</div>
</body>
</html>
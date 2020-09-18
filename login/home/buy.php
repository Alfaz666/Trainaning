<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Views</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
	.container-fluid{
		background-color: rgba(248,248,248 );
		padding:15px;
		position:fixed;
	}
	a{
		font-size:24px
    }
    .container{
        background-color: rgba(250,250,250);
    }
    .cen{
        text-align:center;
    }
    .spasi{
        height: 100px;
    }
    .pass{
        width: 825px;
    }
    .kol1{
        width: 200px;
    }
    .kol2{
        width: 10px;
        text-align: right;
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

	<div class="container-fluid">
		<div class="row">
			<div class="col-6 col-md-4">
				<div class="float-left">
					<button id="openNav" type="button" class="btn btn-light" onclick="w3_open()">&#9776;</button>
				</div>
			</div>
				<div class="col-6 col-md-4" style="text-align:center; font-size:20px;"><b>Buy</b></div>
			<div class="col-6 col-md-4">
				<div class="float-right">
					<a href="../login.php" class="btn btn-light" role="button" aria-pressed="true" >Logout</a>
				</div>
			</div>
		</div>
	</div>
    <div class="spasi"></div>
    <div class="container" style="padding:30px; border:1px solid grey; box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.2), 0 3px 3px 0 rgba(0, 0, 0, 0.2); border-radius: 7px;">
        <h1 style="text-align: center;">Form Pembelian</h1>
        <table class="table">
            <tr>
                <th class="kol1"><p>Pilih Barang</p></th>
                <th class="kol2">:</th>
                <th><form>
                        <label for="harga" class="pass">
                            <select id="harga" name="harga" class="form-control">
                                <option id="harga1" name="harga1" value="500" onclick="drop();">satu</option>
                                <option id="harga2" name="harga2" value="400" onclick="drop();">dua</option>
                                <option id="harga3" name="harga3" value="300" onclick="drop();">tiga</option>
                                <option id="harga4" name="harga4" value="200" onclick="drop();">empat</option>
                            </select>
                        </label>
                    </form>
                </th>
            </tr>
            <tr>
                <th><p>Harga Barang</p></th>
                <th>:</th>
                <th><input id="cul" class="form-control" readonly></tr>
            <tr>
            <tr>
                <th><p>Jumlah Barang</p></th>
                <th class="kol2">:</th>
                <th><input  name="jumlah_barang" id="jumlah_barang" class="form-control" onkeyup="sum();"></th>
            </tr>
                <th><p>Total</p></th>
                <th class="kol2">:</th>
                <th><input name="total" id="total" class="form-control" readonly></th>
            </tr>
            <tr>
                <th><p>Jumlah Uang</p></th>
                <th class="kol2">:</th>
                <th><input name="jumlah_uang" id="jumlah_uang" class="form-control" onkeyup="sum();"></th>
            </tr>
            <tr>
                <th><p>Kembalian</p></th>
                <th class="kol2">:</th>
                <th><input name="kembalian" id="kembalian" class="form-control" readonly></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th style="float: right;"><button type="submit" name="submit" id="beli" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="klik()">Submit</button></th>
            </tr>
        </table>
    </div>

                  



<script>
function drop(){
    var satu = 500;
        document.getElementById('cul').value = satu;
}

function sum() {
    var a = document.getElementById('harga').value;
    var b = document.getElementById('jumlah_barang').value;
    var total= parseInt(a) * parseInt(b);
    var c = document.getElementById('jumlah_uang').value;
    var d = parseInt(c) - total;
        if (!isNaN(total)) {
            document.getElementById('total').value = total;
        } 
        if (!isNaN(d) ) {
            document.getElementById('kembalian').value = d;
        } 
}
function klik() {
    d = document.getElementById('kembalian').value;
        if ( d >= 0){
            alert("Transaksi Berhasil");
        } else if ( d < 0){
            alert("Uang Kurang : " + d);
        } 
        else {
            alert("Transaksi Gagal");
        }
}



// MODAL OPEN MENU BAR 
function w3_open() {
document.getElementById("mySidebar").style.width = "12%";
document.getElementById("mySidebar").style.display = "block";
document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
document.getElementById("mySidebar").style.display = "none";
document.getElementById("openNav").style.display = "inline-block";
}
</script>
</body>
</html>
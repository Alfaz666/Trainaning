<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">
</head>
<style>
    *{
    margin: 0%;
    padding: 0%;
    font-family: Arial;
}
    body{
    background-image: url(gambar/back.png);
    background-attachment: fixed;
    background-size: cover;
}
.mid{
    float:center;
    width:50%;
    background-color:white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
    border-radius:7px;
}
.spasis{
    height:30px;
}
.spasis2{
    height:260px;
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
button{
    cursor:pointer;
    width:120px;
    padding:5px;
    background-color:white;
    border: 1px solid grey;
    border-radius:5px;
}
</style>
<body>
<div class="bak">
    <a href="index.html" style="text-decoration:none; color:black;">Back</a>
</div>
<div class="spasis2"> </div> 
    <div align="center">
        <div class="mid">  
        <div class="spasis"> </div> 
        <h2 align="center" style="padding:10px; font-size:36px;">Register</h2>
        <div align="center">
        <form action="simpan-pendaftaran.php" method="post">
        <table style="padding:10px;">
            <tr>
                <td style="padding:10px;"><label><i class="fas fa-user"></i><b> Username  :</b></label></td><td style="padding:10px;"><input type="text" name="username" placeholder="Masukan Username" style="width:300px; padding:5px;"/></td>
            </tr>
            <tr>
                <td style="padding:10px;"><label><i class="fas fa-lock"></i><b> Password  :</b></label></td><td style="padding:10px;"><input type="password" name="password" placeholder="Masukan Password"style="width:300px; padding:5px;"/></td>
            </tr>
        </table>
            <button type="submit" name="submit">Register</button>
        </form>
        <div class="spasis"></div>
        <a href="login.php" style="text-decoration:none; color:blue;">Login</a></div>
        <div class="spasis"> </div>
        </div>
    </div>
</body>
</html>
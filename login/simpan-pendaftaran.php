<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .bak{
        background-color:brown;
        color:white;
        font-size:52px;
    }
</style>
<body>
    <div align="center">
        <div class="bak">
            <?php
            //Include file koneksi ke database
            include "koneksi.php";

            //menerima nilai dari kiriman form pendaftaran
            $username=$_POST["username"];
            $password=$_POST["password"]; 

            //Query input menginput data kedalam tabel anggota
            $sql="INSERT into form (username,password) values
                    ('$username','$password')";

            //Mengeksekusi/menjalankan query diatas	
            $hasil=mysqli_query($koneksi,$sql);

            //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                echo "Berhasil simpan data anggota";
                exit;
            }
            else {
                echo "Gagal simpan data anggota";
                exit;
            }  

            ?>
        </div>
    </div>
</body>
</html>



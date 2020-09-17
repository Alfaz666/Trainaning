<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <html>
<head>
    <title>Tutorial Menghitung Total Bayar dengan Script PHP</title>
</head>
<body>
    <h3>Form Hitung Total Bayar</h3>
    <form method="POST">
        <table border="1px solid black">
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>$500</td>
            </tr>
            <tr>
                <td>Jumlah Item Barang</td>
                <td>:</td>
                <td>
                <input type="number" name="qty" value="0">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="hitung" value="Hitung">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <hr />
    <h3>Hasil :</h3>
    <!-- Coding PHP hitung total bayar ketik disini -->
    <?php
    if(isset($_POST['hitung'])){
        $harga    = 500;
        $qty      = $_POST['qty'];
        $total    = $harga*$qty;
        if ($total == 0){
            echo "$total";
        }else{
            echo "transaksi gagal";
        }
    }
?>
</body>
</html>
</body>
</html>
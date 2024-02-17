<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> S wirasabastore</title>
    <style type="text/css">
        .satu {
        font-style: italic;
        font-size: 13px;
        }
     </style>
</head>
<body>
    <div style="text-align: center">
        <img src="1.png" width="200" height="100">
    </div> 
 
    <script src="js/alert.js"></script>
    
    <!--Start (Form Kasir)-->
    <form name="belanja" method="post" action="php/output.php">
        <p align="center" class="satu"> Form Kasir</p>
        <table width="500" border="0" align="center" cellpadding="3" cellspacing="1">
            <tr>
                <td height="30">Nama Barang</td>
                <td>:</td>
                <td>
                    <input name="nama" type="text" size="30" maxlength="30">
                </td>
                </tr>
            <tr>
                <td height="30">Harga Barang</td>
                <td>:</td>
                <td>
                    <input name="harga" type="text" size="30" maxlength="30">
                </td>
            </tr>
            <tr>
                <td height="30">Jumlah Beli</td>
                <td>:</td>
                <td>
                    <input name="jumlah" type="text" size="30" maxlength="30">
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" name="bayar" value="Bayar">
                    <input type="reset" name="restart" value="Restart">
                </td>
            </tr>
        </table>
    </form>
    <!--End (Form Kasir)-->
 
    <div class="satu" style="text-align: center">
        <p>Barang Yang Sudah Dibeli Tidak Bisa Dikembalikan/Ditukarkan </p>
    </div>
 

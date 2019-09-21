<html>
<head>
    <title>Data Barang</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/position.css">
    <link rel="stylesheet" href="css/button.css">
</head>

<body>    
    <form class="body"action="add.php" method="post" name="form1">
    <h1>Input Data Barang</h1>
        <table width="25%">
            <tr> 
                <td align="left">Kode:</td>
                <td class="form"><input  type="text" name="kode"></td>
            </tr>
            <tr> 
                <td align="left">nama:</td>
                <td class="form1"><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td class="top">Deskripsi:</td>
                <td class="form2"><textarea name="deskripsi" ></textarea></td>
            </tr>
            <tr>
                <td align="left">Stok:</td>
                <td class="form3"3><input type="text"name="stok"></td>
            </tr>
            <tr>
                <td align="left">Harga:</td>
                <td class="form4"><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td align="left">Berat:</td>
                <td class="form5"><input type="text"name="berat"></td>
                <td class="txtgr">gram</td>
            </tr>
            <tr> 
                <td></td>
                <td><button class="button1"type="submit" name="Submit">Tambah</button></td>
            </tr>
        </table>
        
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $berat = $_POST['berat'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO tbbarang(kode,nama,deskripsi,stok,harga,berat) VALUES('$kode','$nama','$deskripsi','$stok','$harga','$berat')");
        header("Location: index.php");
    }
    ?>
</body>
</html>
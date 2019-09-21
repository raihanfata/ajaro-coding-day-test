<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $kode=$_POST['kode'];
    $nama=$_POST['nama'];
    $deskripsi=$_POST['deskripsi'];
    $stok=$_POST['stok'];
    $harga=$_POST['harga'];
    $berat=$_POST['berat'];

    $result = mysqli_query($mysqli, "UPDATE tbbarang SET kode='$kode',nama='$nama',deskripsi='$deskripsi',stok='$stok',harga='$harga',berat='$berat' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM tbbarang WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $kode = $user_data['kode'];
    $nama = $user_data['nama'];
    $deskripsi = $user_data['deskripsi'];
    $stok=$user_data['stok'];
    $harga=$user_data['harga'];
    $berat=$user_data['berat'];
}
?>
<html>
<head>  
    <title>Data Barang</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/position.css">
    <link rel="stylesheet" href="css/button.css">
</head>

<body>
    <form class="body"name="update_user" method="post" action="edit.php">
    <h1>Update Data Barang</h1>
        <table border="0">
            <tr> 
                <td>Kode</td>
                <td class="form"><input type="text" name="kode" value=<?php echo $kode;?>></td>
            </tr>
            <tr> 
                <td>Nama:</td>
                <td class="form1"><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Deskripsi:</td>
                <td class="form2"><textarea name="deskripsi" cols="30" rows="10"><?php echo $deskripsi; ?></textarea></td>
            </tr>
            <tr>
                <td>Stok:</td>
                <td class="form3"><input type="text" name="stok" value=<?php echo $stok; ?>></td>
            </tr>
            <tr>
                <td>Harga:</td>
                <td class="form4"><input type="text" name="harga"value=<?php echo $harga; ?>></td>
            </tr>
            <tr>
                <td>Berat</td>
                <td class="form5"><input type="text" name="berat"value=<?php echo $berat; ?>></td>
                <td class="title1">Gram</td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><button class="button1" type="submit" name="update">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
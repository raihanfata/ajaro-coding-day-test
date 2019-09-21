<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbbarang ORDER BY id DESC");
?>

<html>
<head>    
    <title>Data Barang</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/button.css">
</head>

<body>
<a class="button" href="add.php">Tambah</a>

    <table class="center border"width="80%" border=1>
    <p class="title">Data Barang</p>

    <tr>
        <th width="15%">Kode</th> <th width="30%">Nama</th> <th width="30%">Harga</th> <th width="30%">Aksi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kode']."</td>";
        echo "<td>".$user_data['nama']."</td>";    
        echo "<td><p>Rp.".$user_data['harga']."</p></td>";
        echo "<td><a class=blue href='edit.php?id=$user_data[id]'>Edit</a><a class=red href='delete.php?id=$user_data[id]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
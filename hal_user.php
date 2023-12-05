<!DOCTYPE html>
<html>
    <head>
        <title>Berhasil Login</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="img">
        <image src="mg.png">
    </div>
<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location: index.php?pesan=gagal");
    }
    ?>
    <div class="img"></div>
    <div class="ket">
    <h1>Hallo <b><?php echo $_SESSION['username']; ?> </b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</h1>
    </div>
    <br/>
    <br/>
    <div class="pl">
    <a href="poison.html">Go to Magic Shop</></a>
     </div> 
</body>
    </html>
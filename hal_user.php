<!DOCTYPE html>
<html>
    <head>
        <title>Berhasil Login</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location: index.php?pesan=gagal");
    }
    ?>

    <div class="ket">
    <h1>Hallo <b><?php echo $_SESSION['username']; ?> </b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</h1>
    </div>
    <br/>
    <br/>
    <div class="container"></div>
    <div class="pl">
    <a href="poison.html">Go to Magic Shop</a>
     </div> 
     <div class="spofile">
     <a href="https://open.spotify.com/user/6a2fexpazpygs4tds9tzgjjst?si=e9a3eb80ba424301">My Spofile</a>
     <img src="mg-removebg-preview.png">
     </div>
</body>
    </html>
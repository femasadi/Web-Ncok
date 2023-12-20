<?php 
    session_start();
    if($_SESSION['status_login'] !=true){
        echo '<script>window.location="login.php"</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Tech</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    
    <!--HEADER-->
    <header>
        <div class="container">
        <h1><a href="dashboard.php"> Warung Tech</a></h1>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="data-kategori.php">Data Kategori</a></li>
            <li><a href="data-produk.php">Data Produk</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
    </header>

    <!--CONTENT-->
    <div class="section">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> Di Warung Tech</h4>
            </div>
    </div>

    <!--FOOTER-->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2023 - Warung Tech</small>
        </div>
            
</body>
</html>
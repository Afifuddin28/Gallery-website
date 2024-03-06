<?php
    session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ours Gallery</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand ms-5" href="index.php">Ours Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="me-5 d-flex" id="navbarSupportedContent">
      <ul class="navbar-nav me-4 mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="profil.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="data-image.php">Data Foto</a>
        </li>
        </li>
        <li class="nav-item">
        <a class="nav-link " aria-current="page" href="Keluar.php">Keluar</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
<!-- navbar end -->
 
    
    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Website Galeri Foto</h4>
            </div>
        </div>
    </div>
    
    
</body>
</html>
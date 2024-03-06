<?php
    include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 2");
	$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gallery</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-gray-100">

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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="registrasi.php">Sign in</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
<!-- navbar end -->
   
    
    
    <!-- new product -->
    <div class="container">
    <h3 class="t-gallery mt-3 ms-5 fw-bold">Samnus's Gallery</h3>
       <div class="box">
          <?php
              $foto = mysqli_query($conn, "SELECT * FROM tb_image WHERE image_status = 1 ORDER BY image_id DESC LIMIT 8");
			  if(mysqli_num_rows($foto) > 0){
				  while($p = mysqli_fetch_array($foto)){
		  ?>
       
          <div class="col-4">
              <img src="foto/<?php echo $p['image'] ?>" height="210px" />
              <p class="nama mt-2"><?php echo substr($p['image_name'], 0, 30)  ?></p>
          </div>
          </a>
          <?php }}else{ ?>
              <p>Photo isn't available</p>
          <?php } ?>
       </div>
    </div>
    

</body>
</html>
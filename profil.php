<?php
    session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
    }
	$query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id ='".$_SESSION['id']."'");
	$d = mysqli_fetch_object($query);
	
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
          <a class="nav-link " aria-current="page" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="profil.php">Profile</a>
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
            <h3>Profil</h3>
            <div class="box">
               <form action="" method="POST">
                   <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name ?>" required>
                   <input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username ?>" required>
                   <input type="text" name="hp" placeholder="No Hp" class="input-control" value="<?php echo $d->admin_telp ?>" required>
                   <input type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $d->admin_email ?>" required>
                   <input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->admin_address ?>" required>
                   <input type="submit" name="submit" value="Ubah Profil" class="btn bg-primary text-light">
               </form>
               <?php
                   if(isset($_POST['submit'])){
					   
					   $nama   = $_POST['nama'];
					   $user   = $_POST['user'];
					   $hp     = $_POST['hp'];
					   $email  = $_POST['email'];
					   $alamat = $_POST['alamat'];
					   
					   $update = mysqli_query($conn, "UPDATE tb_admin SET 
					                  admin_name = '".$nama."',
									  username = '".$user."',
									  admin_telp = '".$hp."',
									  admin_email = '".$email."',
									  admin_address = '".$alamat."'
									  WHERE admin_id = '".$d->admin_id."'");
					   if($update){
						   echo '<script>alert("Ubah data berhasil")</script>';
						   echo '<script>window.location="profil.php"</script>';
					   }else{
						   echo 'gagal '.mysqli_error($conn);
					   }
					   
					}  
			   ?>
            </div>
            
            <h3>Ubah password</h3>
            <div class="box">
               <form action="" method="POST">
                   <input type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
                   <input type="password" name="pass2" placeholder="Konfirmasi Password Baru" class="input-control" required>
                   <input type="submit" name="ubah_password" value="Ubah Password" class="btn bg-primary text-light">
               </form>
               <?php
                   if(isset($_POST['ubah_password'])){
					   
					   $pass1   = $_POST['pass1'];
					   $pass2   = $_POST['pass2'];
					   
					   if($pass2 != $pass1){
						   echo '<script>alert("Konfirmasi Password Baru tidak sesuai")</script>';
					   }else{
						   $u_pass = mysqli_query($conn, "UPDATE tb_admin SET 
									  password = '".$pass1."'
									  WHERE admin_id = '".$d->admin_id."'");
						   if($u_pass){
							   echo '<script>alert("Ubah data berhasil")</script>';
						       echo '<script>window.location="profil.php"</script>';
						   }else{
							   echo 'gagal '.mysqli_error($conn);
						   }
					   }
					  
					}  
			   ?>
            </div>
        </div>
        </div>
    </div>
    
</body>
</html>
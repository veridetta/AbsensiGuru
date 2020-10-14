<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login - Bagja College Try Out</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php include 'header.php';?>
    <div class="col-12 row tfull justify-content-center" style="padding:20px;">
        <div class="col-5 my-auto">
        <?php 
            if($_GET){
                if($_GET['status']=='2a07e3ff3df21b226d0cd044d4a7cc83'){
                    $pesan= "<strong>Error!</strong> Username atau password salah.";
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $pesan;?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                }
            }else{
                
            }
        ?>
            <div class="card">
                <form method="post" name="login" id="login" action="action/login_direct.php">
                    <div class="bg-primary card-header">
                        <h2 class=""><i class="fa fa-user"></i> Login Pengajar</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="text" name="email" id="email" class="form-control required" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control required" placeholder="Masukan Password">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary btn-block" id="login" name="login" value="Login">
                        <p></p>
                        <p class="text-center">Belum punya akun? <a href="#" class="text-primary">Daftar Sekarang</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php 
    include 'footer.php';
    ?>
</body>
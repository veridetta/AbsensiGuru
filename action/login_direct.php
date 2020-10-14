<?php
if($_POST){
    if($_POST['email']=="" && $_POST['password']==""){
        echo "<h3><b>Akses</b> Dilarang.!</h3>";
    }else{
        include '../config/connect.php';
        $username = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $qu=mysqli_query($con, "select * from user where username='$username' and password='$password'");
        $c_qu=mysqli_num_rows($qu);
        if($c_qu>0){
            session_start();
            $query=mysqli_fetch_assoc($qu);
            $name=$query['nama'];
            $mapel=$query['mapel'];
            $role=$query['role'];
            $id=$query['id'];
            $_SESSION['nama']=$name;
            $_SESSION['mapel']=$id;
            $_SESSION['id']=$mapel;
            $_SESSION['status']=1;
            $_SESSION['role']=$role;
            header('location:../admin.php');
        }else{
            echo "username atau password salah";
            header('location:../index.php?status=2a07e3ff3df21b226d0cd044d4a7cc83');
        }
    }
}else{
    echo "<h3><b>Akses</b> Dilarang.!</h3>";
}


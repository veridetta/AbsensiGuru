<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php include 'header.php';?>
    <?php
    if($_SESSION['role']=='admin'){
        
    }else{
        header ('location:index.php');
    };?>
    <div class="col-12 row tfull justify-content-center" style="padding:20px;">
        
    </div>
    <?php include 'footer.php';?>
</body>
<?php

  require 'header.php';
  if (isset($_GET['msg'])) {
    $_SESSION['userDatas']['loggedIn']=true; //parsing true when loggin is successul

    echo "<script>
    setTimeout(() =>{
      window.location='dashboard.php'
    }, 2000)
    </script>";
  }
  if ($_SESSION['userDatas']['loggedIn']) {
    header('location:dashboard.php');
  }
  ?>
    <div class="container col-4 mt-5">
            
      <form method="POST" action='general.php'>
      <div class="card col-lg-12">
                <div class="card-header">
                    Login Form<br>
                    <small>Don't have an account ? <a href='reg.php'>Sign Up</a></small>
                </div>
                <div class="card-body">
                    <?php
                      echo @$_GET['error']?'<div class="alert alert-danger">'.ucfirst(@$_GET['error']).'</div>':'';
                    ?>
                    <?php
                      echo @$_GET['msg']?'<div class="alert alert-success">'.ucfirst(@$_GET['msg']).'</div>':'';
                    ?>
                <div class="form-group">
                <input type="text" name='email' placeholder="Enter Email" value="<?php echo @$_GET['email'] ?>" class="form-control col-lg-12">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password" name='password' class="form-control col-lg-12">
            </div>
            <div class="form-group">
                <input type="submit" name='submit' value='Login' class="btn btn-success col-lg-12">
            </div>
                </div>
            </div>
      </form>
    </div>
  <?php 
  require 'footer.php';
  ?>
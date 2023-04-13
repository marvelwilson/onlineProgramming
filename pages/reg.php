<?php
  require 'header.php';
  if (isset($_GET['msg'])) {
    echo "<script>
    setTimeout(() =>{
      window.location='index.php'
    }, 2000)
    </script>";
  }
  ?>
    <div class="container col-4 mt-5">
            
      <form method="POST" action='general.php' enctype="multipart/form-data">
      <div class="card col-lg-12">
                <div class="card-header">
                    SignUp Form  <br>
                    <small>Already have an account ? <a href='index.php'>Sign In</a></small>
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
                <input type="text" placeholder="Enter Username" name='username' class="form-control col-lg-12">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password" name='password' class="form-control col-lg-12">
            </div>
            <div class="col-12">
                <Label>Gender</Label>
                <div class="row">
                   <div class="col-5">
                    <input type='radio' name='gender' value='male'> Male
                   </div>
                   <div class="col-5">
                    <input type='radio' name='gender' value='male'> Female
                   </div>
                </div>
            </div>
            <div class="form-group">
            <select class="form-control" name="country">
                <option selected disabled>Select Country</option>
                <?php CountryOptions() ?>
            </select>
            </div>
          
            <div class="form-group">
                <input type="file" name='file' class="form-control col-lg-12">
            </div>
            <div class="form-group">
                <input type="submit" name='SignUp' value='SignUp' class="btn btn-success col-lg-12">
            </div>
                </div>
            </div>
      </form>
    </div>
  <?php 
  require 'footer.php';
  ?>


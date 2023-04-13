<?php
session_start();
//Super Globals

// POST
// GET
// FILES
// REQUEST
// SERVER
// SESSION
  
//Regular Expression

// preg_match

//Form Handling
// print_r($_POST); 

if (@$_POST['submit']) {
   extract($_POST);
    if (empty($_POST['email']) || empty($_POST['password'])) {
       header('location:index.php?error=all fields are required');
    }else{

   //   if(!preg_match("/^[a-zA-Z ]*$/", $_POST[''])){
   //      header('location:index.php?error=Only Words Are Allowed');
   //   }else
     if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        header('location:index.php?error=Invalid Email Address&&email='.$_POST['email']);
     }else if(strlen($_POST['password'])<8){
      header('location:index.php?error=password should be more than 8 characters&&email='.$_POST['email']);
     }else if($email!=$_SESSION['userDatas']['email'] && $password != $_SESSION['userDatas']['email']){
      header('location:index.php?error=Invalid Creds&&email='.$_POST['email']);
     } else{
      header('location:index.php?msg=Successfully Logged In&&email='.$_POST['email']);
     }
        
    //   
        
    }
}

if (isset($_POST['SignUp'])) {
   // print_r($_FILES);
   if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['username']) || ($_FILES['file']['error']!='0') || !isset($_POST['gender']) || !isset($_POST['country']) ) {
      header('location:reg.php?error=all fields are required');
      // print_r($_POST);
   }
else{
    
   // $ext = ['jpeg', 'png', 'gif'];
  //   if(!preg_match("/^[a-zA-Z ]*$/", $_POST[''])){
  //      header('location:reg.php?error=Only Words Are Allowed');
  //   }else
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
       header('location:reg.php?error=Invalid Email Address&&email='.$_POST['email']);
    }else if(strlen($_POST['password'])<8){
     header('location:reg.php?error=password should be more than 8 characters&&email='.$_POST['email']);
    }elseif($_SESSION['userDatas']['email']==$_POST['email']){
     header('location:reg.php?error=Email Already In Use&&email=');
    }else{
         $imgType = $_FILES['file']['type'];
         $explodeImgType = explode('/', $imgType);
         $explodeImgType = $explodeImgType[0];
         // echo in_array($extName, $ext)*200;
         // if ($_FILES['file']['size']>(200*1)):
         //    //   echo 'file is too large to be uploaded'
         //    //   throw new Exception("File is too large to be uploaded", 1);

         //  endif;

              
         // print_r($_FILES);
         if (strtolower($explodeImgType)!='image') {
             header('location:reg.php?error=Invalid Image Type&&email='.$_POST['email']);
         }else{
            $_POST['image'] = $_FILES['file']['name'];
            $_SESSION['userDatas'] = $_POST;
            move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.$_FILES['file']['name']);
            header('location:reg.php?msg=Successfully Logged In&&email='.$_POST['email']);
         }
    }
       
   //   
       
   }
}


//Log out condition

if (isset($_POST['logout'])) {
    $_SESSION['userDatas']['loggedIn'] = false;
    header('location: index.php');
}
?>





<?php

require_once 'conn.php';

if(isset($_POST['submit'])){

      // catch
      $name=trim(htmlspecialchars($_POST['name']));
      $email=trim(htmlspecialchars($_POST['email']));

      $errors=[];
      // validate
      if(empty($name)){
          $errors[]='Name is required';
      }
      elseif(is_numeric($name)){
          $errors[]='Name must be string';
  
      }
      elseif(empty($email)){
          $errors[]='Email is required';
      }
      elseif(is_numeric($email)){
          $errors[]='Email must be string';
  
      }

      // check

      $query="select * from users where `email`='$email'";

      $result=mysqli_query($connection,$query);

      if(mysqli_num_rows($result)==1){

        $id=mysqli_fetch_assoc($result)['id'];

        $_SESSION['user_id']=$id;

        header('location:../indexx.php');

      }
      else{

        $_SESSION['error']='There is no user';
        header('location:../login.php');




      }


}
else{

    $_SESSION['error']='Error';

    header('location:../login.php');

}


?>
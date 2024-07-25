<?php

require_once 'conn.php';

if(isset($_POST['submit'])){

    // catch
    $name=trim(htmlspecialchars($_POST['name']));
    $email=trim(htmlspecialchars($_POST['email']));
    $password=trim(htmlspecialchars($_POST['password']));
    $phone=trim(htmlspecialchars($_POST['phone']));

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

    } elseif(empty($password)){
        $errors[]='Password is required';
    }
     elseif(empty($phone)){
        $errors[]='Phone is required';
    }
   
if(empty($errors)){
    $password=password_hash($password,PASSWORD_DEFAULT);

    $query="INSERT INTO users (name,email,password,phone) VALUES ('$name', '$email', '$password','$phone');";

    $result=mysqli_query($connection,$query);

    if($result){
        $_SESSION['success']='User created successfully';

        header('location:../login.php');
    }


}
else{
    $_SESSION['error']=$errors;
    header('location:../signup.php');
}

}

?>
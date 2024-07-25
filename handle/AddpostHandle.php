<?php 
  require_once 'conn.php';

  if(isset($_POST['submit'])){

    $title=trim(htmlspecialchars($_POST['title']));
    $body=trim(htmlspecialchars($_POST['body']));

$error=[];
if(empty($title)){
    $error[]= "Title Is Required";
}elseif(is_numeric($title)){
    $error[]=" Title must be string";
}

if(empty($body)){
    $error[]= "Body Is Required";
}elseif(is_numeric($body)){
    $error[]=" Body must be string";
}

if(isset($_FILES['image'])&&$_FILES['image']['name']){
    $image=$_FILES['image'];
    $image_name=$image['name'];
    $tmp_name=$image['tmp_name'];
    $image_error=$image['error'];
    $size=$image['size']/(1024*1024);
    $extension=strtolower(pathinfo($image_name,PATHINFO_EXTENSION));

if($image_error!=0){
    $error[]=" Image is required";
}elseif($size>1){
    $error[]="The image has big size";
}elseif(!in_array($extension,["jpg","png","jpeg"])){
    $error[]="This is not an image";
}

    $new_name=uniqid().".".$extension;

}else{
    $new_name=null;
}

if(empty($error)){
$query="insert into posts(`title` ,`body` ,`image` ,`user_id`) values('$title','$body','$new_name',1)";

$result=mysqli_query($connection,$query);
if($result){

    if(isset($_FILES['image'])&&$_FILES['image']['name']){
        move_uploaded_file($tmp_name,"../assets/images/$new_name");
    }

  $_SESSION['success']="Your Post Created Successfully";
  header("location:../indexx.php");
}else{
    $_SESSION['error']=["Error happened during inserting"];
}



}else{
    $_SESSION['error']=$error;
    header("location:../AddPost.php");

}
  }else{
    header("location:../AddPost.php");
  }



?>
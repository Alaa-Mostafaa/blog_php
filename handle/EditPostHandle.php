<?php
require_once 'conn.php';
if(isset($_POST['submit']) && isset($_GET['id'])){


$id=$_GET['id'];

$query="select * from posts where id=$id";
$result=mysqli_query($connection,$query);

if(mysqli_num_rows($result)==1){

    $oldimage=mysqli_fetch_assoc($result)['image'];


// catch and check data
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
$new_name=$oldimage;
}


//update

$queryy="update posts set `title`='$title', `body`='$body',`image`='$new_name' where id=$id";

$result=mysqli_query($connection,$queryy);

if($result){

    $_SESSION['success']="Post updated successfully";
    header("location:../ViewPost.php?id=$id");

}else{

}













}

else{
    $_SESSION['error']=['Post is not found'];
    header('location:../indexx.php');

}




}
else{

    header('location:../indexx.php');

}
?>
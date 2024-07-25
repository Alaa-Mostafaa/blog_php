<?php 

require_once 'conn.php';

if(isset($_GET['id']))
{
    $id=$_GET['id'];

    $query="select * from posts where id=$id";
    $result=mysqli_query($connection,$query);
    

    if(mysqli_num_rows($result)==1){

        $oldimage=mysqli_fetch_assoc($result)['image'];

        if(!empty($oldimage)){
            unlink("../assets/images/$oldimage");
        }

        $query="delete from posts where id=$id";
        $result=mysqli_query($connection,$query);


        $_SESSION['error']='Post deleted successfully';
        header("location:../indexx.php");


    }
    else{

        $msg="Post is not found";

    }
    

}
?>
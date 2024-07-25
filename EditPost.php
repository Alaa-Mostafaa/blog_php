<?php require_once 'header.php' ?>

 <!-- Page Content -->
 <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Edit Post</h4>
              <h2>edit your personal post</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php 

require_once 'handle/conn.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

}else{header('location:indexx.php');}

$query="select * from posts where id=$id";
$result=mysqli_query($connection,$query);

if(mysqli_num_rows($result)==1){
    $post=mysqli_fetch_assoc($result);
}
else{
    $msg='Post is not found';

}

?>

<?php

if(!empty($post)){
?>
<div class="container w-50 ">
<div class="d-flex justify-content-center">
    <h3 class="my-5">edit Post</h3>
  </div>

    <form method="POST" action="handle/EditPostHandle.php?id=<?php echo $post['id']; ?>" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $post['title'] ?>">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" id="body" name="body" rows="5"><?php echo $post['body'] ?></textarea>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">image</label>
            <input type="file" class="form-control-file" id="image" name="image" >
        </div>
        <img src="assets/images/<?php echo $post['image'] ?>" class="w-25"/>
        <button type="submit" class="m-3 btn btn-primary" name="submit">Submit</button>
    </form>
</div>

<?php 
}else{
    echo $msg;
}

?>
<?php require_once 'footer.php' ?>
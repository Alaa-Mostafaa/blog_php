<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>
    <body>
       <?php require_once 'header.php';
       require_once 'handle/conn.php';
       if(isset($_GET['id'])){
        $id=$_GET['id'];

        $query="select * from posts where id=$id";
        $result=mysqli_query($connection,$query);
        $Single_post=mysqli_fetch_assoc($result);
       }
       ?>

       <section class="pt-5">
       <div class="container mt-5">
        <div class="row pt-5">
            <div class="col-6">
                <img src="assets/images/<?php echo $Single_post['image'] ?>" class="w-100"/>
            </div>
            <div class="col-6">
                <h4><?php echo $Single_post['title'] ?></h4>
                <p class="text-justify pb-5 pt-3"><?php echo $Single_post['body'] ?></p>
                <a class="btn btn-secondary text-white" href="EditPost.php?id=<?php echo $Single_post['id'] ?>">Edit</a>
                <a class="btn btn-danger text-white" href="handle/deleteHandle.php?id=<?php echo $Single_post['id'] ?>">Delete</a>
            </div>
        </div>
       </div>
       </section>
        
        <script src="" async defer></script>
        <?php require_once 'footer.php'; ?>

    </body>
</html>
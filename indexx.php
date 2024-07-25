<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BLOG</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/index.css">

    </head>
    <body>
        <?php
        require_once 'header.php';
        
        ?>
        <!-- First section -->
     <section id="first-section">
        <div style="background-color: rgba(0,0,0,0.6);height:100%">
        

        </div>
        

     </section >
        <!-- End of First section -->

        <!-- Second section -->
        <section id="second-section" class="mt-5">
            <div>

                <div class="container">
                <h2 class="text-danger">View All Posts</h2>

                    <div class="row">
                        <?php 
                        require_once 'handle/conn.php';

                        $query='select * from posts';
                        $result=mysqli_query($connection,$query);
                        if(mysqli_num_rows($result)>0){
                            $posts=mysqli_fetch_all($result,MYSQLI_ASSOC);
                            foreach($posts as $post){

                        ?>
                        <div class="col-4 pt-5">
                          <div class="card">
                        <img src="assets/images/<?php echo $post['image'] ?>" class="card-img-top" alt="...">
                           <div class="card-body">
                         <h5 class="card-title"><?php echo $post['title'] ?></h5>
                         <p class="card-text text-justify"><?php echo $post['body'] ?></p>
                         <a href="ViewPost.php?id=<?php echo $post['id'] ?>" class="btn btn-primary mt-3">View</a>
                           </div>
                         </div>
                        </div>

                        <?php 
                        }
                        
                    }
                        else{
                
                            $msg="There are no posts ";
                        }
                        ?>

                    </div>

                </div>

            </div>
        </section>



        <!-- End of Second section -->

        


        <script src="assets/js/bootstrap.bundle.min.js" async defer></script>



        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>
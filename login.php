<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>
    <body>

    <?php
require_once 'header.php';
    ?>
     
    <section class="container pt-5">

    <div class="mt-5 pt-5 pb-4">
        <h4 class="text-danger">Login</h4>
    </div>

    <form method="post" enctype="multipart/form-data" action="handle/loginHandle.php">
           <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>

            <button class="btn btn-danger" name="submit">Submit</button>
    </form>



    </section>

    <?php
require_once 'footer.php';
    ?>
        
        <script src="" async defer></script>
    </body>
</html>
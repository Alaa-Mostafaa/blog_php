<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Post</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <?php
require_once 'header.php';
require_once 'handle/conn.php';
if(isset($_SESSION['error'])){
    foreach($_SESSION['error'] as $error){
echo $error;        
    }
}
    ?>
    <section >
        <div style="background-image: url('assets/images/background.jpg');height:75vh">
        </div>

        <div class="mt-5 container">
            <h3 class="text-danger mb-3">
                Add new post
            </h3>
            <form method="post" action="handle/AddpostHandle.php" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Body</label>
                    <input type="text" class="form-control" name="body">
                </div>

                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Choose your image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>

                <button class="btn btn-danger mt-3 " name="submit">Add your post</button>
            </form>

        </div>

    </section>
    <?php
require_once 'footer.php';

    ?>
    <script src="" async defer></script>
</body>

</html>
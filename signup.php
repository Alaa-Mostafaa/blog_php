<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
    require_once 'header.php';
    ?>

    <section class="container pt-5">
        <div class="pt-5 mt-5 pb-4">
            <h4 class="text-danger">Sign Up</h4>

        </div>
        <form method="post" enctype="multipart/form-data" action="handle/signuphandle.php">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                <input type="tel" class="form-control" name="phone">
            </div>

            <button class="btn btn-danger" name="submit">Submit</button>
        </form>

    </section>

    <script src="" async defer></script>


    <?php
    require_once 'footer.php';
    ?>
</body>

</html>
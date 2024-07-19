<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">

    <?php if($_SESSION['logged_in']):?>
            <p>Welcome, <?php echo $_SESSION['userName']; ?></p>
            <a href="logout.php" class="btn btn-danger">logout</a>
        <?php else: ?>
            <div class="col-6 mt-5">
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">UserName</label>
                            <input type="text" class="form-control" name="userName" >
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-success">Login</button>
              
                    </form>
                </div>

            <?php endif ;?>

       
    </div>
</body>

</html>
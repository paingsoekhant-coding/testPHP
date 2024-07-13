<?php 

require_once "businessLogic.php";

$student = new BL_student();

$id = $_GET['id'];

$getStudent = $student->edit($id);

// die(var_dump($getStudent));

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="contianer">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <h2>Edit Student</h2>
                <form action="update.php" method="post" class="form form-control">
                    <input type="hidden" name="id" value="<?php echo $getStudent->id;  ?>" >
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" value="<?php echo $getStudent->name;  ?>" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" value="<?php echo $getStudent->email;  ?>" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" id="gender" class="form-select">
                            <option value="" disabled selected>Choose Your Gender</option>
                            <option value="male" <?php if($getStudent->gender == "male"){echo "selected";} ?>>Male</option>
                            <option value="female" <?php if($getStudent->gender == "female"){echo "selected";} ?>>Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Dob</label>
                        <input type="date" value="<?php echo $getStudent->dob;  ?>" class="form-control" name="dob" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Age</label>
                        <input type="text" value="<?php echo $getStudent->age;  ?>" class="form-control" name="age" id="email">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="index.php" class="btn btn-primary">List</a>
                </form>

            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>




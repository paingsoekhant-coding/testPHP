<?php 

require_once "businessLogic.php";

$data = new BL_student();

$getStudents = $data->read();

// $data->create("test","test@mail","male","2000-01-01",20);

// foreach($getStudents as $student){

//     echo $student->name. " |" . $student->email . "|" . $student->gender . "|" . $student->dob . "|" . $student->age. "<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mangement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 mt-5">
                <h4>Student List</h4>
                <a href="createPage.php" class="btn btn-primary mb-2">Create New Student</a>
                <table class="table border">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Age</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($getStudents as $s): ?>
                        <tr>
                            <td><?php echo $s->id ?></td>
                           <td><?php echo $s->name ?></td>
                           <td><?php echo $s->email ?></td>
                           <td><?php echo $s->gender ?></td>
                           <td><?php echo $s->dob ?></td>
                           <td><?php echo $s->age ?></td>
                           <td>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                           </td>
                        </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

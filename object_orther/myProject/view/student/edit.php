<?php
include "../../class/base.php";

$students = new DB('students');
$id = $_GET['id'];
$data = $students->getByID($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

    </style>
</head>

<body>

    <div class="container mt-3">
        <h3>
            Student Edit
        </h3>
    </div>
    <div class="container mt-3">
        <form action="../../api/student/update.php" method="get" id="myForm" enctype="multipart/form-data">
            <div class="row">

                <div class="col-12 mt-3 text-primary">
                    <label for="">id = <?= $data['id'] ?></label>
                </div>
                <div class="col-12 mt-3">
                    <label for="">name</label>
                    <input type="text" class="form-control" name="name" id="" value="<?= $data['name'] ?>">
                </div>
                <div class="col-12 mt-3">
                    <label for="">mobile</label>
                    <input type="text" class="form-control" name="mobile" id="" value="<?= $data['mobile'] ?>">
                </div>
                <div class="col-12 mt-3">
                    <input type="hidden" class="form-control" name="id" id="" value="<?= $data['id'] ?>">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Button</button>
                    </div>
                </div>
            </div>
        </form>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- js or jqery -->
    <script>
        $(document).ready(function() {


        });
        // jquery end
    </script>
</body>

</html>
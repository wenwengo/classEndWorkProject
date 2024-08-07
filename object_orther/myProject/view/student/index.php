<?php
include "../../class/base.php";

$students = new DB('students');
// $data = $students->getAll();
// $data = $students->setRank();
// $data = $students->getAllSetRank();
$data = $students->getAllSetRank();

// $appleDB = new DB('students');
// $data = $appleDB->getAll();
// dd($data);

// function dd($data)
// {
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// }

// 假資料
// $data = [
//     [
//         'id' => 1,
//         'name' => 'amy',
//         'mobile' => '0911-111-11'

//     ],
//     [
//         'id' => 2,
//         'name' => 'bob',
//         'mobile' => '0922-222-222'

//     ],
//     [
//         'id' => 3,
//         'name' => 'cat',
//         'mobile' => '0933-333-333'

//     ],
// ];


// dd($data);
// dd($data[0]);
// dd($data[0]['name']);


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
    <nav class="navbar navbar-expand-sm bg-dark navbar-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="../teacher/index.php">Teacher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../student/index.php">Student</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-3">
        <h2>Students List</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <div class="text-end">
            <!-- <button type="button" class="btn btn-success">Add</button> -->
            <a class="btn btn-danger" href="../../api/student/rollback.php">rollback</a>
            <a class="btn btn-success" href="./create.php">Add</a>
        </div>
        <table class="table table-bordered mt-3 text-center">
            <thead>
                <tr>
                    <th width="10%">id</th>
                    <th width="20%">name</th>
                    <th width="20%">mobile</th>
                    <th width="10%">Rank</th>
                    <th class="text-start">
                        opreate
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value) : ?>
                    <?php
                    // dd($key);
                    // dd($value);

                    //                     Array
                    // (
                    //     [id] => 1
                    //     [name] => amy
                    //     [mobile] => 0911-111-11
                    // )
                    ?>
                    <tr>
                        <td><?= $value['id']; ?></td>
                        <td><?= $value['name']; ?></td>
                        <td><?= $value['mobile']; ?></td>
                        <td><?= $value['rank']; ?></td>
                        <td class="text-start">
                            <a class="btn btn-warning" href="./edit.php?id=<?= $value['id']; ?>">Edit</a>
                            <a class="btn btn-danger" href="../../api/student/del.php?id=<?= $value['id']; ?>">Del</a>
                            <!-- <button type="button" class="btn btn-warning">
                                Edit
                            </button> -->
                            <!-- <button type="button" class="btn btn-danger">Del</button> -->
                        </td>
                    </tr>
                <?php endforeach; ?>






            </tbody>
        </table>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- js or jqery -->
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "get",
                url: "url",
                data: "data",
                dataType: "json",
                success: function(response) {}
            });

        });
        // jquery end
    </script>
</body>

</html>
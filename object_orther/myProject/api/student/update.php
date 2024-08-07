<?php 
    include "../../class/base.php";
    $data = $_GET;
    $students = new DB('students');
    
    // dd($data);

    // Array
    // (
    //     [name] => cat
    //     [mobile] => 0933-333-333
    //     [id] => 3
    // )

    $students->update($data);
    $result = [
        'msg' => 'ok',
        'data' => $data,
        'ref' => 'localhost/images/book'
    ];

    // echo json_encode($result);
    


?>
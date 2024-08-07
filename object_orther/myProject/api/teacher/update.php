<?php 
    include "../../class/base.php";
    $data = $_GET;
    $teachers = new DB('teachers');
    
    // dd($data);

    // Array
    // (
    //     [name] => cat
    //     [mobile] => 0933-333-333
    //     [id] => 3
    // )

    $teachers->update($data);
    $result = [
        'msg' => 'ok',
        'data' => $data,
        'ref' => 'localhost/images/book'
    ];

    // echo json_encode($result);
    


?>
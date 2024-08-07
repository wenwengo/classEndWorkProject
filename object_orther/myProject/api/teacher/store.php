<?php 
    include "../../class/base.php";
    $data = $_GET;
    $teachers = new DB('teachers');
    // $data = $teachers->getAllSetRank();
    
    // dd($data);

    // Array
    // (
    //     [name] => aaa
    //     [mobile] => 123
    // )

    $teachers->store($data);
    $result = [
        'msg' => 'ok',
        'data' => $data,
        'ref' => 'localhost/images/book'
    ];

    echo json_encode($result);
    


?>
<?php 
    include "../../class/base.php";
    $data = $_GET;
    $teachers = new DB('teachers');
    // $data = $teachers->getAllSetRank();
    
    $id = $_GET['id'];
    // dd('hello del api');

    // Array
    // (
    //     [name] => aaa
    //     [mobile] => 123
    // )

    $teachers->del($id);
    // $result = [
    //     'msg' => 'ok',
    //     'data' => $data,
    //     'ref' => 'localhost/images/book'
    // ];

    // echo json_encode($result);
    


?>
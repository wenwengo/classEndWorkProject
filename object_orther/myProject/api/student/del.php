<?php 
    include "../../class/base.php";
    $data = $_GET;
    $students = new DB('students');
    // $data = $students->getAllSetRank();
    
    $id = $_GET['id'];
    // dd('hello del api');

    // Array
    // (
    //     [name] => aaa
    //     [mobile] => 123
    // )

    $students->del($id);
    // $result = [
    //     'msg' => 'ok',
    //     'data' => $data,
    //     'ref' => 'localhost/images/book'
    // ];

    // echo json_encode($result);
    


?>
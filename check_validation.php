<?php
require_once 'config/master.php'; 

if(isset($_GET['verification_code'])) {

    $return = '';
    $verification_code = $_GET['verification_code'];

    $sql = "SELECT * FROM tbl_online WHERE code = '$verification_code'";
    $check = $crud->getSingleRow($sql);

    if($check){

        $return = 1;
        $dataToUpdate = array(
            'status'  => "approved"
        );
        $condition = "code = '{$verification_code}'";

        $updateId = $crud->update('tbl_online', $condition, $dataToUpdate);


    }else{

        $return = 0;
    }

    echo $return;		
}				
?>
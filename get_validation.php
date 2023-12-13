<?php
require_once 'config/master.php'; 

if(isset($_GET['user_id'])) {

    $return = '';
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM tbl_online WHERE id = '$user_id'";
    $check = $crud->getSingleRow($sql);

    $return.= "<h3>One final step! We need to<br> verify your email</h3><br>
    <p>Please check your inbox for verification code sent to <b>".$check['email']."</b>.</p>
    <h4>Enter Code</h4>
    <input type=\"text\"  id=\"verification_code\" placeholder=\"CODE\" autocomplete = \"off\">
    <button type=\"button\" id = \"btn-verify\" class=\"rates\">Verify</button>
    ";
    

    echo $return;		
}				
?>
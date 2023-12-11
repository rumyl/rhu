<?php
require_once 'config/master.php'; 

if(isset($_GET['user_id'])) {

    $return = '';
    $user_id = $_GET['user_id'];

    $return.= "<h3>One final step! We need to<br> verify your email</h3><br>
    <p>Please check your inbox for verification code sent to <b></b>.</p>
    <h4>Enter Code</h4>
    <input type=\"text\"  id=\"email\" placeholder=\"CODE\" autocomplete = \"off\">
    <button type=\"button\" id = \"btn-save\" class=\"rates\">Verify</button>
    ";
    

    echo $return;		
}				
?>
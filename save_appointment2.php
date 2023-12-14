<?php
require_once 'config/master.php';

if(isset($_POST)) {

                $tableName = 'tbl_online';
                
                $appointment_date   = $_POST['appointment_date'];
                $appointment_time   = $_POST['appointment_time'];
                $email              = $_POST['email'];
                $lname              = $_POST['lname'];
                $fname              = $_POST['fname'];
                $mname              = $_POST['mname'];
                $dob                = $_POST['dob'];
                $gender             = $_POST['gender'];
                $code               = $_POST['code'];

                
                $dataToInsert = array(
                    'appointment_date'  => $appointment_date,
                    'appointment_time'  => $appointment_time,
                    'email'             => $email,
                    'lname'             => $lname,
                    'fname'             => $fname,
                    'mname'             => $mname,
                    'gender'            => $gender,
                    'dob'               => $dob,
                    'code'              => $code
                );
                
                $insertedId = $crud->create($tableName, $dataToInsert);
                
                echo json_encode($insertedId);
}

?>

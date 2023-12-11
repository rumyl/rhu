<?php
require_once 'config/master.php'; 

if(isset($_GET['appointment_date'])) {

    $return = '';
    $appointment_date = $_GET['appointment_date'];
    $timestamp = strtotime($appointment_date);
    
    // Format the timestamp in the "YYYY-MM-DD" format
    $formattedDate = date('Y-m-d', $timestamp);
    
    $sql = "SELECT appointment_time FROM tbl_online WHERE appointment_date ='$formattedDate' AND status = 'approved'";
    $records = $crud->read($sql);
    
    // Initialize options array with all possible values
    $options = array(
        "08:00 - 08:30 AM", "08:30 - 09:00 AM", "09:00 - 09:30 AM", "09:30 - 10:00 AM",
        "10:00 - 10:30 AM", "10:30 - 11:00 AM", "11:00 - 11:30 AM", "11:30 - 12:00 NN",
        "01:00 - 01:30 PM", "01:30 - 02:00 PM", "02:00 - 02:30 PM", "02:30 - 03:00 PM",
        "03:00 - 03:30 PM", "03:30 - 04:00 PM", "04:00 - 04:30 PM", "04:30 - 05:00 PM"
    );
    
    // If records are found, remove them from the options
    if ($records !== false) {
        foreach ($records as $record) {
            $recordTime = $record['appointment_time'];
            // Remove the exact match from the options array
            $options = array_diff($options, [$recordTime]);
        }
    }
    
    // HTML generation
    $return = '<option>Please Select Time</option>';
    foreach ($options as $option) {
        $return .= '<option>' . $option . '</option>';
    }

    echo json_encode($return);		
}				
?>
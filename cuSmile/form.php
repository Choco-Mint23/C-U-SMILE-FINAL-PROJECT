<?php

// For checking if any appointments exist
class funcList {
    
    //* INPUT TYPES
    //* 0 - CONTACT NUMBER
    //* 1 - PATIENT NAME

    public function checkExist($result, $find, $type) {
        $count = 0;

        if ($type === 0){
            // $sql_auth_contact = 
            // "SELECT * FROM appointment_dates 
            // "

            foreach($result as $row){
                $check = $row['contact_number'];
                if ($find === $check){
                    $count++;
                }
            }
    
            if ($count > 0) {

                return $count;

            } else {
                
                return $count;

            }
        } 
        
        if ($type === 1) {
            foreach($result as $row){
                $check = $row['patient_name'];
                if ($find === $check){
                    $count++;
                }
            }

            if ($count > 0) {
                
                return $count;

            } else {

                return $count;

            }
        }
    }

    public function displayAppointments($count){
        
        if ($count == 1) {
            echo "<h3>You have {$count} appointment.</h3>";
        } else if ($count > 0){
                echo "<h3>You have {$count} existing appointments</h3>";
        } else {
            echo "<h3>You have 0 existing appointments. Book now!</h3>";
        }
    }
}

$FUNC_GET_COUNT = new funcList();
$FUNC_DISPLAY = new funcList();

// For submitting a new appointment
if (isset($_POST['submitDate'])){

    // Checks if user input name matches with database
    $sql_check_name = "SELECT * FROM appointment_dates WHERE patient_name = '$_POST[patientName]'";

    // Checks if contact number input matches with database
    $sql_check_contact = "SELECT * FROM appointment_dates WHERE contact_number = '$_POST[contactNo]'";

    $appointmentDate = $_POST['appointment'];
    $patientName = $_POST['patientName'];
    $appointmentType = $_POST['appointmentType'];
    $contactNo = $_POST['contactNo'];

    // echo "<h3>Patient: {$patientName}";
    // echo "<h3>Contact No: {$contactNo}";
    // echo "<h3>Date: {$appointmentDate}";

    $sql_insert = "INSERT INTO appointment_dates (patient_name, appt_type, contact_number, appt_date, dentist) 
    VALUES ('$patientName', '$appointmentType','$contactNo', '$appointmentDate', 'Dr. Raymund')";

    $nameExist = $conn->query($sql_check_name);

    $count = $FUNC_GET_COUNT->checkExist($nameExist, $patientName, 1);

    if ($count > 0){

        $sql_get_appt = 
        "SELECT appt_date
        FROM appointment_dates
        WHERE patient_name = '$patientName'";

        $result = $conn->query($sql_get_appt);

        $row = $result->fetch_assoc();
        $existingAppointmentDate = $row['appt_date'];

        echo "<br>You already have an existing appointment on " . $existingAppointmentDate . " with Dr. Raymund!";

    } else if (!$count > 0){

        $result = $conn->query($sql_insert);
        echo "<br>" . "Appointment booked successfully!";
        echo "<br>" . "Your appointment is on " . $appointmentDate;

    } else {
        
        echo "Error has occured.";
    }

    $conn->close();
}

// Check if user inputted something
if (isset($_POST['checkAppointment'])) {

    $userInput = $_POST['check_input'];
    $count = 0;

    //* List of SQL queries

    // Checks if user input name matches with database
    $sql_check_name = "SELECT * FROM appointment_dates WHERE patient_name = '$userInput'";

    // Checks if contact number input matches with database
    $sql_check_contact = "SELECT * FROM appointment_dates WHERE contact_number = '$userInput'";

    //* If user inputs contact number
    if (is_numeric($userInput)){

        $result = $conn->query($sql_check_contact);

        $count = $FUNC_GET_COUNT->checkExist($result, $userInput, 0);

        $FUNC_DISPLAY->displayAppointments($count);

    }

    //* If user inputs patient name 
    else {
        

        $result = $conn->query($sql_check_name);
        
        $count = $FUNC_GET_COUNT->checkExist($result, $userInput, 1);  
        
        $FUNC_DISPLAY->displayAppointments($count);
    }
}

?>
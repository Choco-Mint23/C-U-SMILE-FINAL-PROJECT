<?php

include 'function.php'; 
include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Flatpickr UI Theme -->
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Local stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php include 'navbar.php'?>

    <?php 
    if (isset($_SESSION['email'])){
        echo "Logged in as " . $_SESSION['email'];
    } else {
        header("Location: login.php");
        exit;   
    }?>

    <div class="wrapper">
        <form action="appointment.php" method="post" class="form-container container p-5">
            <div class="row row-1">
                <div class="col-6">
                    <label for="patientName">Patient Name</label>
                    <input type="text" name="patientName" required class="w-100">
                </div>
                <div class="col-6">
                    <label for="patientName">Contact Number</label>
                    <input type="text" name="contactNo" required class="w-100">
                </div>
            </div>
            <div class="row row-2">
                <div class="d-flex flex-column">
                    <label for="patientName">Details of Appointment</label>
                    <textarea type="text" name="appointmentType" required></textarea>
                </div>
            </div>
            <div class="row row-3">
                <div class="col-6">
                    <label for="patientName">Appointment Date</label>
                    <input type="datetime-local" id="appointment" name="appointment" required class="datePicker">
                </div>
                <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Choose your Dentist
                    </button>

                    <input type="text" id="selectedDentist" name="selectedDentist" required value="Dr. Raymund" readonly class="w-100">

                        <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Choose a Dentist
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-dark">

                                        <li class="dropdown-item 1-dentist" onclick="updateSelectedDentist('Dr. Raymundz')" name="drRaymund">Dr. Raymund</li>
                                        <li><a class="dropdown-item 2-dentist" href="#" onclick="updateSelectedDentist('Dr. Eman')">Dr. Eman</a></li>
                                        <li><a class="dropdown-item 3-dentist" href="#" onclick="updateSelectedDentist('Dr. Lance')">Dr. Lance</a></li>

                                    </ul>   
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-5">
                    <input type="submit" name="submitDate" value="Book Appointment" class="d-inline-flex justify-content-center book-appointment">
                </div>
            </div>
        </form>
    </div>

    <?php include 'form.php' ?>
    <div class="check-appointment-container">
        <form action="appointment.php" method="post" class="form-container d-flex flex-column gap-2 w-25 p-2 align-items-center">
    
            <label for="patientName">Patient Name/Contact Number</label>
            <h5 class="eg">e.g. John Doe</h5>
    
            <input type="text" name="check_input" required>
    
            <input type="submit" name="checkAppointment" value="Check my Appointments" class="appointmentButton mt-3 mb-3">
    
        </form>
    </div>
    


    <!-- Link Boostrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Flatpickr Calendar -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Main js -->
    <script src="app.js"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

</body>
</html>






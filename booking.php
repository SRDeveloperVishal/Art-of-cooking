<?php
require('config.php');
if (isset($_REQUEST['submit'])){
	$fullname = stripslashes($_REQUEST['fullname']);
	$fullname = mysqli_real_escape_string($con,$fullname); 
	$email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $phone = stripslashes($_REQUEST['phone']);
    $phone = mysqli_real_escape_string($con,$phone);
    $booking_date = stripslashes($_REQUEST['booking_date']);
	$booking_date = mysqli_real_escape_string($con,$booking_date);
	$address = stripslashes($_REQUEST['address']);
	$address = mysqli_real_escape_string($con,$address);
        $query = "INSERT into `bookings` (fullname, email, phone, booking_date, address) VALUES ('$fullname', '$email', '$phone', '$booking_date', '$address')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<script>
                window.location = 'index.html';
            </script>";
        } else {
            echo "something went wrong!";
        }
    }
?>
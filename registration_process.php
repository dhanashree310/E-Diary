<?php
include_once('includes/config.php');

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $emailid = $_POST['emailid'];
    $mobileno = $_POST['mobileno'];
    $npwd = md5($_POST['newpassword']);

    $ret = mysqli_query($con, "select id from tblregistration where emailId='$emailid' || mobileNumber='$mobileno'");
    $count = mysqli_num_rows($ret);

    if ($count == 0) {
        $query = mysqli_query($con, "insert into tblregistration(firstName,lastName,emailId,mobileNumber,userPassword) values('$fname','$lname','$emailid','$mobileno','$npwd')");
        if ($query) {
            echo "<script>alert('Registration successful. Please login now');</script>";
            echo "<script>window.location.href ='login.php'</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
            echo "<script>window.location.href ='registration.php'</script>";
        }
    } else {
        echo "<script>alert('Email Id or Mobile Number already registered. Please try again.');</script>";
        echo "<script>window.location.href ='registration.php'</script>";
    }
}
?>

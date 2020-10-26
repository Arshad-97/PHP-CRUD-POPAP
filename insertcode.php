<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'php-crud-2');

if(isset($_POST['insertdata'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO students(`fname`,`lname`,`course`,`contact`) VALUES('$fname','$lname','$course','$contact')";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo '<script> alert("Data Inserted");</script>';
        header("location:index.php");
    }
    else{
        echo '<script> alert("Data not insert!");</script>';

    }
}

?>
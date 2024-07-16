<?php
require_once "connect.php";

if(isset($_POST['submit'])){
    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $email=$_POST['email'];
    $phoneNumber=$_POST['phone'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['cpassword'];

    if($firstName !="" && $lastName !="" && $email !="" && $phoneNumber !="" && $password !="" && $confirmPassword !=""){
        if(strlen($password) >=6 && strlen($confirmPassword)>= 6){
            if($password === $confirmPassword){
                $sql = "INSERT INTO details(fname, lname, email, phone, password)
                VALUES('$firstName','$lastName','$email','$phoneNumber','$password')";
                if(mysqli_query($conn,$sql)){
                    echo "<script>alert('Data Inserted successfully');window.location.href='welcome.php?fname=$firstName&lname=$lastName&email=$email&phone=$phoneNumber';</script>";

                }else{
                    echo mysqli_error($conn);
                }
            }else{
                echo"<script>alert('Passwords do not match');window.location.href='index.html';</script>";
            }
        }else{
            echo"<script>alert('Passwords must be atleast 6 characters long');window.location.href='index.html';</script>";

        }
    }else{
        echo"<script>alert('Values cannot be null');window.location.href='index.html';</script>";

    }
}
?>
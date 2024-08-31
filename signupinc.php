<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname']; 
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $coursecategory = $_POST['coursecategory'];
    $course = $_POST['course'];

    $sql = "INSERT INTO user (fname, lname, address ,gender , password ,coursecategory ,course ) VALUES (?, ?, ? , ? , ? , ? , ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss",$fname , $lname ,$address,$gender , $email , $password ,$coursecategory , $course );

    if ($stmt->execute()) {
        header("Location: login.php");  // Redirect to login after successful sign-up
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

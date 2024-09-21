<?php
include 'connect.php';

if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $middleName = $_POST['mName'];
    $lastName = $_POST['lName'];
    $age = $_POST['age'];
    $form = $_POST['form'];
    $indexno = $_POST['indexno'];
    $password = $_POST['password'];

    // Check if the index number already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE indexno = ?");
    $stmt->bind_param("s", $indexno);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $signup_error = "Index Number Already Exists!";
        header("location: index.php?signup_error=" . urlencode($signup_error));
        exit();
    } else {
        $insertStmt = $conn->prepare("INSERT INTO users (firstName, middleName, lastName, age, form, indexno, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $insertStmt->bind_param("sssssss", $firstName, $middleName, $lastName, $age, $form, $indexno, $password);
        
        if ($insertStmt->execute()) {
            header("location: index.php");
            exit();
        } else {
            $signup_error = "Error: " . $conn->error;
            header("location: index.php?signup_error=" . urlencode($signup_error));
            exit();
        }
        $insertStmt->close();
    }
    $stmt->close();
}

if (isset($_POST['signIn'])) {
    $indexno = $_POST['indexno'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE indexno = ? AND password = ?");
    $stmt->bind_param("ss", $indexno, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['indexno'] = $indexno;
        header("location: homepage.php");
        exit();
    } else {
        $login_error = "Incorrect index number or password.";
        header("location: index.php?login_error=" . urlencode($login_error));
        exit();
    }
    $stmt->close();
}
?>

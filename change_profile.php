<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['indexno'])) {
    header("location: index.php");
    exit();
}

$indexno = $_SESSION['indexno'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['fName'];
    $middleName = $_POST['mName'];
    $lastName = $_POST['lName'];
    $age = $_POST['age'];
    $form = $_POST['form'];

    $stmt = $conn->prepare("UPDATE users SET firstName = ?, middleName = ?, lastName = ?, age = ?, form = ? WHERE indexno = ?");
    $stmt->bind_param("sssiss", $firstName, $middleName, $lastName, $age, $form, $indexno);

    if ($stmt->execute()) {
        echo "Profile updated successfully!";
    } else {
        echo "Error updating profile: " . $conn->error;
    }

    $stmt->close();
}

$stmt = $conn->prepare("SELECT * FROM users WHERE indexno = ?");
$stmt->bind_param("s", $indexno);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Change Profile</h2>
        <form action="change_profile.php" method="post">
            <label for="fName">First Name</label>
            <input type="text" id="fName" name="fName" value="<?php echo htmlspecialchars($user['firstName']); ?>" required>
            <label for="mName">Middle Name</label>
            <input type="text" id="mName" name="mName" value="<?php echo htmlspecialchars($user['middleName']); ?>">
            <label for="lName">Last Name</label>
            <input type="text" id="lName" name="lName" value="<?php echo htmlspecialchars($user['lastName']); ?>" required>
            <label for="age">Age</label>
            <input type="number" id="age" name="age" value="<?php echo htmlspecialchars($user['age']); ?>" required>
            <label for="form">Form</label>
            <input type="text" id="form" name="form" value="<?php echo htmlspecialchars($user['form']); ?>" required>
            <button type="submit">Update Profile</button>
        </form>
    </div>
</body>
</html>

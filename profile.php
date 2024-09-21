<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['indexno'])) {
    header("location: index.php");
    exit();
}

$indexno = $_SESSION['indexno'];

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
    <title>Student Profile</title>
    <style>
        /* Basic styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #f2f2f2;
            color: #333;
        }
        table td {
            color: #666;
        }
        .queries-section {
            margin-top: 20px;
        }
        .queries-section p {
            margin-bottom: 10px;
        }
        .queries-section ul {
            list-style-type: none;
            padding: 0;
        }
        .queries-section ul li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Profile</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Detail</th>
                    <th>Information</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>First Name</td>
                    <td><?php echo htmlspecialchars($user['firstName']); ?></td>
                </tr>
                <tr>
                    <td>Middle Name</td>
                    <td><?php echo htmlspecialchars($user['middleName']); ?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?php echo htmlspecialchars($user['lastName']); ?></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><?php echo htmlspecialchars($user['age']); ?></td>
                </tr>
                <tr>
                    <td>Form</td>
                    <td><?php echo htmlspecialchars($user['form']); ?></td>
                </tr>
                <tr>
                    <td>Admission Number</td>
                    <td><?php echo htmlspecialchars($user['indexno']); ?></td>
                </tr>
            </tbody>
        </table>

        <div class="queries-section">
            <h2>Queries and Consultations</h2>
            <p>If you have any queries or need further assistance regarding your marks or any other academic matters, please feel free to contact the exam department.</p>
            <p>Contact information:</p>
            <ul>
                <li>Email: exams@example.com</li>
                <li>Phone: +1234567890</li>
            </ul>
        </div>
    </div>
</body>
</html>

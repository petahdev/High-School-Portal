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
    <title>Student Marks</title>
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
        <h1>Student Marks Information</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Marks</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Math</td>
                    <td><?php echo $user['MathMarks']; ?></td>
                    <td><?php echo $user['MathGrade']; ?></td>
                </tr>
                <tr>
                    <td>English</td>
                    <td><?php echo $user['EnglishMarks']; ?></td>
                    <td><?php echo $user['EnglishGrade']; ?></td>
                </tr>
                <tr>
                    <td>Science</td>
                    <td><?php echo $user['ScienceMarks']; ?></td>
                    <td><?php echo $user['ScienceGrade']; ?></td>
                </tr>
                <tr>
                    <td>History</td>
                    <td><?php echo $user['HistoryMarks']; ?></td>
                    <td><?php echo $user['HistoryGrade']; ?></td>
                </tr>
                <tr>
                    <td>Geography</td>
                    <td><?php echo $user['GeographyMarks']; ?></td>
                    <td><?php echo $user['GeographyGrade']; ?></td>
                </tr>
                <tr>
                    <td>Physics</td>
                    <td><?php echo $user['PhysicsMarks']; ?></td>
                    <td><?php echo $user['PhysicsGrade']; ?></td>
                </tr>
                <tr>
                    <td>Chemistry</td>
                    <td><?php echo $user['ChemistryMarks']; ?></td>
                    <td><?php echo $user['ChemistryGrade']; ?></td>
                </tr>
                <tr>
                    <td>Biology</td>
                    <td><?php echo $user['BiologyMarks']; ?></td>
                    <td><?php echo $user['BiologyGrade']; ?></td>
                </tr>
                <tr>
                    <td>Computer</td>
                    <td><?php echo $user['ComputerMarks']; ?></td>
                    <td><?php echo $user['ComputerGrade']; ?></td>
                </tr>
                <tr>
                    <td>PE</td>
                    <td><?php echo $user['PEMarks']; ?></td>
                    <td><?php echo $user['PEGrade']; ?></td>
                </tr>
                <tr>
                    <td>Overall marks</td>
                    <td><?php echo $user['TotalMarks']; ?></td>
                    <td><?php echo $user['OverallGrade']; ?></td>
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

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
    <title>PeezPortal</title>
    <link rel="stylesheet" href="styles3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="script1.js"></script>
</head>
<body>
<div id="container">
    <div id="left-nav">
        <button id="menu-toggle" class="toggle-btn">☰ Toggle Menu</button>
        <ul>
            <div class="logo2"><i class="fa-brands fa-servicestack"></i>WH</div>
            <li style="background-color:white; color:#175006;"><i style="color:#175006;" class="fa-solid fa-handshake"></i>Dashboard</li>
            <li><i class="fa-solid fa-address-card"></i>About us
                <div class="submenu">
                    <a href="#"><i class="fa-solid fa-link"></i>Visit Website</a>
                    <a href="#"><i class="fa-solid fa-plus"></i>Follow us</a>
                </div>
            </li>
            <li><i class="fa-brands fa-servicestack"></i>My Profile
                <div class="submenu">
                    <a href="profile.php"><i class="fa-solid fa-pen-nib"></i>View Profile</a>
                </div>
            </li>
            <li><i class="fa-solid fa-star"></i>Repository
                <div class="submenu">
                    <a href="https://track.deriv.com/_SIZslBNquAjUC5-fI8wshmNd7ZgqdRLk/1/"><i class="fa-solid fa-award"></i>Visit Library</a>
                    <a href="#"><i class="fa-solid fa-binoculars"></i>Downloads</a>
                </div>
            </li>
            <hr>
            <h4 style="margin-left:20px; margin-top:10px; color:white;">SCHOOL</h4>
            <li><i class="fa-solid fa-bullseye"></i>Academics
                <div class="submenu">
                    <a href="Get.php"><i class="fa-regular fa-star"></i>Results Transcript</a>
                </div>
            </li>
            <li><i class="fa-solid fa-building-columns"></i>Financials
                <div class="submenu">
                    <a href="Fees.php"><i class="fa-solid fa-location-crosshairs"></i>Fee Statement</a>
                </div>
            </li>
            <li><i class="fa-brands fa-twitter"></i>Marks Querries
                <div class="submenu">
                    <a href="#"><i class="fa-brands fa-instagram"></i>Contact Department</a>
                </div>
            </li>
            <li><i class="fa-solid fa-address-card"></i>Financial Querries
                <div class="submenu">
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i>Contact Finance</a>
                    <a href="#"><i class="fa-solid fa-tag"></i>Pay</a>
                </div>
            </li>
            <hr>
            <h4 style="margin-left:10px; margin-top:10px; color:white;">SELF SERVE</h4>
            <li><i class="fa-solid fa-address-card"></i>Want to logout
                <div class="submenu">
                    <a href="logout.php">Logout</a>
                </div>
            </li>
            <li><i class="fa-solid fa-headphones"></i>Virtual assistant
                <div class="submenu">
                    <a href="#"><i class="fa-solid fa-person-walking"></i>Walk through</a>
                    <a href="#"><i class="fa-solid fa-question"></i>FAQs</a>
                    <a href="#"><i class="fa-solid fa-handshake-angle"></i>Want help?</a>
                </div>
            </li>
            <p>EMS SOFTWARES.CO</p>
        </ul>
        <button id="exit-btn" class="toggle-btn">✕ Exit menu ✕</button>
    </div>

    <div id="right-content">
        <div id="header">
            <div id="logo"><i class="fa-brands fa-servicestack"></i>PEEZ PORTAL</div>
        </div>

        <div class="heading2"><i class="fa-solid fa-headphones"></i><h2>Dashboard</h2></div>
        <button id="changeProfileButton" onclick="showChangeProfileForm()">Change Profile</button><br>

        <div style="float:right; margin-right:-75px; margin-top:-60px;">
            <a href="logout.php">Logout</a>
        </div>
        <div style="display:flex; align-items:center; justify-content:center; margin-top:70px; margin-left:10px;">
            <h1>Hello, <?php echo $user['firstName'] . ' ' . $user['lastName']; ?></h1>
        </div>

        <div class="profile">
            <h2 style="display:flex; align-items:center; justify-content:center; margin-top:20px; margin-bottom:20px; color:green;">View Your Profile</h2>
            <table>
                <tr>
                    <th>First Name</th>
                    <td><?php echo $user['firstName']; ?></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td><?php echo $user['lastName']; ?></td>
                </tr>
                <tr>
                    <th>Index Number</th>
                    <td><?php echo $user['indexno']; ?></td>
                </tr>
            </table>
        </div>

        <div id="changeProfile" style="display:none;">
            <h2>Change Profile</h2>
            <form id="changeProfileForm">
                <label for="newFirstName">New First Name:</label>
                <input type="text" id="newFirstName" name="newFirstName" value="<?php echo $user['firstName']; ?>">
                
                <label for="newLastName">New Last Name:</label>
                <input type="text" id="newLastName" name="newLastName" value="<?php echo $user['lastName']; ?>">
                
                <label for="newIndexno">New Index Number:</label>
                <input type="text" id="newIndexno" name="newIndexno" value="<?php echo $user['indexno']; ?>">
                
                <button type="submit">Update Profile</button>
            </form>
        </div>

        <div class="para5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio officiis beatae adipisci maiores accusantium!</p>
            <a href="Get.php">Results transcript</a><br>
            <a href="Fees.php">Fee statement</a><br>
        </div>

        <div class="heading2"><i class="fa-solid fa-store"></i><h2>Templates</h2></div>
        <div class="para5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio officiis beatae adipisci maiores accusantium!</p>
            <a href="">Results transcript</a><br>
            <a href="">Fee statement</a><br>
        </div>
    </div>
</div>

<button id="mobile-menu-toggle" class="toggle-btn">☰</button>
<script src="script1.js"></script>
<script>
function showChangeProfileForm() {
    document.getElementById('changeProfile').style.display = 'block';
}

document.getElementById('changeProfileForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);

    fetch('updateProfile.php', {
        method: 'POST',
        body: formData
    }).then(response => response.text())
    .then(data => {
        alert(data);
        document.getElementById('changeProfile').style.display = 'none';
    }).catch(error => {
        console.error('Error:', error);
    });
});
</script>

<footer><p>2024-copyright webhub.co</p></footer>

</body>
</html>

<?php
session_start();

// Check if the nutritionist is logged in
if (!isset($_SESSION['nutritionist_id'])) {
    header("Location: nutritionists_login.php");
    exit;
}

// Database connection
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "CalistheniX_db";

$conn = new mysqli($servername, $username, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch members under the logged-in nutritionist
$nutritionist_id = $_SESSION['nutritionist_id'];
$sql = "SELECT m.id, m.name, m.email, m.phone, m.dob 
        FROM members m
        JOIN nutritionists_guidance ng ON m.id = ng.member_id
        WHERE ng.nutritionist_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $nutritionist_id);
$stmt->execute();
$result = $stmt->get_result();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under My Guidance | Nutritionist</title>
    <link rel="stylesheet" href="css/nutritionists_dashboard.css">
    <style>
        /* Table Styling */
        table {
    padding: 20px;
            margin: 20px auto;
            max-width: 1200px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

thead {
    background-color: #4CAF50;
    color: white;
}

th, td {
    text-align: center;
    padding: 1rem;
    border: 1px solid #ddd;
}

th {
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}



/* Button Styling */
button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #45a049;
}

/* Message Styling */
p {
    text-align: center;
    font-size: 1.2rem;
    color: #4CAF50;
    font-weight: bold;
    margin: 1rem 0;
} 

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/CalistheniX.png" alt="Fitness Center Logo" class="logo-img">
        </div>
        <nav>
            <ul>
                <li><a href="nutritionists_dashboard.php">Dashboard</a></li>
                <li><a href="nutritionists_guidance.php">Under My Guidance</a></li>
                <li><a href="nutritionist_login.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>DOB</th>
                    <th>Give Diet Plan</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['phone']); ?></td>
                        <td><?php echo htmlspecialchars($row['dob']); ?></td>
                        <td>
                            <form action="assign_diet_plan.php" method="POST">
                                <input type="hidden" name="member_id" value="<?php echo $row['id']; ?>">
                                <button type="submit">Assign Plan</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Fitness Center. All rights reserved.</p>
    </footer>
</body>
</html>

<?php
session_start();
include 'config.php'; // Database connection file

// Check if the admin is logged in (assuming there's an admin authentication setup)
//if (!isset($_SESSION['is_admin'])) {
 //   echo "Access Denied!";
 //   exit;
//}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $deposit_amount = $_POST['deposit_amount'];

    if (!empty($user_id) && !empty($deposit_amount)) {
        // Update the balance in the database
        $query = "UPDATE users SET balance = balance + ? WHERE user_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("di", $deposit_amount, $user_id); // "d" for double (amount), "i" for integer (user_id)

        if ($stmt->execute()) {
            echo "User balance updated successfully!";
        } else {
            echo "Error updating balance: " . $stmt->error;
        }
    } else {
        echo "Please fill all fields!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin - Update User Balance</title>
</head>

<body>
    <h1>Update User Balance</h1>
    <form method="POST" action="admin.php">
        <label for="user_id">User ID:</label><br>
        <input type="number" id="user_id" name="user_id" required><br><br>

        <label for="deposit_amount">Deposit Amount:</label><br>
        <input type="number" step="0.01" id="deposit_amount" name="deposit_amount" required><br><br>

        <input type="submit" value="Update Balance">
    </form>
</body>

</html>
<?php
session_start();

// Include the database connection file
include 'koneksi.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate form data
    if (empty($username) || empty($password)) {
        echo "All fields are required!";
    } else {
        // Prepare and bind
        $stmt = $conn->prepare("SELECT id, password FROM tb_admin WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        // Check if user exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $hashed_password);
            $stmt->fetch();

            // Verify password
            if (password_verify($password, $hashed_password)) {
                // Password is correct, start a session
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $username;
                header("Location: admin.php"); // Redirect to admin dashboard
                exit();
            } else {
                echo "Invalid password!";
            }
        } else {
            echo "No user found with that username!";
        }

        // Close the statement
        $stmt->close();
    }
}

// Close connection
$conn->close();
?>
<?php
session_start();

$username = $_POST['login_name'];
$password = $_POST['login_passwd'];

// -------------------------

$dbname = 'm133_webshop';
$dbuser = 'm133_fritz';
$dbpassword = 'aDQBiW4K1JfQXxuM';

try {
    $conn = mysqli_connect('localhost', $dbuser, $dbpassword, $dbname);
    // echo 'Connection successfully';
} catch (PDOException $exception) {
    echo 'Connection failed: ' . $exception->getMessage();
}

$stmt = $conn->prepare("SELECT username FROM users WHERE username = ? AND password = md5(?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows === 0) {
    exit('error');
} else {
    while ($row = $result->fetch_assoc()) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['loggedin'] = true;
    }
}

$stmt->close();
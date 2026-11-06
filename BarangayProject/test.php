<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h2>Step 1: PHP works ✓</h2>";

// Test 1: session_name before start
session_name('TEST_SESSION');
echo "<h2>Step 2: session_name() works ✓</h2>";

session_set_cookie_params(['lifetime'=>0,'path'=>'/','secure'=>false,'httponly'=>true,'samesite'=>'Lax']);
echo "<h2>Step 3: session_set_cookie_params() works ✓</h2>";

session_start();
echo "<h2>Step 4: session_start() works ✓</h2>";

$_SESSION['test'] = 'hello';
echo "<h2>Step 5: Session write works ✓</h2>";

// Test mysqli
$conn = new mysqli('localhost', 'YOUR_DB_USER', 'YOUR_DB_PASS', 'YOUR_DB_NAME');
if ($conn->connect_error) {
    echo "<h2 style='color:red'>Step 6: DB FAILED - " . $conn->connect_error . "</h2>";
} else {
    echo "<h2>Step 6: Database connection works ✓</h2>";
    $conn->close();
}

echo "<hr><h3>PHP Version: " . PHP_VERSION . "</h3>";
echo "<h3>All tests done!</h3>";
?>

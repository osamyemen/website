<?php
// using pdo    
// credentials
$host = 'localhost';
$dbName = 'sample_db';
$myUsername = 'root';
$myPassword = 'pasword';

try {
    // connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $myUsername, $myPassword);
    // disable emulated statements
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // enable PDO error mode to throw exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>

<?php
// get the user input from login form
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query with placeholders for username and password
$sqlQuery = "SELECT * FROM users_test WHERE username = :username AND password = :password";

// create a prepared statement of the query
$stmt = $pdo->prepare($sqlQuery);

// bind the user input to the prepared statement's parameters
$stmt->execute(['username' => $username, 'password' => $password]);

?>
<?php
$userInput = $_POST['username'];
$username = '';

if (preg_match('/^[A-Za-z0-9_-]{3,10}$/', $userInput)) {
    echo 'Valid username';
    $username = $_POST['username'];
} else {
    echo 'Username can only contain letters, numbers, underscores, and hyphens. It must be between 3 and 10 characters long.';
}

?>






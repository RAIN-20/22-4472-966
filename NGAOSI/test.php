test.php
<?php
// Example: Insert a user record into a table named 'users'

// 1. Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';

if (empty($name) || empty($email)) {
    die("Name and email are required.");
}

try {
    // 2. Connect to the database
    $dsn = "mysql:host=localhost;dbname=mydatabase;charset=utf8mb4";
    $user = "dbuser";
    $pass = "dbpassword";

    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 3. Prepare SQL statement
    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $stmt = $pdo->prepare($sql);

    // 4. Execute SQL statement with form data
    $stmt->execute([
        ':name' => $name,
        ':email' => $email
    ]);

    // 5. Optional: Get the ID of the inserted record
    $newId = $pdo->lastInsertId();

    echo "Record added successfully. New ID: " . $newId;

} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
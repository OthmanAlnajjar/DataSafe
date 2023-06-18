<?php include "./controller/server.php";?>

<?php


// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $password = $_POST['password']; // User-entered password

    // Generate a unique sharing code
    function generateUniqueCode() {
        // Implement your logic to generate a unique code
        // Example: Generate a random 6-digit alphanumeric code
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        for ($i = 0; $i < 6; $i++) {
            $code .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $code;
    }
    $sharingCode = generateUniqueCode();

    // Insert the user data into the users table
    $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, age, address, email, phone, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$firstName, $lastName, $age, $address, $email, $phone, $description]);

    // Retrieve the newly inserted user ID
    $userId = $pdo->lastInsertId();

    // Insert the sharing details into the sharing table
    $stmt = $pdo->prepare("INSERT INTO sharing (user_id, sharing_code, password) VALUES (?, ?, ?)");
    $stmt->execute([$userId, $sharingCode, $password]);

    // Provide the sharing code to the user
    echo "Your sharing code: $sharingCode<br>";
}
?>

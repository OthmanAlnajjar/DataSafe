<?php include "server.php";
include "../header.php";?>

<?php


// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get the form data
    $userId = $_POST['userId'];
    $sharingCode = $_POST['sharingCode'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $password = $_POST['password']; 


    // update the user data into the users table
    $stmt = $pdo->prepare("UPDATE users SET first_name = ?, last_name = ?, age = ?, address = ?, email = ?, phone = ?, description = ? WHERE user_id = ?");
    $stmt->execute([$firstName, $lastName, $age, $address, $email, $phone, $description, $userId]);
    

    // update the sharing details into the sharing table
    $stmt = $pdo->prepare("UPDATE sharing SET password = ? WHERE user_id = ?");
    $stmt->execute([$password, $userId]);

}
echo "Updeted";


?>

<?php

$show=true;
// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $show=false;
    // Get the sharing code from the form
    $sharingCode = $_POST['sharingCode'];

    // Retrieve the user data using the sharing code
    $stmt = $pdo->prepare("SELECT * FROM users WHERE user_id IN (SELECT user_id FROM sharing WHERE sharing_code = ?)");
    $stmt->execute([$sharingCode]);

    // Display the user data if found
    //put from the  first echo to the last echo in a div.box
    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        echo '<div class="box">';
        echo "First Name: " . $user['first_name'] . "<br>";
        echo "Last Name: " . $user['last_name'] . "<br>";
        echo "Age: " . $user['age'] . "<br>";
        echo "Address: " . $user['address'] . "<br>";
        echo "Email: " . $user['email'] . "<br>";
        echo "Phone: " . $user['phone'] . "<br>";
        echo '</div>';
    } else {
        echo "User not found";
    }
}

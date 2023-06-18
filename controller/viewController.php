<?php include "./controller/server.php";?>

<?php


// Process form submission
$show=false;
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
    $show=true;

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

   
}
?>

<script>
function copyToClipboard() {
    // Get the sharing code element
    let sharingCodeElement = document.getElementById('sharingCode');

    // Create a temporary input element
    let tempInput = document.createElement('input');
    tempInput.value = sharingCodeElement.textContent;

    // Append the input element to the document body
    document.body.appendChild(tempInput);

    // Select the input element's content
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); // For mobile devices

    // Copy the selected content to the clipboard
    document.execCommand('copy');

    // Remove the temporary input element
    document.body.removeChild(tempInput);

    // Show a success message
    alert('Sharing code copied to clipboard!');
}
</script>

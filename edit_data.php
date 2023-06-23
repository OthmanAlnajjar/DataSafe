<?php include "./controller/server.php";?>

<?php
include "header.php";

$show2 = false;
$show = true;
/*
if ($show2) {
    // This will only apply as a last check-up if the user is finished and clicked on update

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
        $password = $_POST['password'];
        $userId = $pdo->lastInsertId();

        // Update the user data into the users table
        $stmt = $pdo->prepare("UPDATE users SET first_name = ?, last_name = ?, age = ?, address = ?, email = ?, phone = ?, description = ? WHERE user_id = ?");
        $stmt->execute([$firstName, $lastName, $age, $address, $email, $phone, $description, $userId]);

        // Update the sharing details into the sharing table
        $stmt = $pdo->prepare("UPDATE sharing SET sharing_code = ?, password = ? WHERE user_id = ?");
        $stmt->execute([$sharingCode, $password, $userId]);
    }
}*/

// Process form submission
if (!$show2) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $show = false;
        $show2 = true;
        // Get the sharing code and password from the form
        $sharingCode = $_POST['sharingCode'];
        $sharingPassword = $_POST['sharingPassword'];

        // Retrieve the user data using the sharing code
        $stmt = $pdo->prepare("SELECT * FROM users JOIN sharing ON users.user_id = sharing.user_id WHERE sharing.sharing_code = ?");
        $stmt->execute([$sharingCode]);

        // Check if the sharing code and password match
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user['password'] === $sharingPassword) {
                ?>
                <form action="./controller/editController.php" method="POST">
                    <h2>ACCESS GAINED:</h2>
                    <br>
                    <input type="hidden" name="userId" value="<?php echo $user['user_id']; ?>">
    <input type="hidden" name="sharingCode" value="<?php echo $sharingCode; ?>">
                    <label for="firstName">First Name:</label>
                    <input type="text" name="firstName" value="<?php echo $user['first_name']; ?>" id="firstName" required>
                    <br>
                    <label for="lastName">Last Name:</label>
                    <input type="text" name="lastName" value="<?php echo $user['last_name']; ?>" id="lastName" required>
                    <br>
                    <label for="age">Age:</label>
                    <input type="number" name="age" value="<?php echo $user['age']; ?>" id="age" required>
                    <br>
                    <label for="address">Address:</label>
                    <input type="text" name="address" value="<?php echo $user['address']; ?>" id="address" required>
                    <br>
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="<?php echo $user['email']; ?>" id="email" required>
                    <br>
                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" value="<?php echo $user['phone']; ?>" id="phone" required>
                    <br>
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" rows="4" cols="30"><?php echo $user['description']; ?></textarea>
                    <br>
                    <label for="password">Password:</label>
                    <input type="text" value="<?php echo $user['password']; ?>" name="password" id="password" required>
                    <br>
                    <input type="submit" value="Update" class="btn">
                </form>
                <?php
            } else {
                echo "Wrong password";
            }
        } else {
            echo "User not found";
        }
    }
}
?>

<?php if ($show == true) { ?>
    <form action="edit_data.php" method="POST">
        <label for="sharingCode">Enter Sharing Code:</label>
        <input type="text" name="sharingCode" required>
        <label for="sharingPassword">Enter Password:</label>
        <input type="password" name="sharingPassword" required>
        <input type="submit" value="Access User Data" class="btn">
    </form>
<?php } ?>

<?php include "footer.php"; ?>

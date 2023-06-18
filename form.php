<?php include "header.php"?>
<?php include "./controller/server.php";?>

<?php include "./controller/viewController.php";?>
<br>
<br>

<?php if ($show==false) { ?>
    <form action="form.php" method="POST">
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" id="firstName" required>
        <br>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" id="lastName" required>
        <br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>
        <br>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" cols="30"></textarea>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required placeholder="You will need this password to edit your data">
        <br>
        <input type="submit" value="Submit" class="btn">
    </form>
<?php } else { ?>
    <h2>dear <?php echo $firstName; ?> Thank you for using our website</h2>
    <?php // Provide the sharing code to the user
    if($show===true){
        echo "Your sharing code: <button onclick='copyToClipboard()' id='sharingCode'>$sharingCode</button> ";

    }?></p>
    <p>Last Name: <?php echo $lastName; ?></p>
    <p>Age: <?php echo $age; ?></p>
    <p>Address: <?php echo $address; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Phone: <?php echo $phone; ?></p>
    <p>Description: <?php echo $description; ?></p>
    <p>Password: <?php echo $password; ?></p>

<?php } ?>


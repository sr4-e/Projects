<?php
// Include database connection
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign Up & Sign In</title>
</head>
<body>

<div class="container">
    <div class="content">
        <!-- Sign Up Page (signup.php) -->
        <h1>Sign Up</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];

            $errors = [];

            // Validation
            if (strlen($phone) !== 9 || !preg_match('/^(77|78|73)\d{7}$/', $phone)) {
                $errors[] = 'Invalid phone number. It should start with 77, 78, or 73 and have 9 digits.';
            }
            if ($password !== $confirm_password) {
                $errors[] = 'Passwords do not match.';
            }

            if (empty($errors)) {
                // Hash the password
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                // Insert into database
                $stmt = $pdo->prepare("INSERT INTO users (name, email, password, phone, gender) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$name, $email, $hashed_password, $phone, $gender]);

                echo "<p>Registration successful! You can <a href='signin.php'>Sign In</a> now.</p>";
            } else {
                foreach ($errors as $error) {
                    echo "<p style='color:red;'>$error</p>";
                }
            }
        }
        ?>

        <form method="post" action="">
            <div class="input__group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="input__group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input__group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="input__group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <div class="input__group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required>
            </div>

            <div class="input__group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <button type="submit" name="signup">Sign Up</button>
        </form>

        <hr>

        <!-- Sign In Page (signin.php) -->
        <h1>Sign In</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signin'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Fetch user from database
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                echo "<p>Sign In successful! Redirecting...</p>";
                // You can redirect to the next page here
                // header("Location: nextpage.php");
            } else {
                echo "<p style='color:red;'>Invalid email or password.</p>";
            }
        }
        ?>

        <form method="post" action="">
            <div class="input__group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input__group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" name="signin">Sign In</button>
        </form>
    </div>
</div>

</body>
</html>

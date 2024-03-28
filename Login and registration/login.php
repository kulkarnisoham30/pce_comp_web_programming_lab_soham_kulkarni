<?php
// PHP code for database connection and form handling
// Database connection details (replace with your actual credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define error variable
$error = "";

// Check if login form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Escape user input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if email and password are provided
    if (empty($email) || empty($password)) {
        $error = "Please enter your email and password.";
    } else {
        // Fetch user data based on email
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();  // Get user data as an associative array

            // Verify password using password_verify (requires password_hash in registration)
            if (password_verify($password, $user['password'])) {
                // Login successful (redirect or start session)
                session_start();  // Start session if not already started
                $_SESSION['user_id'] = $user['id'];  // Store user ID in session
                header("Location: ../Home/home.php");  // Replace with your home page or further actions
                exit();  // Ensure script stops execution after redirection
            } else {
                $error = "Invalid email or password.";
            }
        } else {
            $error = "Invalid email or password.";
        }
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for character set and viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the webpage -->
    <title>Login Page</title>
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/x-icon">
    <!-- Internal CSS styling -->
    <script src="/javascriptforvalidation.js"></script>
    <style>
        
        /* Styling for the container */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        /* Body background image and size */
        body {
            background-image: url(https://th.bing.com/th/id/OIG4.wYpe0LYYfpVwGX3kde62?w=270&h=270&c=6&r=0&o=5&dpr=2.5&pid=ImgGn);
            background-size: cover;
        }
        /* Styling for the login box */
        .box {
            display: flex;
            background-color: rgb(232, 252, 233);
            height: 80vh;
            width: 25vw;
            border: 2px solid black;
            justify-self: center;
            align-items: center;
            border-radius: 25px;
            padding: 20px;
            box-shadow: 10px 10px 10px rgb(113, 107, 107);
        }
        /* Styling for text input */
        input[type="text"] {
            margin-top: 10px;
            height: 20px;
            border-radius: 10px;
            border: 1px solid rgb(15, 17, 15);
        }
        input[type="password"] {
            margin-top: 10px;
            height: 20px;
            border-radius: 10px;
            border: 1px solid rgb(15, 17, 15);
        }
        /* Styling for labels */
        label {
            margin-bottom: 10px;
            font-weight: bold;
        }
        /* Styling for the register button */
        .ke {
            color: black;
            background-color: aqua;
            border-radius: 20px;
            margin-left: 65px;
            margin-top: 20px;
            width: 65px;
            height: 30px;
            cursor: pointer;
        }
        /* Styling for fieldset */
        fieldset {
            height: auto;
            width: 200px;
            border-radius: 25px;
            margin: auto;
            background-color: aquamarine;
            padding: 20px;
        }
        /* Styling for content */
        .content {
            margin: auto;
            justify-content: center;
            align-items: center;
        }
        /* Styling for the forgot password and new user links */
        span {
            /* Aligning the links */
            text-align: left;
            /* Margin to separate links */
            margin-right: 5px;
            /* Link color */
            color: blue;
        }

        /* Styling for the new user link */
        span:nth-child(2) {
            /* Aligning the link */
            text-align: right;
            /* Margin to separate links */
            margin-left: 5px;
        }
        #myCanvas {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        a {
            text-decoration: none;
        }
    </style>

</head>

<body>
    <!-- Your HTML content -->
    <!-- Container for the login box -->
    <div class="container">
        <div class="box">
            <!-- Fieldset with legend for login -->
            <fieldset>
                <!-- Legend for the fieldset -->
                <legend>Login page</legend>
                <!-- Form for user login -->
                <?php if (!empty($error)): ?>
                    <p style="color: red;"><?php echo $error; ?></p>
                <?php endif; ?>
                <form class="content" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return validateForm();" method="post">
                    <!-- Email input field -->
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="abcd@gmail.com" required><br>
                    <!-- Password input field -->
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="xxxxxxx" required><br>
                    <!-- Submit button for user registration -->
                    <button type="submit" class="ke">Register</button>
                </form>
                
                <!-- Link for password recovery -->
                <span>Forgot password</span>
                <!-- Link for new user registration -->
                <a href="/Login and registration/registration.php">New user</a>
                
            </fieldset>
        </div>
    </div>
</body>

</html>
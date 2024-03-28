<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/x-icon">
    <title>Login Page</title>
    <!-- CSS Styles -->
    <script src="/javascriptregistartion.js"></script>
    <style>
        body {
            /* Background image */
            background-image: url(https://th.bing.com/th/id/OIG4.wYpe0LYYfpVwGX3kde62?w=270&h=270&c=6&r=0&o=5&dpr=2.5&pid=ImgGn);
            background-size: cover;
            
        
        }

        /* Styling for the main container */
        div.hi {
            border-radius: 25px;
            background-size: cover;
            padding: 10px;
            margin: 0 auto; /* Center the div horizontally */
            margin-top: 10%; /* Adjust margin from top */
            background-color: rgb(232, 252, 233);
            height: auto; /* Allow height to adjust based on content */
            width: 500px;
            overflow: hidden;
        background-image: url();
            max-height: 100%; /* Set a maximum height */
        }

        fieldset {
            color: rgb(13, 13, 13);
            border: 2px solid black;
            margin: auto; /* Center the fieldset horizontally */
            /* Adjust margin from top */
        }

        button {
            background-color: rgba(8, 208, 71, 0.749);
            border-radius: 20px;
            margin: 20px 0; /* Adjust margin */
            height: 30px;
            width: 80px;
            padding: 2px;
            text-align: center;
            display: block; /* Ensure button is a block element */
            margin-left: auto; /* Center button horizontally */
            margin-right: auto; /* Center button horizontally */
        }

        input[type="text"] {
            width: 200px;
            height: 30px;
            border-radius: 10px;
            color: rgb(8, 7, 7);
            display: block; /* Ensure input is a block element */
            margin: auto; /* Center input horizontally */
        }

        /* Styling for labels */
        .k {
            text-align: center;
            font-weight: 900;
        }

        /* Positioning for the canvas */
        #myCanvas {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        a {
            text-decoration: none;
            color:rgb(13, 13, 13);
        }

        #sign-in {
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Canvas for the tagline -->
   
    
    <!-- Main container for the registration form -->
    <div class="hi">
        <!-- Registration form -->
        <!-- Form for user login -->
        <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
        <form class="content" name="myform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return validateForm();" method="post">
            <!-- Fieldset for grouping form elements -->
            <fieldset style="border-radius: 25px;">
                <canvas id="myCanvas" width="400" height="70"></canvas>
                <!-- Legend for the fieldset -->
                <legend style="color: rgba(6, 27, 21, 0.856); font-weight: bold;">Registration page</legend>
                <!-- Name input field -->
                <p class="k"> <label for="name">Name:</label></p>
                <input type="text" id="name" name="name" placeholder="Name" required>
                <!-- Email input field -->
                <p class="k"> <label for="email">E-mail Id:</label></p>
                <input type="email" id="email" name="email" placeholder="abcd@gmail.com" required>
                <!-- Phone number input field -->
                <p class="k"> <label for="phone">Phone No:</label></p>
                <input type="text" id="phone" name="phone" placeholder="92932XXXXX" required>
                <!-- Password input field -->
                <p class="k"> <label for="password">Password:</label></p>
                <input type="password" id="password" name="password" placeholder="XXXXXX" required>
                <br>
                <!-- Register button -->
                <button style="cursor: pointer;" type="submit" name='submit' >Register</button>
                <div id="sign-in">Already a user? <a href="login.php">Sign in</a></div>
            </fieldset>
        </form>
        
    </div>

    <!-- JavaScript for drawing the tagline -->
    <script>
        var c = document.getElementById("myCanvas");
        var ctx = c.getContext("2d");
        
        // Draw text with modified font size and weight
        ctx.font = "bold 24px Arial";
        ctx.fillStyle = "black";
        ctx.fillText("Precision Irrigation,", 10, 30);
        ctx.fillText("Prosperous Harvests", 10, 60);
    </script>

<?php


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



if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $phoneno=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $username = mysqli_real_escape_string($conn, $username );
    $password = mysqli_real_escape_string($conn, $password );


    $query = "SELECT * FROM users WHERE name = '{$name}' ";
    $select_user_query = mysqli_query($conn,$query);
 
    if(!$select_user_query){
        die("QUERY FAILED".mysqli_error($conn));
 
    }
    
    while($row = mysqli_fetch_array($select_user_query)){
 
   
        $db_user_id=$row['id'];
        $db_username=$row['name'];
        $db_user_password=$row['password'];
        $db_email=$row['email'];
        $db_user_phoneno=$row['phoneno'];
     }

    // if($name==$db_username){
    //     echo"user already exist";
    //     return;
    // }


    // <!-- password encrypition -->
    
    $encrypted_password=password_hash($password,PASSWORD_BCRYPT,array('cost' => 12));

    $query = "INSERT INTO users(name,email,phoneno,password)";
    $query .= " VALUES ('{$name}','{$email}','{$phoneno}','$encrypted_password')";

    $result = mysqli_query($conn,$query);
    if(!$result){
        die('Query Failed'.mysqli_error($conn));
    }
}


?>

    
</body>
</html>
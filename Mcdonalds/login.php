<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>Login</title>

    <style>
       header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #ffcc00;
    padding: 10px 20px;
    position: relative;
    
}
#search-bar {
    padding: 10px;
    border-radius: 20px; /* Adjust the border-radius value to change the roundness */
    border: 2px solid #ddd; /* Border color */
    font-size: 16px;
    outline: none; /* Remove outline when focused */
    transition: border-color 0.3s ease; /* Smooth transition for border color change */
    width: 300px; /* Adjust width as needed */
    margin-left: 10%;
}

/* Style for hover and focus effects */
#search-bar:hover,
#search-bar:focus {
    border-color: #aaa; /* Border color when hovered or focused */
}

.button-primary {
    padding: 10px 20px;
    border-radius: 20px;
    border: none;
    background-color: #007bff; /* Blue color */
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-right: 1%; /* Set margin to position the logo */

}

/* Hover and focus effects */
.button-primary:hover,
.button-primary:focus {
    background-color: #0056b3; /* Darker blue color */
}

/* Style for secondary button (Login) */
.button-secondary {
    padding: 10px 20px;
    border-radius: 20px;
    border: none;
    background-color: #28a745; /* Green color */
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-right: 10%; /* Set margin to position the logo */
}

/* Hover and focus effects */
.button-secondary:hover,
.button-secondary:focus {
    background-color: #218838; /* Darker green color */
}

    </style>
</head>
<body>
<header>
        <a href="index.html"><img src="logo.png" alt="McDonald's Logo" id="logo"></a>
        <input type="text" id="search-bar" placeholder="Search...">
       
        </div>
        
    
        <a href="register.php" class="button button-primary">Sign Up</a>
        <a href="login.php" class="button button-secondary">Login</a>
        
    </header>
    
      <div class="container">
        <div class="box form-box">
            <?php 
             
              include("php/config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                   echo "<a href='login.php'><button class='btn'>Go Back</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: home.php");
                }
              }else{

            
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>Register</title>

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
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>

            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="login.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
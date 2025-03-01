<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>Home</title>

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
        <a href="index2.php"><img src="logo.png" alt="McDonald's Logo" id="logo"></a>
        <input type="text" id="search-bar" placeholder="Search...">
        
        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

        </div>
        
    
        
    </header>



    </div>
    <main>

       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
            </div>
            <div class="box">
                <p>Your email is <b><?php echo $res_Email ?></b>.</p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                <p>And you are <b><?php echo $res_Age ?> years old</b>.</p> 
            </div>
          </div>
       </div>

    </main>
</body>
</html>
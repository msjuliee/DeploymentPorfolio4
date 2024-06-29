
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <meta name="description" content="Web application development" />
 <meta name="keywords" content="PHP" />
 <meta name="author" content="Linh Dan Nguyen" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style.css">
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 <title>Assignment 2 | Sign Up</title>
</head>
<body>

    <style>
        <?php include 'style.css'; ?>
    </style>
    
    <!-- Header & Navigation Bar -->
    <?php include 'functions/header.php'; ?>


    <!-- Body: Sign up Page-->
    <div class="registerForm"> 
        <div class="registerInfo">  <!-- the form -->


            <h1 class="registerTitle">SIGN UP</h1>
            
            <form action ="signup.php" method = "post" >
                <div class="registerContent">
                    <label>Email </label> <br>
                    <input type="text" name="email" class="form_input">
                    <br>

                    <label>Profile Name</label> <br>
                    <input type="text" name="profile" class="form_input">
                    <br>

                    <label>Password </label> <br>
                    <input type="password" name="password" class="form_input">
                    <br>

                    <label>Confirm Password</label> <br>
                    <input type="password" name="confirm" class="form_input">
                    <br>
                </div>
                
                <div class="formButton">
                    <input type="submit" name="submit" value="Sign Up" id="submitButton">
                    <input type="submit" name="reset" id="resetButton" value="Clear">
                </div>
            </form>
        </div>
    </div>
    
    <div class="bottomLink">
        <a href="index.php" id="homeButton">← BACK TO HOME</a>
    </div>
    
</body>
</html>
<?php 

$errorMessage="";
if($_SERVER['REQUEST_METHOD']=='GET'){
    if($_GET['status']=='200'){
        
    }
    else if($_GET['status']=='nouser'){
        $errorMessage="User not registered";
    }
    else if($_GET['status']=='wpass'){
        $errorMessage="wrong password";
    }
}



echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div class="container">
        <div class="mainform">
            <img id="iitbhilailogo" src="https://www.iitbhilai.ac.in/index.php?pid=img_logo" alt="IIT Bhilai Logo">
            <h2>Mess Transactions</h2>
            <h3 style="color:red;">'.$errorMessage.'</h3>
            <form action="./handler/loginHandler.php" method="post">
                <input class="input" type="number" id="idNum" name="idNum" placeholder="Enter your ID Number" required>
                <input class="input" type="password" id="password" name="password" placeholder="Enter your Password"
                    required>
                <button name="submit" id="submit" type="submit">Login</button>
            </form>
            <a href="./signup.php">
                <h5>Don\'t have an account ? Signup Here</h5>
            </a>
        </div>
    </div>
</body>

</html>';

?>

<?php
    if (isset($_COOKIE['pharmacist'])) 
    {
         header("location: Pharmacist.php");
    }
    if (isset($_COOKIE['accountant'])) 
    {
         header("location: Accountant.php");
    }
    else
    {
            if(isset($_GET['status']))
            {
                $status = $_GET['status'];

                if($status == "invaliduser")
                {
                    echo "Invalid user info! try again...";
                }
                else if($status == "nullvalue")
                {
                    echo "Username/password can't be empty";
                }
            }
    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Login</title>
    <link rel="stylesheet" href="LoginCss.css">
</head>
<body>
     <form class="box" method="post" action="LoginValidation.php">
         <img src="log_p.png" class="user">
         <h1><b>User Login</b></h1>
         <input type="text" name="Username" placeholder="Username"\>
         <input type="password" name="Password" placeholder="Password"\>
         <input type="checkbox" name="remember">Remember me
         <a class="tag" href="AddPharmacist.php">New Pharmacist ? Register</a>
         <input type="submit" name="Submit" value="Login" >        
     </form>
</body>
</html>
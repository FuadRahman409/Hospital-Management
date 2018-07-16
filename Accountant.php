
 <?php
  session_start();
  
  if($_SESSION['abc']=='123')
  {}
  else{
    header("location: LoginPage.php");

  }
  
?>

<html>
<html lang="en-ca">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="Accountant.css">
</head>
<body id="home"> 

<div class="outer">
	<title>Accountant Page</title>
	
	<nav>
        <ul>
            <li class="PI"><a href="GenerateTotalBill.php"><b>Generate Total Bill</a></li>
            <li class="PS"><a href=""><b>Patient Search</a></li>
            <li class="PS"><a href="AccountantLogout.php"><b>Logout</a></li>
                      
        </ul>
    </nav>
	
		
</body>
</html>

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
    <link rel="stylesheet" href="Pharmacist.css">

<body id="home"> 

<div class="outer">
	<title>Pharmacist Page</title>
	
	<nav>
        <ul>
            <li class="PS"><a href=""><b>PATIENT SEARCH</a></li>
            <li class="MB"><a href="Medicin_Dlivery_Page.php"><b>MEDICINE DELIVERY</a></li>
            <li class="SB"><a href=""><b>SEND BILL</a></li>&nbsp    &nbsp  &nbsp &nbsp 
            <li class="SB"><a href="PharmacistLogout.php">Logout</a></li>       
        </ul>
    </nav>
	
		
</body>
</html>
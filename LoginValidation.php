
<?php
	
	session_start();

	if(isset($_POST['Submit']))
	{

		$username = $_POST['Username'];
		$password = $_POST['Password'];
		$type=trim($_POST['Type']);


		
		if($username == "" || $password == "")
		{

			header("location: LoginPage.php?status=nullvalue");
			
		}
		else
		{

			$myfile = fopen("Login.txt", 'r');
			$isvalid = "";
			

			while (!feof($myfile)) 
			{
				
				$data = fgets($myfile);
				$arr = explode("|", $data);
			
				if($arr[0]==$username && $arr[1]==$password && trim($arr[2])=="pharmacist" )
				{
					
					  $_SESSION['abc'] = "123";
					  $isValid = "valid";

					  if($_POST['remember']=="on")
					  {
						setcookie("pharmacist", "valid", time()+3600,'/');
					  }
				      header("location: Pharmacist.php");
				   		    
				}
				
				if($arr[0]==$username && $arr[1]==$password && trim($arr[2])=="accountant" )
				{   
					
					  $_SESSION['abc'] = "123";
					  $isValid = "valid";

					  if($_POST['remember']=="on")
					  {
						setcookie("accountant", "valid", time()+3600,'/');
					  }
				      header("location: Accountant.php");
				   		    
				}
		
		
			}
			fclose($myfile);

		}
	}

?>
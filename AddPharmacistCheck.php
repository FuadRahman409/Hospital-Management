	<?php

     if(isset($_POST['submit']))
     {
		 if(!empty($_POST['aid']))
     {
          $id = $_POST['aid'];
	      echo " Pharmacist  ID: ".$id."<br/;>"; 
    }
     else
	{
		echo " ID Field Cannot be Empty"."<br/>";
	}
	 
     
	 if(!empty($_POST['puname']))
	{ 
		
		$name = $_POST['puname'];
	    if($name[0]=="a"||$name[0]=="h"||$name[0]=="I"||$name[0]=="F"||$name[0]=="A"||$name[0]=="K")
		        {
		     if(strlen($_POST['puname'])>=2)
		            {
		              		 $name = $_POST['puname'];
		                     echo "Pharmacist UserName: ".$name."<br/;>";               
	                } 
	         else
	                {
	    	                 echo " At Least Two Letters needed"."<br/>"; 
	                }
		           
		        }
		else
	            {
	    	       echo "Start with a letter "."<br/>"; 
	            }

	}
	else
	{
		echo " Name Field Cannot be Empty"."<br/>";
	}

    if(!empty($_POST['ppw']))
    {
       
          $dpass = $_POST['ppw'];
		  echo " pass: ".$dpass."<br/;>"; 
    }
    else
	{
		echo " Password Field Cannot be Empty"."<br/>";
	}



	if(!empty($_POST['pemail']))
	{     
		   $str =$_POST['pemail']; 
		   if (strspn($str,"@")<=0)
		           {
		           	    if(substr_count($str,"@")==1)
		           	      {
			                $str =$_POST['pemail']; 
							$arr_email=explode("@",$str);
							if (count($arr_email)>=2) 
							    {
									$last_index=$arr_email[count($arr_email)-1];
									$arr_email=explode(".",$last_index);
									if (count($arr_email)>=2) 
									   {
									   	     if ($arr_email[0]=="") 
									   	     {
									   	     	echo " Ivalid Email Address"."<br/>";
									   	     }
									   	     elseif ($arr_email[count($arr_email)-1]=="") 
									   	     {
									   	     	echo " Ivalid Email Address"."<br/>";
									   	     }
									   	     else
									   	     {
									   	     		if (stristr($str,".com")==".com") 
	        		                                       {
	        			                                        $email = $_POST['pemail'];
		                                                        echo "Email: ".$email."<br/>";

          		                                           }
	        		                                       else
	        		                                       {
	        		                                       	    echo "Invalid Email Address"."<br/>";
	        		                                       }
									   	     	
									   	     }

									   }
									else
							           {
								           echo " Ivalid Email Address"."<br/>";
							           }

								}
							else
							{
								echo " Ivalid Email Address"."<br/>";
							}

						}
						else
						{
						   echo " Ivalid Email Address"."<br/>";
						}					
				 }	
				 else
					{
					   echo " Ivalid Email Address"."<br/>";
					}
	     }
	else
	{
		echo " Email Field Cannot be Empty"."<br/>";
	}

	
     if(!empty($_POST['pq']))
	 { 
        echo "No Qualification added"."<br/>"; 
     } 
     else
     {
     	$degree	= $_POST['pq'];
     	echo "Qualification: ".$degree."<br/>";
     }

     if($_POST['pgender'] == "Select")
     {
     echo "Please select a gender"."<br/>";
     }
     else
     {
      $gender = $_POST['pgender'];
      echo "Gender : ".$gender."<br/>";
     }
	 
	 
	  	$username = $_POST['puname'];
		$password = $_POST['ppw'];
		$role=$_POST['Prole'];


		if($username == "" || $password == "" || $role == "")
		{

		
			header("location: AddPharmacist.php");

		}else
		{

			$myfile = fopen("Login.txt", 'a');
			$data = $username."|".$password."|".$role."\r\n";
			fwrite($myfile, $data);
			fclose($myfile);

			header("location: LoginPage.php");

		}


     }

?>
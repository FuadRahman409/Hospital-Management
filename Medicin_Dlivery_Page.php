<html>
<head>
	<title>Medicin delivery page</title>
	<link rel="stylesheet" type="text/css"href="Medicin_Dlivery_Page.css"/>
</head>
<body>
    <div id="row">
	<div id="column">
	<center>
	<h2><b>Medicin delivery page</b></h2>
	   <a href="Pharmacist.php"><b>Back</b></a>
		<form method="Post" action="">
		
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
			</br></br>			
		    Patient Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;: 
			<input type="text" name="patient_Id" value=""></br></br></br>
			
			Table Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;: <input type="text" name="Table_Price" value=""></br></br>
			
			Syrup Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;: <input type="text" name="SyrupPrice"/><br/></br>
			
			Antibiotics Price &nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;: <input type="text" name="Antibiotics_Price"/><br/></br>
			
			Injection Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;: <input type="text" name="Injection_Price" value=""></br></br>
			
			Ointment Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;: <input type="text" name="Ointment_Price" value=""></br></br>
			
			Medkits Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			: <input type="text" name="Medkits_Price" value=""></br></br>
			
			Medical Test Price &nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
			<input type="text" name="Medical_Test_Price" value=""></br></br>
			
			Surgery Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
			<input type="text" name="Surgery_Price" value=""></br>           
						 
			
		</form>
	</center>
	</div>
	<div id="column">
            </br></br></br></br></br>	
			<center><input type="text" size="25" name="search_bar" value="">&nbsp;&nbsp;
			<input type="submit" name="search" value="Search"/>
			</center> 
            
			
			/* Grid view table needed here */
			
			
			<p align="center">			 
			<input type="submit" name="Insert" value="Insert"/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input type="submit" name="Update" value="Update"/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="Delete" value="Delete"/>
			</p>
	</div>
	<div id="column">
	   
	    </br></br></br></br></br>
		<fieldset>
	        <b>Price list</b></br>
			    &nbsp;&nbsp;Table 10tk/pics</br> 
	   	        &nbsp;&nbsp;Syrup 25tk/pics </br>
				&nbsp;&nbsp;Antibiotics 18tk/pics </br>
				&nbsp;&nbsp;Injections 40tk/pics </br>
				&nbsp;&nbsp;Ointments 35tk/pics </br>
				&nbsp;&nbsp;Drops 55tk/pics </br>
				&nbsp;&nbsp;Medkits 60tk/pics </br>
				&nbsp;&nbsp;Any type of Medical test 300tk </br>
				&nbsp;&nbsp;Surgery cost 40,000tk </br>
	   </fieldset>
	</div>
</body>
</html>


<?php

?>
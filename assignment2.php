


	<?php 
			 $name = $_GET["name"]; 
			 $email = $_GET["email"];
			 $phonenumber = $_GET["phonenumber"];
			 $state = $_GET["state"];
			 $selected_radio = $_GET["gender"];
			 $comments = $_GET["comments"];
			 echo "<h1>Name: " . $name . "</h1>";
			 echo "<h1>Email: " . $email . "</h1>";
			 echo "<h1>Phone number: " . $phonenumber . "</h1>";
			 
			 echo "<h1>State of residence: " . $state . "</h1>";
			
			
			if ($selected_radio == 'male') {
			$male_status = 'checked';
			$gender = 'male';
			} else if ($selected_radio == 'female') {
			$female_status = 'checked';
			$gender = 'female';
			}

			echo "<h1>Gender: " . $gender . "</h1>";
			echo "<h1>Comments: " . $comments . "</h1>";

?>





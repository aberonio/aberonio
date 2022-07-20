<?php
//Validates entries in form and gives error message if empty
$name = $address = $email = "";
$nameErr = $addressErr = $emailErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if(empty($_POST["name"])) {
		$nameErr = "Name is required!";
	}else{
		$name = $_POST["name"];
	}


	if(empty($_POST["address"])) {
		$addressErr = "Address is required!";
	}else{
		$address = $_POST["address"];
	}

	if(empty($_POST["email"])) {
		$emailErr = "Email is required!";
	}else{
		$email = $_POST["email"];
	}
}
?>

<form method="POST" action="<?php htmlspecialchars("PHP_SELF");  ?>">
	<input type="text" name="name" value=""> <br>
	<span class="error"><?php echo $nameErr; ?></span> <br>
	<input type="text" name="address" value=""> <br>
	<span class="error"><?php echo $addressErr; ?></span> <br>
	<input type="text" name="email" value=""> <br>
	<span class="error"><?php echo $emailErr; ?></span> <br>
	<input type="submit" value="Submit"> 
</form>

<hr>

<?php

	if ($name && $address && $email ) {
		echo "Name: $name" . "<br>";
		echo "Address: $address" . "<br>";
		echo "Email: $email" . "<br>";
	}

?>
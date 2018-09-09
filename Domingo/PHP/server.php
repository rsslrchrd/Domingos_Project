<?php
session_start();

// initializing variables
$firstname = "";
$lastname = "";
$street = "";
$postcode = "";
$username = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'domingos');

// REGISTER USER
if (isset($_POST['domingos'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['First_Name']);
  $lastname = mysqli_real_escape_string($db, $_POST['Last_name']);
  $street = mysqli_real_escape_string($db, $_POST['Street']);
  $postcode = mysqli_real_escape_string($db, $_POST['Postcode']);
  $username = mysqli_real_escape_string($db, $_POST['UserName']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "First_Name is required"); }
  if (empty($lastname)) { array_push($errors, "Last_Name is required"); }
  if (empty($street)) { array_push($errors, "street is required"); }
  if (empty($postcode)) { array_push($errors, "postcode is required"); }
  if (empty($username)) { array_push($errors, "UserName is required"); }
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $customer_check_query = "SELECT * FROM Customer WHERE UserName='$username' LIMIT 1";
  $result = mysqli_query($db, $customer_check_query);
  $customer = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($Customer['UserName'] === $username) {
      array_push($errors, "UserName already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO Customer (First_Name, Last_Name, Street, Postcode, UserName) 
  			  VALUES('$firstname', '$lastname', '$street', '$postcode', '$username')";
  	mysqli_query($db, $query);
  	$_SESSION['UserName'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: register.php');
  }


// ...

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['UserName']);

  if (empty($username)) {
  	array_push($errors, "UserNameame is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM Customer WHERE UserName='$username'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['UserName'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: register.php');
  	}else {
  		array_push($errors, "Wrong UserName");
  	}
  }
}

?>
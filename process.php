<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
     $middle_name = $_POST['middle_name'];
	 $last_name = $_POST['last_name'];
	 $city_name = $_POST['city_name'];
     $country_name = $_POST['country_name'];
	 $email = $_POST['email'];
	 $designation = $_POST['designation'];
     $gender = $_POST['gender'];
     $hobbies = $_POST['hobbies'];
     $movie_name = $_POST['movie_name'];
     $genre = $_POST['genre'];
	 $food_choices = $_POST['food_choices'];
     $destination_name = $_POST['destination_name'];
	 $sql = "INSERT INTO employee (first_name,middle_name,last_name,city_name,country_name,email,designation,gender,hobbies,movie_name,genre,food_choices,destination_name)
	 VALUES ('$first_name','$middle_name','$last_name','$city_name','$country_name','$email','$designation','$gender','$hobbies','$movie_name','$genre','$food_choices','$destination_name')";
	 if (mysqli_query($conn, $sql)) {
		echo "Welcome to The World Of AI ! and Thank You For Response";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
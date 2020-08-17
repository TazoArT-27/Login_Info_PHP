<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <?php include 'links.php' ?>
  
</head>
<body>

<!-- <div class="container">
  <h1>My First Bootstrap Page</h1>
  <p>This is some text.</p>
</div> -->



<div>
	<form action="" method="POST">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
                   

					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label for="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>

					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="submit" value="Sign Up">


                    <a href="display.php" class="btn btn-primary" type="submit" id="check" name="check" value="update">Check List</a>
				</div>
			</div>
		</div>
	</form>
</div>

</body>
</html>

<?php
    include 'connection.php';
    if (isset($_POST['submit'])) {
        
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phonenumber'];
        $password = $_POST['password'];

        $insertQuery = "insert into registration(firstname, lastname, email, phonenumber, password) values('$firstName','$lastName','$email','$phoneNumber','$password')";

        $result = mysqli_query($condition, $insertQuery);
        if($result){
            ?>
                <script>
                   alert("Data inserted properly.");
                </script>
            <?php
        }else{
            ?>
                <script>
                   alert("Data not inserted properly!");
                </script>
            <?php
        }
        
    }


 ?>
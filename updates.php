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
            <?php
                include 'connection.php';
                $ids = $_GET['id'];
                $showquery = "select * from registration where id={$ids}";
                $showdata = mysqli_query($condition, $showquery);
                $arrdata = mysqli_fetch_array($showdata);
                if (isset($_POST['submit'])) {

                    $idupdate = $_GET['id'];

                    $firstName = $_POST['firstname'];
                    $lastName = $_POST['lastname'];
                    $email = $_POST['email'];
                    $phoneNumber = $_POST['phonenumber'];
                    $password = $_POST['password'];

                    // $insertQuery = "insert into registration(firstname, lastname, email, phonenumber, password) value('$firstName','$lastName','$email','$phoneNumber','$password')";
                    $query = "update registration set firstname='$firstName', lastname='$lastName', email='$email', phonenumber='$phoneNumber', password='$password' where id=$idupdate";
                    $result = mysqli_query($condition, $query);
                    if($result){
                        ?>
                            <script>
                            alert("Data updated properly.");
                            </script>
                        <?php
                    }else{
                        ?>
                            <script>
                            alert("Data not updated properly!");
                            </script>
                        <?php
                    }
                    
                }


        ?>
				<div class="col-sm-3">
					<!-- <h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3"> -->
					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required value="<?php echo $arrdata['firstname'] ?>">

					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" value="<?php echo $arrdata['lastname'] ?>" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" value="<?php echo $arrdata['email'] ?>" required>

					<label for="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" value="<?php echo $arrdata['phonenumber'] ?>" required>

					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" value="<?php echo $arrdata['password'] ?>" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="submit" value="Update">


                    <a href="display.php" class="btn btn-primary" type="submit" id="check" name="check" value="update">Check List</a>
                    <!-- type="submit" id="check" name="check" value="Update" -->
				</div>
			</div>
		</div>
	</form>
</div>

</body>
</html>


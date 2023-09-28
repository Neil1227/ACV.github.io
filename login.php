<?php 
if(isset($_POST["btn-log"])){
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "admin_acc";

                // Get the username and password from the user input using $_POST
					$user = $_POST["u_name"];
					$pass = $_POST["p_word"];
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}			
					

					// SQL query to retrieve username and password data from users_tbl based on user input
					$sql1 = "SELECT username, password FROM users_tbl WHERE username='$user' AND password='$pass'";
				
					$result = $conn->query($sql1);

					if ($result->num_rows > 0) {
						// Loop through each row of the result set
						while($row = $result->fetch_assoc()) {
							// SQL query to insert data into tbl_accounts
							$sql2 = "INSERT INTO user_log (username, password) VALUES ('" . $row["u_name"] . "','" . $row["p_word"] . "')";

							// Execute the SQL query
							if ($conn->query($sql2) === TRUE) {
								echo "<script>alert('Account successfully login')</script>";
                                header('Location: clientAdopt.php');

							} else {
								echo "<script>alert('error')</script>" . $conn->error;
							}
						}
					} else {
						echo "<script>alert('No registered account found.')</script>";
					}
				

				}
?>
My Drive
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign up / Login Form</title>
  <link rel="stylesheet" href="loG.css">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="upper">
				<form action="#" method="post">
				<label class="login-margin" for="chk" aria-hidden="true">Login</label>
				<input type="text" name="username" placeholder="Email" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<button name="btn-log">Login</button>
				</form>
			</div>

			<div class="lower">
				<form action="#" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="lname" placeholder="Last name" required="">
					<input type="text" name="fname" placeholder="First name" required="">
					<input type="text" name="mname" placeholder="Middle name" required="">
					<input type="text" name="gender" placeholder="Gender" required="">
					<input type="text" name="address" placeholder="Address" required="">
					<input type="text" name="contact_no" placeholder="Phone number" required="">
					<input type="text" name="u_name" placeholder="Username" required="">
					<input type="password" name="p_word" placeholder="Password" required="">
					<button name="btn-reg">Sign up</button>
					
				</form>
			</div>
	</div>
</body>
  
	<?php
			if(isset($_POST["btn-reg"])){
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "free_wifi_db";
				$u_name= $_POST['u_name'];
				$p_word= $_POST['p_word'];
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				//Inserting data
				$sql ="INSERT into tbl_users (l_name, f_name, m_name, gender,
				address, contact_no, username, password) 
				values ('".$_POST["lname"]."',
				'".$_POST["fname"]."',
				'".$_POST["mname"]."',
				'".$_POST["gender"]."'
				,'".$_POST["address"]."',
				'".$_POST["contact_no"]."',
				'".$_POST["u_name"]."', 
				'".$_POST["p_word"]."')";
				
				// check if the username already exists
				$result = $conn->query("SELECT * FROM tbl_users WHERE username = '$u_name'");
				if ($result->num_rows > 0) {
					// username already exists, display an error message
					echo "<script>alert('Error: Username already exists. Please sign up again.')</script>";
				} else {
					// insert a new record
					$conn->query("INSERT into tbl_users (l_name, f_name, m_name, gender,
					address, contact_no, username, password) 
					values ('".$_POST["lname"]."',
					'".$_POST["fname"]."',
					'".$_POST["mname"]."',
					'".$_POST["gender"]."'
					,'".$_POST["address"]."',
					'".$_POST["contact_no"]."',
					'".$_POST["u_name"]."', 
					'".$_POST["p_word"]."')");
					echo "<script>alert('User created successfully.')</script>";
				}
			}
	?>
	<?php 

			if(isset($_POST["btn-log"])){
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "free_wifi_db";
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}			
					// Get the username and password from the user input using $_POST
					$user = $_POST["username"];
					$pass = $_POST["password"];

					// SQL query to retrieve username and password data from tbl_users based on user input
					$sql1 = "SELECT username, password FROM tbl_users WHERE username='$user' AND password='$pass'";
				
					$result = $conn->query($sql1);

					if ($result->num_rows > 0) {
						// Loop through each row of the result set
						while($row = $result->fetch_assoc()) {
							// SQL query to insert data into tbl_accounts
							$sql2 = "INSERT INTO tbl_accounts (u_name, p_word) VALUES ('" . $row["username"] . "','" . $row["password"] . "')";

							// Execute the SQL query
							if ($conn->query($sql2) === TRUE) {
								echo "<script>alert('Account successfully login')</script>";

							} else {
								echo "<script>alert('error')</script>" . $conn->error;
							}
						}
					} else {
						echo "<script>alert('No registered account found.')</script>";
					}
				

				}
	 ?>

// Use prepared statements to prevent SQL injection
    $sql_check_username = "SELECT * FROM users_tbl WHERE username = ?";
    $stmt_check_username = $conn->prepare($sql_check_username);
    $stmt_check_username->bind_param("s", $user_name);
    $stmt_check_username->execute();
    $result_check_username = $stmt_check_username->get_result();
    
    if ($result_check_username->num_rows > 0) {
        // Username already exists, display an error message
        echo "<script>alert('Error: Username already exists. Please sign up again.')</script>";
    } else {
        // Insert a new record using prepared statement
        $sql_insert_user = "INSERT INTO users_tbl (first_name, middle_name, last_name, age, birthday, sex, address, username, password, owns_dog) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_insert_user = $conn->prepare($sql_insert_user);
        $stmt_insert_user->bind_param("ssssssssss", $fname, $mname,$lname, $age, $bday, $sex, $address, $user_name, $pass_word, $owns_dog);
        
        if ($stmt_insert_user->execute()) {
            // User created successfully, display an alert
            echo '<script>alert("User created successfully.");</script>';
            header('Location: http://localhost/Capstone/clientadopt.php');
        } else {
            echo "Error: " . $stmt_insert_user->error;
        }
    }
    
    // Close the database connection
    $conn->close();

</html>
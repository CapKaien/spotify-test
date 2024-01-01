<?php
				if($_SERVER['REQUEST_METHOD'] == "POST"){
					$errors = array();
					if(empty($_POST['fname'])){
						$errors[] = "You forgot to enter your first name";
					}else{
						$fn = trim($_POST['fname']);
					}
					
					if(empty($_POST['lname'])){
						$errors[] = "You forgot to enter your last name";
					} else {
						$ln = trim($_POST['lname']);
					}
					
					if(empty($_POST['email'])){
						$errors[] = "You forgot to enter your email address";
					} else {
						$e = trim($_POST['email']);
					}
					
					if(!empty($_POST['pword'])){
						if($_POST['pword'] != $_POST['pword2']){
							$errors[] = "The passwords did not match!";
						} else {
							$p = trim($_POST['pword']);
						}
					} else {
						$errors[] = "You forgot to enter your password";
					}
					
					if(empty($errors)){
						require("mysqli_connect.php");
						$q = "INSERT INTO users (fname, lname, email, psword, registration_date) VALUES('$fn', '$ln', '$e', SHA1('$p'),NOW())";
						if($result){
							header("location: register-thanks.php");
							exit();
						} else {
							echo "<h2>System Error</h2><p class='error'>Your registration has failed due to a system error. We apologize for the inconvenience. Please try again later or contact the system administrator</p>";
						}
					} else {
						echo "<h2>Error!</h2><p class='error'>The following error(s) occurred:<br />";
						foreach ($errors as $msg){
							echo " - $msg<br />\n";
						}
						echo "<p><h3>Please try again</h3><br /></p>";
					}
				}
			?>
				<h2> Register </h2>
				<form action="register-page.php" method="post">
					<p><label class="label" for="fname">First Name: </label><input id="fname" type="text" name="fname" size="30" maxlength="30" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']?>"></p>
					
					<p><label class="label" for="lname">Last Name: </label><input id="lname" type="text" name="lname" size="30" maxlength="40" value="<?php if(isset($_POST['lname'])) echo $_POST['lname']?>"></p>
					
					<p><label class="label" for="email">Email Address:</label><input id="email" type="text" name="email" size="30" maxlength="60" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>"></p>
					
					<p><label class="label" for="pword">Password: </label><input id="pword" type="password" name="pword" size="20" maxlength="40" value="<?php if(isset($_POST['pword'])) echo $_POST['pword']?>">Between 8 to 12 characters.</p>
					
					<p><label class="label" for="pword2">Confirm Password: </label><input id="pword2" type="password" name="pword2" size="20" maxlength="40" value="<?php if(isset($_POST['pword2'])) echo $_POST['pword2']?>"></p>
					
					<p><input id="submit" type="submit" name="submit" value="Register!"></p>
					
			</form>
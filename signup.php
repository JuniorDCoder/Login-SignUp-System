
<head>
	<link rel="stylesheet" type="text/css" href="includes/stylesignup.css">
</head>

<main>
	<nav>
            <div class="log">
                <h4>D'CODER</h4>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="">Portfolio</a></li>
                <li><a href="">About Me</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="includes/login.inc.php">Login</a></li>
            </ul>
        </nav>
	<div class="wrapper-main">
		<section class="section-default">
		<?php

				if (isset($_GET['error'])) {
					if ($_GET['error'] == "emptyfields") {
						echo '<p class="signuperror">Fill in all fields!</p>';
					}
					elseif ($_GET['error'] == "invaliduidmail") {
						echo '<p class="signuperror">Invalid Username and E-mail!</p>';
					}
					elseif ($_GET['error'] == "invaliduid") {
						echo '<p class="signuperror">Invalid Username!</p>';
					}
					elseif ($_GET['error'] == "invalidmail") {
						echo '<p class="signuperror">Invalid E-mail!</p>';
					}
					elseif ($_GET['error'] == "passwordCheck") {
						echo '<p class="signuperror">Your Passwords do not match!</p>';
					}
					elseif ($_GET['error'] == "usertaken") {
						echo '<p class="signuperror">Username is already taken!</p>';
					}
				}
				elseif (isset($_GET['signup'])) {
					echo '<p class="signuperror">Signup Successful!</p>';
				}
			?>

			<div class="signup">
				<img src="https://gifimage.net/wp-content/uploads/2018/04/login-gif-images-12.gif" class="logo">
				<h1>Create An Account</h1>
				<form class="signup-form" action="includes/signup.inc.php" method="post">
					<p>Username</p>
					<?php 
						if (isset($_GET['uid'])) {
							$uid = $_GET['uid'];
							echo '<input type="text" name="uid" placeholder="Username value" value="'.$uid.'">';
						}
						else{
							echo '<input type="text" name="uid" placeholder="Username">';
						}
					?>
					
					<p>E-mail</p>
					
					<?php 
						if (isset($_GET['mail'])) {
							$mail = $_GET['mail'];
							echo '<input type="text" name="mail" placeholder="E-mail" value="'.$mail.'">';
						}
						else{
							echo '<input type="text" name="mail" placeholder="E-mail">';
						}
					?>
					
					<p>Password</p>
					<input type="password" name="pwd" placeholder="Password">
					<p>Repeat password</p>
					<input type="password" name="pwd-repeat" placeholder="Repeat password">

					<input type="submit" name="signup-submit" value="Submit">
				</form>
			</div>
		</section>
	</div>

</main>
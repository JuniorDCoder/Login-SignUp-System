<?php

require "header.php";
?>
<head>
	<style type="text/css">
		p{
			color: white;
			text-align: center;
			font-size: 20px;
			color: chartreuse;
			font-weight: bold;
		}
	</style>
</head>
<main>
	<div class="wrapper-main">
		<section class="section-default">
			<?php
				if (isset($_SESSION['userId'])) {
					echo '<p class="login-status">You are logged in</p>';
				}

				else{
					if (isset($_GET['error'])) {
						if ($_GET['error'] == "wrongpwd") {
							echo '<p class="loginerror">Wrong Password!</p>';
						}
						elseif ($_GET['error'] == "nouser") {
							echo '<p class="loginerror">No User Found!</p>';
						}
						elseif ($_GET['error'] == "emptyfields") {
							echo '<p class="loginerror">Fill in all fields!</p>';
						}
					}
					echo '<p class="login-status">You are logged out</p>';
				}


			?>
		</section>
	</div>

</main>

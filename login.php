<?php
require_once 'core/models.php';
require_once 'core/handleForms.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">

</head>

<body>
	<div class="outerMain">
		<div class="main">
			<div class="innerMain">
				<h1>Log In</h1>
				<?php
				if (isset($_SESSION['message']) && isset($_SESSION['status'])) {

					if ($_SESSION['status'] == "200") {
						echo "<p style='color: green;'>{$_SESSION['message']}</p>";
					} else {
						echo "<p style='color: red;'>{$_SESSION['message']}</p>";
					}

				}
				unset($_SESSION['message']);
				unset($_SESSION['status']);
				?>
				<div class="mainForm">
					<form action="core/handleForms.php" method="POST">
						<p>
							<label for="username">Username</label>
							<input type="text" name="username">
						</p>
						<p>
							<label for="username">Password</label>
							<input type="password" name="password">
						</p>
				</div>
				<p>
					<input type="submit" name="loginUserBtn" value="Log In" class="submit-button">
				</p>
				</form>

				<p style="margin-top: 30px;">Don't have an account? You may register <a href="register.php">here</a>.</p>
			</div>

		</div>
	</div>


</body>

</html>
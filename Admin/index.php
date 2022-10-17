<?
	include 'settings/database_connection.php';
	session_start();
?>

<!doctype html>

<html lang="en">
  <head>
  	<title>Администратор</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">

		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Администратор</h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>

		      	<h3 class="text-center mb-4">Пожалуйста, войдите в свой аккаунт</h3>

				<?		
					if(isset($_POST['ent_button']))
					{
						$dbConnection = new database_connection();

						$result = $dbConnection->getQuery('SELECT * FROM Admin');
						$getId = $dbConnection->getQuery('SELECT Id FROM Admin WHERE Password = "'.$_POST['password'].'"');
						
						$admin_id;

						$correctLogin = false;
						$correctPassword = false;

						foreach ($getId as $gadget => $items)
						{
							foreach ($items as $key => $value)
							{
								$admin_id = $value;
							}
						}

						foreach ($result as $gadget => $items)
						{
							foreach ($items as $key => $value)
							{
								if($value == $_POST['login'])
								{
									$correctLogin = true;
									continue;
								}

								if($correctLogin == true)
								{
									if($value == $_POST['password'])
									{
										$_SESSION['logged_in_user_id'] = $admin_id;

										echo "Autorized!";
										$correctPassword = true;
										break;
									}
								}
							}
						}

						if($correctPassword == true)
						{
							echo '<script>					
									window.location.replace("https://nordfennoscandia.com/Admin/main_panel_admin.php")
								  </script>';
						}
					}
				?>

				<form method="post" class="login-form" accept-charset="utf-8">

		      		<div class="form-group">
		      			<input type="text" name="login" class="form-control rounded-left" placeholder="Логин" required>
		      		</div>

					<div class="form-group d-flex">
					  <input type="password" name="password" class="form-control rounded-left" placeholder="Пароль" required>
					</div>

					<div class="form-group">
	            		<button type="submit" name="ent_button" class="btn btn-primary rounded submit p-3 px-5">Войти</button>
					</div>

	            </form>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>


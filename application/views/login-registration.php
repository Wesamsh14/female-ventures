<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="/assets/indexCSS.css">
		<title></title>
	</head>
	<body class="body">
		<header>
			<?php $this->load->view('header/header.php') ?>
		</header>
		<div class="main-body">
			<?=$this->session->flashdata('registration_error')?>
			<?=$this->session->flashdata('registration_status')?>
			<h3>Sign up now to join us!</h3>
			<textarea cols="30" rows="1.5" placeholder="email adress"></textarea><br>
			<textarea cols="30" rows="1.5" placeholder="Password"></textarea><br>
			<textarea cols="30" rows="1.5" placeholder="Confirm Password"></textarea><br>
			<input type="submit" value="Signup">
		</div>
		<div class="main-body">
			<h3>Login</h3>
			<textarea cols="30" rows="1.5" placeholder="username or email adress"></textarea><br>
			<textarea cols="30" rows="1.5" placeholder="Password"></textarea><br>
			<input type="submit" value="Signup">
		</div>
		<footer>
				<?php $this->load->view('footer/footer.php'); ?>
		</footer>
	</body>
</html>

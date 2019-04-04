<!DOCTYPE html>
<html>
<head>
	<title>header</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/assets/header.css">
</head>
<body>
<div id="container">
	<div id="left">
		<span style="color: white ;">
		<div id="venus">
		<i class="fas fa-venus" style="font-size: 2em;"></i><br>
		<a class="logos-top" href="">Services</a>
		</div>
		<div id="calendar">
		<i class="far fa-calendar-alt" style="font-size: 2em;"></i><br>
		<a class="logos-top" href="">Events</a>
		</div>
		<div id="newspaper">
		<i class="far fa-newspaper" style="font-size: 2em;"></i><br>
		<a class="logos-top" href="">News</a>
		</div>
		<div id="handshake">
		<i class="far fa-handshake" style="font-size: 2em;"></i><br>
		<a class="logos-top" href="">Partners</a>
		</div>
		</span>
	</div>
	<div id="right">
		<span style="color: white;">
		<div id="dots">
		<i class="far fa-comment-dots" style="font-size: 2em;"></i><br>
		<a class="logos-top" href="feed">Feed</a>
		</div>
		<div id="donate">
		<i class="far fa-user" style="font-size: 2em;"></i><br>
		<a class="logos-top" href="/profile/<?=$this->session->user['id']?>">My profile</a>
		</div>
		<div id="users">
		<i class="fas fa-users" style="font-size: 2em;"></i><br>
		<a class="logos-top" href="Friends">Friends</a>
		</div>
		<div id="circle">
		<i class="fas fa-sign-out-alt" style="font-size: 2em;"></i><br>
		<a class="logos-top" href="logout">Logout</a>
		</div>
		</span>
	</div>
	<div id="logo">
		<img src='/assets/logo.png'>
	</div>


</div>
</body>
</html>

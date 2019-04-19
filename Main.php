<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>Ethericall</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="/style.css">
    
    <!-- import the webpage's javascript file -->
    <script src="/script.js" defer></script>
  </head>  
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <img src="https://cdn.discordapp.com/attachments/563065135296675840/564157241536544770/fdsdfd00.png" width="40" style="margin-right: 10px;" />
  <a class="navbar-brand" href="#">Ethericall</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Strona główna <span class="sr-only">(current)</span></a>
      </li>
    <li>
	<?php

	echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	
?>
	</li>
	</ul>
  </div>
</nav>
    
    <div class="row">
    <div class="card" style="width: 18rem; margin-left: 60px; margin-top: 60px;">
  <img src="https://cdn.glitch.com/c0d8d0fa-1e01-402f-a7ae-e2e30813ecc3%2Fobraz.png?1554734260794" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Boty na zamówienie</h5>
    <p class="card-text">Zamów własnego bota i miej nad nim kontrolę.</p>
    <a href="https://discord.gg/9GkeJwH" class="btn btn-primary">Zamów bota (serwer Discord)</a>
  </div>
</div>
      
    <div class="card" style="width: 18rem; margin-left: 60px; margin-top: 60px;">
  <img src="http://www.picopolska.pl/components/com_virtuemart/assets/images/vmgeneral/brakZdjecia.png" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Niedługo coś tutaj powstanie</h5>
    <p class="card-text">Narazie nic tutaj nie ma. Bądź cierpliwy!</p>
    <a href="index.html" class="btn btn-primary">Brak dostępu</a>
  </div>
</div>
      
      <div class="card" style="width: 18rem; margin-left: 60px; margin-top: 60px;">
  <img src="http://www.picopolska.pl/components/com_virtuemart/assets/images/vmgeneral/brakZdjecia.png" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Niedługo coś tutaj powstanie</h5>
    <p class="card-text">Narazie nic tutaj nie ma. Bądź cierpliwy!</p>
    <a href="index.html" class="btn btn-primary">Brak dostępu</a>
  </div>
</div>
    
    </div>
    
    
    <!-- Biblioteka Bootstrap (https://getbootstrap.com) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

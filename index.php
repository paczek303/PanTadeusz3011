<html>
<head>
	<title>Pan Tadeusz</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<style>
body {background-color: #9999ff;}
footer {
	text-align: center;
	font-size: 15px;
}
#foto {
	width: 85%;
}
</style>
<body>
	<header class="container text-center">
		<h1>Pan Tadeusz, czyli ostatni zajazd na Litwie.<br>Historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem.</h1>
	</header>

	<nav class="container navbar navbar-expand-lg navbar-dark bg-dark sticky-top mb-2 rounded">
		<div class="">
			<a class="navbar-brand" href="./index.php">Strona Główna</a>
		</div>
	</nav>

	<div class="container">
		<div class="row">

			<div class="col-md-3 cos-xs-12">
				<div class="list-group">
					<button class="list-group-item list-group-item-info">Spis Treści</button>
					<?php
						$k = $_GET['ksiega'];
						for ($i=1; $i<=12; $i++) {
							echo "<a href='./index.php?ksiega=$i' class='list-group-item list-group-item-action".(($i ==$k)?'active':'')." '>Księga $i </a>";
						}
					?>
				</div>
			</div>

			<div class="col-md-6 col-xs-12">
				
				
				<?php
					if (!empty($_GET)) {
						$k = $_GET['ksiega'];
						include_once("./k$k.html");
					}
					else
					{
						echo "<center><img width='600' height='500' src='./PanTadeusz.jpg'></img></center>";
					}
				?>
			</div>

			<div class="col-md-3 cos-xs-12">
				<div class="card">
  					<div class="card-header text-center ">
    					<h3>Notatki</h3>
  					</div>
  					<div class="card-body">
    					<h4 class="card-title">Dodaj notatkę</h4>
    					<form action="" method="POST">
						<div class="form-group">
    						<label for="content">Tytuł</label>
    						<input type="text" class="form-control" id="title" rows="3" name="title"></input>
  						</div>
  						<div class="form-group">
    						<label for="content">Treść</label>
    						<textarea class="form-control" id="content" rows="3" name="content"></textarea>
  						</div>
  						<button type="submit" class="btn btn-info float-right">Wyślij</button>
  					</div>

  					<div class="card-body">
  						<h4 class="card-title">Dodaj notatkę</h4>
  						<table class="table table-hover table-dark table-responsive">
  							<thead>
    							<tr>
      								<th>#</th>
      								<th>Tytuł</th>
     								<th>Treść</th>
   								 </tr>
 							</thead>
  							<tbody>
    							<tr>
      								<th scope="row">1</th>
      								<td>Mateusz Brożek</td>
     								<td>Ty batonie</td>
    							</tr>
								<tr>
      								<th scope="row">2</th>
      								<td>John Terry</td>
     								<td>To Twoja żona?</td>
    							</tr>

  							</tbody>
						</table>
  					</div>

  					<div class="card-footer text-muted">
    					5 days ago
  					</div>
				</div>
			</div> 
		</div>	
	</div>

<footer class="text-center">
	<nav class="container navbar navbar-expand-lg fixed-bottom navbar-dark bg-dark mb-2 rounded">
  		<a class="navbar-brand" href="">(C) Patryk Maziarz, UEK</a>
	</nav>
</footer>

</body>
</html>
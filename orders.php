<!DOCTYPE html>
<html lang="en">

<head>
	<meta  http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>"Jonas PHOTO" paslaugos</title>
	<meta name="author" content="Šarūnas Šliogeris">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="all"> 
	<link href="css/custom.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#my-navbar">
	

	<!--NAVBAR-->
	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
		<div class="container">
			<div class="navbar-header">
				<a id="1" href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;"Jonas PHOTO"</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<a href="orders.php" class="btn btn-warning navbar-btn navbar-right">Užsakymų sąrašas</a>
				<ul class="nav navbar-nav">
					<li><a href="index.php #1aboutJonas"><span class="glyphicon glyphicon-pencil"></span> Apie Joną</a>
					<li><a href="index.php #1gallery"><span class="glyphicon glyphicon-camera"></span> Nuotraukų pavyzdžiai</a>
					<li><a href="index.php #1system-form"><span class="glyphicon glyphicon-euro"></span> Užsakymo forma</a>				
					<li><a href="index.php #1contacts"><span class="glyphicon glyphicon-earphone"></span> Kontaktai</a>
				</ul>
			</div>
		</div>
	</nav>
	<!--NAVBAR END-->


	<!--ORDER LIST-->

	<?php
	include_once 'dbconfig.php';
	echo '<div class="container" id="search-form">
    	<form for="" class="form-group" method="post" id="search_form">
    	<input type="text" value="" class="form-control" id="search_name" name="search_name" placeholder="Įveskite užsakovo vardą"></input>
    	<button class="btn btn-danger" type="submit" name="search_submit">Atrinkti</button>
    	</form>
    	</div>';
		if(isset($_POST['search_submit'])){
			$order_name = $_POST['search_name'];
            echo '<div class="container" id="system-form">
              <section>
                <div class="page-header">
                  <h2><small>Atlikti užsakymai pagal vardo: "' .$order_name. '" paiešką</small></h2>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table table-bordered">
                      <thead>
                        <th>Užsakymo Nr.</th>
                        <th>Paslauga</th>
                        <th>Vardas</th>
                        <th>Vieta</th>
                        <th>Mob. tel. nr.</th>
                        <th>Užsakymo laikas</th> 
                      </thead>';
                      ?>
                      <?php
                      $paimimas = $db_con->prepare("SELECT * FROM order_list WHERE first_name LIKE '%$order_name%' ORDER BY id");
                      $paimimas->execute();
                      $rezultatas = $paimimas->fetchAll();
                      foreach ($rezultatas as $rows) {
                        ?>
                      <tbody>
                        <td><?=$rows['id'];?></td>
                        <td><?=$rows['order_name'];?></td>
                        <td><?=$rows['first_name'];?></td>
                        <td><?=$rows['place'];?></td>
                        <td><?=$rows['phone_number'];?></td>
                        <td><?=$rows['date_time'];?></td>
                      <?php
                      }
                      ?>
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </section>
            </div>
            <?php };
            ?>

            

            <?php
    		echo '<div class="container" id="system-form">
              <section>
                <div class="page-header">
                  <h2>Pilnas užsakymų sąrašas &nbsp;&nbsp;<small> Čia galite peržiūrėti atliktus užsakymus</small></h2>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table table-bordered">
                      <thead>
                        <th>Užsakymo Nr.</th>
                        <th>Paslauga</th>
                        <th>Vardas</th>
                        <th>Vieta</th>
                        <th>Mob. tel. nr.</th>
                        <th>Užsakymo laikas</th> 
                      </thead>';
                      ?>
                      <?php
                      $paimimas = $db_con->prepare("SELECT * FROM order_list ORDER BY id");
                      $paimimas->execute();
                      $rezultatas = $paimimas->fetchAll();
                      foreach ($rezultatas as $rows) {
                        ?>
                      <tbody>
                        <td><?=$rows['id'];?></td>
                        <td><?=$rows['order_name'];?></td>
                        <td><?=$rows['first_name'];?></td>
                        <td><?=$rows['place'];?></td>
                        <td><?=$rows['phone_number'];?></td>
                        <td><?=$rows['date_time'];?></td>
                      <?php
                      }
                      ?>
                      </tbody>
                      
                    </table>
                    <p>Iš viso užsakymų: 
                    	<?php 
                    	$sql = "SELECT count(*) FROM order_list"; 
						$result = $db_con->prepare($sql); 
						$result->execute(); 
						$number_of_rows = $result->fetchColumn();
						echo $number_of_rows; 
						?>
						</p>
                  </div>
                </div>
              </section>
            </div>

	<!--ORDER LIST END-->


	<!--FOOTER-->
	<footer>
		<div class="container text-center">
			<hr>
			<p>Kūrėjas: Šarūnas Šliogeris</p>
			<p>Projektas kurtas NFQ Akademijos atrankai. Pasirinkta tema juoko formos, tačiau užduotys stengtasi būti atliktos pagal reikalavimus.</p>
			<p>Paskutinį kartą atnaujinta: 2018-02-18</p>
		</div>
	</footer>
	<!--FOOTER END-->


	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
	<script src="css/scroll.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript" src="css/validation.min.js"></script>
	<script src="css/script-order.js" type="text/javascript"></script> 
</body>	
</html>

<?php

include_once 'dbconfig.php';

// FORMOS SUBMIT

if(isset($_POST['submit'])){
ob_start();
	
	$order_name = $_POST['order_name'];
    $firstname = $_POST['firstName'];
    $placeOfAction = $_POST['placeOfAction'];
    $phonenumber = $_POST['phone_number'];
    $datetimes = date('Y-m-d H:i:s');

    $sql = "INSERT INTO order_list (order_name, first_name, place, phone_number, date_time) VALUES (:order_name, :firstname, :placeOfAction, :phonenumber, :datetimes)";
    $statement = $db_con->prepare($sql);
        
    $statement->execute(array(
      ':order_name' => $order_name,
      ':firstname' => $firstname,
      ':placeOfAction' => $placeOfAction,
      ':phonenumber' => $phonenumber,
      ':datetimes' => $datetimes));

    header("Location: orders.php");
}

//FORMOS SUBMIT END   

?>
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
				<a id="1" href="" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;"Jonas PHOTO"</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<a href="orders.php" class="btn btn-warning navbar-btn navbar-right">Užsakymų sąrašas</a>
				<ul class="nav navbar-nav">
					<li><a href="#1aboutJonas"><span class="glyphicon glyphicon-pencil"></span> Apie Joną</a>
					<li><a href="#1gallery"><span class="glyphicon glyphicon-camera"></span> Nuotraukų pavyzdžiai</a>
					<li><a href="#1system-form"><span class="glyphicon glyphicon-euro"></span> Užsakymo forma</a>				
					<li><a href="#1contacts"><span class="glyphicon glyphicon-earphone"></span> Kontaktai</a>
				</ul>
			</div>
		</div>
	</nav>
	<!--NAVBAR END-->


	<!--ABOUT JONAS-->
	<div class="container">
		<section>
			<div class="page-header" id="1aboutJonas">
				<h2>Apie Joną &nbsp;&nbsp;<small>Informacija apie Jono fotografiją</small></h2>
			</div>
			<div class="row">
				<div class="col-md-5 well">
					<img src="images/jonasfoto.jpg" class="img-responsive" alt="image">
				</div>
				<div class="col-md-7">
					<h4>Truputis veiklos istorijos</h4>
					<p>"Jonas PHOTO" pradėjo savo fotografijos veiklą, kaip savo šalūtinę veiklą jau nuo 2010 metų, jei nepasisektų krepšinyje. Nors krepšinyje jam šiek tiek ir pasisekė, jis vistiek ryžta neapleisti savo antrosios meilės kūrybai.</p>
					<h4>Kodėl "Jonas PHOTO"?</h4>
					<p>Jono įdėja yra - kuo pigiau ir kokybiškiau aptarnauti klientus ir padaryti juos visapusiškai patenkintus!</p>
					<h4>Bonusai?</h4>
					<p>Visiems atlikusiems užsakymus bus suteikiami Jono autografai!</p>
				</div>
			</div>
		</section>
	</div>
	<!--ABOUT JONAS END-->


	<!--GALLERY-->
	<div class="container">
		<section>
			<div class="page-header" id="1gallery">
				<h2>Galerija &nbsp;&nbsp;<small>Peržiūrėkite Jono atliktus darbų pavyzdžius</small></h2>
			</div>
			<div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#screenshot-carousel" data-slide-to="1"></li>
					<li data-target="#screenshot-carousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/jonas1.jpg" alt="Photo of Jonas">
						<div class="carousel-caption">
							<h3>"Jonas PHOTO"</h3>
							<p>Šią nuotrauką fotografavo Jonas, tikrai</p>
						</div>
					</div>
					<div class="item">
						<img src="images/jonas2.jpg" alt="Photo of Jonas">
						<div class="carousel-caption">
							<h3>"Jonas PHOTO"</h3>
							<p>Ir šią nuotrauką darė Jonas</p>
						</div>
					</div>
					<div class="item">
						<img src="images/jonas3.jpg" alt="Photo of Jonas">
						<div class="carousel-caption">
							<h3>"Jonas PHOTO"</h3>
							<p>Jonas dirba ir Lietuvoje!</p>
						</div>
					</div>
				</div>
				<a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</section>
	</div>
	<!--GALLERY END-->


	<!--ORDER FORM-->
 	<div class="container">
		<section>
	    	<div class="page-header" id="1system-form">
	        	<h2>Užsakymo forma &nbsp;&nbsp;<small>Šia forma jūs galite užsisakyti Jono fotosesiją</small></h2>
	         </div>
	         <div class="row">
	            <div id="ActivateForm">
	              	<div class="col-sm-12">
	                	<h3>Prašome užpildyti formą</h3>
	                	<form for="" class="form-group" method="post" id="order-form">
	                  		<label for="select">Pasirinkite paslaugą</label>
	                  		<select class="form-control" name="order_name">
			                    <option>Vestuvių fotografas - 10 000€</option>
			                    <option>Fotosesija studijoje - 1 000€</option>
			                    <option>Fotosesija jūsų pasirinktoje vietoje - 2 000€</option>
			                    <option>Poros fotosesija - 2 000€</option>
			                    <option>Grupės fotosesija (darbo aplinkoje) - 2 000€</option>
			                    <option>Fotosesija su pačiu Jonu - 20 000€</option>
	                  		</select>
	                  		<br>
	                  		<label for="name">Vardas</label>
	                 		<input type="text" class="form-control" id="name" name="firstName" placeholder="Įveskite savo vardą"></input>
	                  		<span id="errMsgRed" class="errMsg"></span>
	                  		<br>
	                  		<label for="place">Vieta</label>
	                  		<input type="text" class="form-control" id="place" name="placeOfAction" placeholder="Įveskite miestą ar vietą kur norite fotografavimo darbų"></input>
	                  		<span id="errMsgRed" class="errMsg"></span>
	                  		<br>
	                  		<label for="tel">Telefono numeris. <small>Numerį pradėkite - 370</small></label>
	                 		<input type="text" value="370" class="form-control" id="phone" name="phone_number" placeholder="Ä®veskite savo Tel. Nr."></input>
	                  		<span id="errMsgRed" class="errMsg"></span>
	                  		<br>
	                  		<hr>
                  			<button class="btn btn-danger" type="submit" name="submit">Pateikti</button>
                  			<p>P.S. Po užsakymo su jumis susisieks pats Jonas V. aptarti užsakymo detalių ir laiko.</p>
	                  	</form>
	 				</div>
	            </div>
	        </div>
	    </section>
	</div>
	<!--ORDER FORM END-->


	<!--CONTACT-->
	<div class="container">
		<section>
			<div class="page-header" id="1contacts">
  				<h2>Jono kontaktai</h2>
  			</div>
  			<div class="row">
  			<div class="col-sm-4 well">
  					<div class="panel panel-default">
  						<div class="panel-body">
  							<address>
  								<strong>„Jonas PHOTO"</strong><br />
  								Air Canada Centre<br />
  								Toronto "Raptors" Oficiali Arena<br />
  								Ontarijas, Torontas, Kanada<br /><br />
  								<strong>Darbo laikas:</strong><br />
  								Darbo dienomis <strong>VISADA</strong><br />
  								Šeštadienį <strong>VISADA</strong><br />
  								Sekmadienį <strong>VISADA</strong><br /><br /> 
  								<strong>Dir. Jonas V.</strong><br />
  								El. Paštas - jonasphoto@gmail.com
  							</address>
  						</div>
  					</div>
  				</div>
  				<div class="col-lg-8">
  					<div class="embed-responsive embed-responsive-16by9">
  						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11548.904002007008!2d-79.3790989!3d43.6434661!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5842d0e7d5669410!2sAir+Canada+Centre!5e0!3m2!1slt!2slt!4v1518786508583" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  					</div>
  				</div>
  			</div>
		</section>
	</div>
	<!--CONTACT END-->


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
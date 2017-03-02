<?php include 'includes/header.php'; ?>

<div id="home">

	<div class="container container_custom">

		<nav>
		  	<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle	="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Navigation</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
				    	<li class="active"><a href="index.php">Accueil</a></li>
				    	<li class="active"><a href="randonnées.php">Randonnées</a></li>
				    	<li class="active"><a href="activitees.php">Balades en familles</a></li>
				    	<li class="active"><a href="location.php">Location</a></li>
		    		</ul>
				</div>
			</div>
		</nav>
		<div>
			<img src="assets/img/VTT.png" alt="logo" id="logo">
		</div>

		<div class="row row_custom">
			<div class="col-xs-4">
				<p id="head">Bienvenue sur la page d'accueil du site regroupant les différentes activités liées au VTT dans fontainebleau et ces alentour.</p>
			</div>
		
		</div>


		<div id="s_info">
			<div class= "s_onglet" id="s_place1">
				<h3>Actualités :</h3>
				<ul>
					<li>Nouveaux parcours randonnées, le parcours des Grands Feuillards, venez découvrir ce parcours inédit situé au cœur de la forêt. </li>
					<li>Le 19 Mars 2017, l'association "Les vieux bois" organise une randonnée familial, venez prendre un bol d'air frais avec votre famille et amis.</li>
					<li>La nature nous ouvre ses bras et nous respecte, faite de même, ramasser vos déchets !:) </li>
				</ul>
			</div>

			<div class="s_onglet" id="s_place2">
				<h3>Parcours et balades :</h3>
				<p>La ville de Fontainebleau vous propose différents parcours, de randonnée ou de balade entre famille, pour tout niveaux et tout âge, validé par l’Office National des Forêts (ONF). Venez les découvrir !</p>
			</div>

			<div class="s_onglet" id="s_place3">
				<h3>Location</h3>
				<p>Venez vous équiper afin de partir à l’aventure chez « A la petite Reine »,  vélo, porte-bébé, casque ou gourde, vous trouverez tout ce qu’il vous faut pour partir à l’aventure !!</p><br/>
				<h4><a href="page4.php">Les tarifs de la location en cliquant ici</a></h4>
			</div>
		</div>

		<footer class="row">
			<h3>Ville de Fontainebleau</h3>
			<p>La forêt de Fontainebleau, important massif boisé de  25 000 Ha, vous accueil afin de passer des moments privilégies au sein de la nature. La ville de Fontainebleau est à votre disposition pour toutes demande d’informations. Utilisez le formulaire ci-dessous!</p>
			<h3>Nous contacter :</h3>
			<form>
				<input type="email" class="email" placeholder="Votre email" />
				<textarea name="question" id="question" placeholder="Votre message" ></textarea>
				<p id="news"><input type="checkbox" name="news" id="news" />S'abonner a la new's letter</p>
				<input type="submit" value="Envoyer" />
			</form>
		</footer>

	
		<div class="meteo">
			<script charset='UTF-8' src='http://www.meteofrance.com/mf3-rpc-portlet/rest/vignettepartenaire/771860/type/VILLE_FRANCE/size/PORTRAIT_VIGNETTE' type='text/javascript'></script>
		</div>

		<div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84726.97578082202!2d2.6115195264372346!3d48.42355814408098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5f38bf6baad81%3A0x40b82c3688c5a90!2s77300+Fontainebleau!5e0!3m2!1sfr!2sfr!4v1488202301496" width="22%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>

<?php include 'includes/footer.php' ?>
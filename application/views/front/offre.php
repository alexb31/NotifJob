<?php
    include("_head.php");
?>
<body id="page-top">
<?php
    include("_menu.php");
?>
	<header id="header-offre" class="header-orange">                       
        <h3><?= $offre[0]['intitule']; ?></h3>             
		<div id="offre-nbr">12</br>candidats</div>
    </header>
	
	<!--all-jobs-offers-list-->
	<section id="infos-offres">
		<div class="container">
			<div class="row" id="infos">
				<div class="col-lg-6 col-md-6 col-xs-12">
					<h4>Email</h4>
					<p>marcel.pudin@gmail.com</p>                
					
					<h4>Téléphone</h4>
					<p>06  25 32 31 56 55</p>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<img src="<?php echo base_url();?>assets/web/img/france.png" class="img-responsive" alt="">
					<div id="loc-offre">
						<h4>Lieu du Contrat</h4>
						<span id="ville"><?= $offre[0]['lieu']; ?></span></br>
					</div>
					
				</div>          
         
				<div class="col-lg-6 col-md-6 col-xs-12">
					<h4>Compétences</h4>
					<p class="desc-profil"><?= $offre[0]['competences']; ?></p>                
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<h4>Missions</h4>
					<p class="desc-profil">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<h4>Etudes</h4>
					<p class="desc-profil"><?= $offre[0]['etudes']; ?></p>                
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<h4>Expériences</h4>
					<p class="desc-profil"><?= $offre[0]['experiences']; ?></p>
				</div>
			</div>
		</div>
		<div id="ct-bbtn">
			<button type="button" class="btn-detail">Postuler</button>
		</div> 
	</section>
    <hr>

<?php
    include("_footer.php");
?>	
	

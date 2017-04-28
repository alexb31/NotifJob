<?php
    include("_head.php");
?>
<body id="page-top">
<?php
    include("_menu.php");
?>
	<header id="header-une">
        <div class="header-content header-pages">
            <div class="header-content-inner">
                        
                <h3>Faites votre choix parmi les  </br><span>9 offres</span> du jour</h3>             
              
            </div>
        </div>
    </header>	
	<!--all-jobs-offers-list-->
	<section id="une-offres">
		<div class="container">
			<div class="row">
			<?php foreach($offres as $offre): ?>
		        <div class="featured-box">
					<div class="featured-box-col1 hidden-xs">
							<span>144</span></br>candidatures
					</div>	
					<div class="featured-box-col2">
							<h3><?= $offre['intitule']; ?></h3>
							<p>A partir du <?= $offre['date_debut']; ?></p>						
					</div>
					<a href="<?php echo base_url();?>offre?id=<?= $offre['id']; ?>"><div class="featured-box-col3">
							<button type="button" class="btn-detail"><i class="fa fa-2x fa-eye" aria-hidden="true"></i></button>
					</div></a>				
				</div>	
		    <?php endforeach; ?>
			</div>
		</div>
	</section>
	<div class="ctn-voir-offres">
		<button type="button" class="btn-detail">Voir toutes les offres</button>
	</div>	
    

<?php
    include("_footer.php");
?>	
	

<?php
    include("_head.php");
?>
<body id="page-top">
<?php
    include("_menu.php");
?>
	<header id="header-login" class="header-orange">                       
        <h3>Retrouvez toutes les offres auxquelles vous avez postulé</h3>             
		<div id="annonces-nbr">12</div>
    </header>
	<div id="filter-mes-offres" class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 text-center">
				<div class="form-check">
					<label class="form-check-label accepte">
					  <input type="checkbox" class="form-check-input">
					  Acceptées
					</label>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 text-center">
				<div class="form-check">
					<label class="form-check-label en-attente">
					  <input type="checkbox" class="form-check-input">
					  En attente
					</label>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 text-center">
				<div class="form-check">
					<label class="form-check-label refuse">
					  <input type="checkbox" class="form-check-input">
					  Refusées
					</label>
				</div>
			</div>
		</div>
		
	</div>
	<!--all-jobs-offers-list-->
	<section id="mes-offres">
		<div class="container">
			<div class="row">			
					
				<div class="featured-box">
					<div class="featured-box-col1 hidden-xs">
							<span>144</span></br>candidatures
					</div>	
					<div class="featured-box-col2">
							<h3>Développeur Front End</h3>
							<p>A partir du 10/05/2017</p>						
					</div>
					<div class="featured-box-col3">
							<button type="button" class="btn-detail"><i class="fa fa-2x fa-eye" aria-hidden="true"></i></button>
					</div>
					<div class="featured-box-col4 status-footer accepte">							
						<p>Postulé le 15/05/2017 <span><i class="fa fa-check-circle-o" aria-hidden="true"></i> Entretient accepté</span></p>						
					</div>
				</div>
			
				<div class="featured-box">
					<div class="featured-box-col1 hidden-xs">
							<span>101</span></br>candidatures
					</div>	
					<div class="featured-box-col2">
							<h3>Web Designer</h3>
							<p>A partir du 10/05/2017</p>						
					</div>
					<div class="featured-box-col3">
							<button type="button" class="btn-detail"><i class="fa fa-2x fa-eye" aria-hidden="true"></i></button>
					</div>
					<div class="featured-box-col4 status-footer en-attente">							
						<p>Postulé le 15/05/2017 <span><i class="fa fa-clock-o" aria-hidden="true"></i> Entretient en attente</span></p>						
					</div>
				</div>
		
				<div class="featured-box">
					<div class="featured-box-col1 hidden-xs">
							<span>101</span></br>candidatures
					</div>	
					<div class="featured-box-col2">
							<h3>Web Designer</h3>
							<p>A partir du 10/05/2017</p>						
					</div>
					<div class="featured-box-col3">
							<button type="button" class="btn-detail"><i class="fa fa-2x fa-eye" aria-hidden="true"></i></button>
					</div>
					<div class="featured-box-col4 status-footer refuse">							
						<p>Postulé le 15/05/2017 <span><i class="fa fa-ban" aria-hidden="true"></i> Entretient refuse</span></p>						
					</div>
				</div>         
			   
			</div>
		</div>
	</section>
    

<?php
    include("_footer.php");
?>	
	

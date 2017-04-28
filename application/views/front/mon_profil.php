<?php
    include("_head.php");
?>
<body id="page-top">
<?php
    include("_menu.php");
?>
	<header id="header-mon-profil" class="header-orange">                       
        <h3><span><?php echo $user['fname']; ?> <?php echo
				$user['name'];?></span></h3>
	</header>
	
	<!--all-jobs-offers-list-->
	<section id="infos-profil">
		<div class="container">
			<div id="infos">
				<h4>Email</h4>
				<p><?php echo $user['email']; ?></p>
                
				<h4>Téléphone</h4>
				<p><?php echo $user['phone']; ?></p>
               
				<h4>Compétences</h4>
                <p class="desc-profil"><?php echo $user['skills']; ?></p>
                
				<h4>Expériences</h4>
                <p class="desc-profil"><?php echo $user['experiences']; ?></p>
                
				<div>
					<button type="button" class="btn-detail">Contacter</button>
					<button type="button" class="btn-detail"><a href="<?php echo base_url();?>index.php/Questions/quizdisplay">Faire le test</a></button>
				</div> 
			</div>
		</div>
	</section>
    <hr>

<?php
    include("_footer.php");
?>	
	

<?php
    include("_head.php");
?>
<body id="page-top">
<?php
    include("_menu.php");
?>
	<header id="header-login" class="header-orange">    
                        
        <h3>N’ésitez pas à nous contacter</h3>       
    </header>
	
	<section id="login-section">
		<form class="from-section" action="" method="post">
			<div class="form-group has-feedback">
			  <label for="exampleInputEmail1">Email</label>
			  <input type="email" class="form-control inputEmail" name="email" required=""
					 id="email" aria-describedby="emailHelp" placeholder="Email" data-error="That
					  email address is invalid" value="">				
			</div>

			<div class="form-group valid-form">
				<label for="input-competences">Expériences professionnelles</label>
				<textarea name="experiences" id="experiences" rows="3" class="form-control"	placeholder="Experiences"></textarea>
			</div>

			<div class="form-group form-btn">
				<input type="submit" name="loginSubmit" class="btn-detail" value="Envoyer email" />
			</div>
		</form>	
		
	</section>
	<p class="adresse-local">15, avenue de la Santé - Paris 750112</p>
	<img src="<?php echo base_url();?>assets/web/img/carte.png" class="img-responsive" alt="">
	
	<hr>
    

<?php
    include("_footer.php");
?>	
	

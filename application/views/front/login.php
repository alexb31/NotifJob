<?php
    include("_head.php");
?>
<body id="page-top">
<?php
    include("_menu.php");
?>
	<header id="header-login" class="header-orange">    
                        
        <h3>Connectez-vous pour accéder à votre compte personnel</h3>

		<?php
		if(!empty($success_msg)){
			echo '<p class="statusMsg">'.$success_msg.'</p>';
		}elseif(!empty($error_msg)){
			echo '<p class="statusMsg">'.$error_msg.'</p>';
		}
		?>
       
    </header>
	
	<section id="login-section">
		<form class="from-section" action="" method="post">
			<div class="form-group has-feedback">
			  <label for="exampleInputEmail1">Email</label>
			  <input type="email" class="form-control inputEmail" name="email" required=""
					 id="email" aria-describedby="emailHelp" placeholder="Email" data-error="That
					  email address is invalid" value="">
				<?php echo form_error('email','<span class="help-block">','</span>'); ?>
			</div>

			<div class="form-group">
			  <label for="exampleInputEmail1">Mot de passe</label>
				<input type="password" class="form-control inputPassword" name="password" placeholder="Password" required="">
				<?php echo form_error('password','<span class="help-block">','</span>'); ?>
			</div>

			<div class="form-group form-btn">
				<input type="submit" name="loginSubmit" class="btn-detail" value="Connexion" />
			</div>
		</form>
		<p>
			<small>Vous n’avez pas encore de compte ? <a>Inscrivez-vous</a></small></br>
			<small><a>Mot de passe oublié</a></small>
		</p>
		
	</section>
	<hr>
    

<?php
    include("_footer.php");
?>	
	

<?php
    include("_head.php");
?>
<body id="page-top">
<?php
    include("_menu.php");
?>
	<header id="header-login" class="header-orange">    
                        
        <h3>Connectez-vous pour accéder à votre compte personnel</h3>             
       
    </header>
	
	<section id="login-section">

		<form class="from-section" action="" method="post"
		>

			<div class="form-group valid-form">
				<label for="input-nom">Nom</label>
				<input type="text" class="form-control" name="name"
					   placeholder="Name" required=""
					   value="<?php echo !empty($user['name']) ? $user['name'] : ''; ?>">
				<?php echo form_error('name', '<span class="help-block">', '</span>'); ?>
			</div>

			<div class="form-group valid-form">
				<label for="input-prenom">Prénom</label>
				<input type="text" class="form-control" name="fname"
					   placeholder="First Name" required=""
					   value="<?php echo !empty($user['fname']) ? $user['fname'] : ''; ?>">
				<?php echo form_error('fname', '<span class="help-block">',
					'</span>'); ?>
			</div>

			<div class="form-group valid-form">
				<label for="input-prenom">Téléphone</label>
				<input type="text" class="form-control" name="phone"
					   placeholder="Phone"
					   value="<?php echo !empty($user['phone']) ? $user['phone'] : ''; ?>">
			</div>

			<div class="form-group has-feedback">
				<label for="input-email">Email</label>
				<input type="email" class="form-control inputEmail"
					   name="email" placeholder="Email"
					   data-error="That email address is invalid"
					   required=""
					   value="<?php echo !empty($user['email']) ? $user['email'] : ''; ?>">
				<?php echo form_error('email', '<span class="help-block">', '</span>'); ?>
			</div>

			<div class="form-group">
				<label for="input-password">Mot de passe</label>
				<input type="password" class="form-control inputPassword"
					   name="password" placeholder="Password" required="">
				<?php echo form_error('password', '<span class="help-block">', '</span>'); ?>
			</div>

			<div class="form-group valid-form">
				<label for="input-competences">Compétences professionnelles</label>
				<?php echo form_error('skills', '<span 
                                        class="help-block form-control">', '</span>'); ?>
				<textarea name="skills" id="skills" rows="3"
						  placeholder="Skills" class="form-control"><?php echo set_value
					("skills",
						""); ?></textarea>
			</div>

			<div class="form-group valid-form">
				<label for="input-competences">Expériences professionnelles</label>
				<?php echo form_error('experiences', '<span 
                                        class="help-block">', '</span>'); ?>
				<textarea name="experiences" id="experiences" rows="3" class="form-control"
						  placeholder="Experiences"><?php echo set_value
					("experiences",
						""); ?></textarea>
			</div>

			<div class="form-group form-btn">
				<input type="submit" name="regisSubmit" class="btn-primary"
					   value="Submit"/>
			</div>
		</form>
		
	</section>
	<hr>
    

<?php
    include("_footer.php");
?>	
	

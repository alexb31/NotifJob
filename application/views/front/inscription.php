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
		<form class="from-section">
			<div class="form-group">
			  <label for="input-nom">Nom</label>
			  <input type="text" class="form-control" id="nom">
			</div>
			<div class="form-group">
			  <label for="input-prenom">Prénom</label>
			  <input type="text" class="form-control" id="prenom">
			</div>
			<div class="form-group">
			  <label for="input-prenom">Téléphone</label>
			  <input type="text" class="form-control" id="telephone">
			</div>
			<div class="form-group">
			  <label for="input-email">Email</label>
			  <input type="email" class="form-control" id="email">
			</div>
			<div class="form-group">
			  <label for="input-password">Mot de passe</label>
			  <input type="password" class="form-control" id="password" >
			</div>
			<div class="form-group">
				<label for="input-competences">Compétences professionnelles</label>
				<textarea class="form-control" id="competences" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label for="input-competences">Expériences professionnelles</label>
				<textarea class="form-control" id="competences" rows="3"></textarea>
			</div>
			<div class="form-group form-btn">
				<button type="submit" class="btn-detail">S'inscrire</button>
			</div>
		</form>
		
	</section>
	<hr>
    

<?php
    include("_footer.php");
?>	
	

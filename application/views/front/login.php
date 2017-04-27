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
			  <label for="exampleInputEmail1">Email</label>
			  <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Mot de passe</label>
			  <input type="password" class="form-control" id="password" >
			</div>
			<div class="form-group form-btn">
				<button type="submit" class="btn-detail">Connexion</button>
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
	

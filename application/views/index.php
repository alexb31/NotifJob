<?php
    include("_head.php");
?>
<body id="page-top">
<?php
    include("_menu.php");
?>
	<header>
        <div class="header-content">
            <div class="header-content-inner">
                <a class="homeHeading" href="">
                    <img src="../web/img/logo.png" class="img-responsive" alt="">    
                </a>           
                
                <div id="recherche-group" class="input-group">      
                    <input type="text" placeholder="Poste Recherché" class="form-control" id="input-recherche">
                    <span class="input-group-addon btn-recherche">Recherche</span>
                </div>
                
                <div id="infos-group">
                <div class="row">
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="service-box">                            
                            <h3>1325</h3>
                            <p class="text-muted">utilisateurs</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="service-box">
                            <h3>14 232</h3>
                            <p class="text-muted">offres en ligne</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="service-box">
                            <h3>256</h3>
                            <p class="text-muted">spots connectés</p>
                        </div>
                    </div>                    
                </div>
            </div>
                
            </div>
        </div>
    </header>   
    <section id="infos">
		<div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-pointer text-primary sr-icons"></i>
                        <p>Recevez des notifications des nouvelles offres d’emploi</p>
                        <p><small> (l’activation du Bluetooth est requise)</small></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-search-mobile text-primary sr-icons"></i>
                        <p>Toruvez l’offre qui vous correspond à l’aide de la recherche détaillée</p>                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-entretien text-primary sr-icons"></i>
                        <p>Obtenez rapidement un entretient sous une semaine</p>                        
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <section id="offres">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="offre-box">
                        <div class="header-offre-box">                            
                            <h3>Développeur front End</h3>
                        </div>
                        <p>Description</p>
                        <div class="footer-btn">
                            <button type="button" class="btn-detail">Details de l'offre</button>
                        </div>
                        
                    </div>
                </div>     
            </div>
			<p id="tt-offres"><a>Toute les offres ></a></p>
        </div>
    </section> 
    
    <section id="contact">
        <div class="container">
            <div class="row">             
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p>Restez informez des actualités du service et des mises à jour</p>
					<button type="button" class="btn-detail">S’inscrire à la newsletter</button>
                </div>
            </div>
        </div>
    </section>

<?php
    include("_footer.php");
?>	
	

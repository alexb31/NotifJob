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
                <?php foreach($offres as $offre): ?>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="offre-box">
                        <div class="header-offre-box">                            
                            <h3><?= $offre['intitule']; ?></h3>
                        </div>
                        <p>Description</p>
                        <div class="footer-btn">
                            <a href="<?php echo base_url();?>offre?id=<?= $offre['id']; ?>"><button type="button" class="btn-detail">Details de l'offre</button></a>
                        </div>
                        
                    </div>
                </div>
                <?php endforeach; ?> 
            </div>
			<p id="tt-offres"><a>Toute les offres ></a></p>
        </div>
    </section> 
    
    
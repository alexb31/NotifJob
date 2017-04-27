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
                    <img src="<?php echo base_url();?>application/web/img/logo.png" class="img-responsive" alt="">    
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
    <?= $contents ?>

<?php
    include("_footer.php");
?>	
	

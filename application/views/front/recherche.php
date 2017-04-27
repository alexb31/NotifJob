<?php
    include("_head.php");
?>
<body id="page-top">
<?php
    include("_menu.php");
?>
	<header id="header-recherche">
        <div class="header-content">
            <div class="header-content-inner">
                <a class="homeHeading" href="">
                    <img src="<?php echo base_url();?>assets/web/img/icons/search.png" class="img-responsive" alt="">    
                </a>           
                <h3>Trouvez les offres qu vous intéresse parmi les </br><span>755 offres</span> disponibles</h3>             
              
            </div>
        </div>
    </header>
	<section id="filter">
		<div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div id="recherche-poste" class="input-group filter-select">
						<select  class="form-control" id="sel1">
							<option>Poste recherché</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						  </select>					
					</div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div id="recherche-localisation" class="input-group filter-select">
						<select  class="form-control" id="sel2">
							<option>Localisation</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						  </select>					
					</div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div id="recherche-contrat" class="input-group filter-select">
						<select  class="form-control" id="sel3">
							<option>Type de contrat</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						  </select>					
					</div>
                </div>                
            </div>
			<div class="ctn-btn-lancer">
                <button type="button" class="btn-detail">Lancer recherche</button>
			</div>
        </div>
    </section>
	
	<!--all-jobs-offers-list-->
	<section id="all-offres">
		<div class="container">
			<div class="row">			
					
				<div class="featured-box">
					<div class="featured-box-col1 wow fadeInRight delay-02s">
							<span>144</span></br>candidatures
					</div>	
					<div class="featured-box-col2 wow fadeInRight delay-02s">
							<h3>Développeur Front End</h3>
							<p>A partir du 10/05/2017</p>						
					</div>
					<div class="featured-box-col3 wow fadeInRight delay-02s">
							<button type="button" class="btn-detail"><i class="fa fa-2x fa-eye" aria-hidden="true"></i></button>
					</div>					
				</div>
			
				<div class="featured-box">
					<div class="featured-box-col1 wow fadeInRight delay-02s">
							<span>101</span></br>candidatures
					</div>	
					<div class="featured-box-col2 wow fadeInRight delay-02s">
							<h3>Web Designer</h3>
							<p>A partir du 10/05/2017</p>						
					</div>
					<div class="featured-box-col3 wow fadeInRight delay-02s">
							<button type="button" class="btn-detail"><i class="fa fa-2x fa-eye" aria-hidden="true"></i></button>
					</div>					
				</div>         
			   
			</div>
		</div>
	</section>
	
    

<?php
    include("_footer.php");
?>	
	

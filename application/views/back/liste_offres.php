<?php
    include("_head.php");
?>
<body>
	  <!-- #menu -->
 <div id="wrapper">	  
<?php
    include("_menu.php");
?>
  <!-- Page Content -->
    <h2>Liste d'offres</h2>
    <hr>
            
	<div class="container-fluid">
		
		<div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div id="recherche-poste" class="input-group filter-select">
						<select  class="form-control" id="sel1">
							<option>Type de poste</option>
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
        </div>
   
        <div class="row">
            <div class="col-lg-12">
				<section id="une-offres">
					<div class="container">
						<div class="row">
						
							<div class="featured-box">
								<div class="featured-box-col1 hidden-xs">
										<span>144</span></br>candidatures
								</div>	
								<div class="featured-box-col2">
										<h3>Développeur Front End</h3>
										<p>A partir du 27/01/2017</p>						
								</div>
								<a href=""><div class="featured-box-col3">
										<button type="button" class="btn-detail"><i class="fa fa-2x fa-eye" aria-hidden="true"></i></button>
								</div></a>
								<a href=""><div class="featured-box-col3">
										<button type="button" class="btn-detail"><i class="fa fa-2x fa-pencil" aria-hidden="true"></i></button>
								</div></a>
								<a href=""><div class="featured-box-col3">
										<button type="button" class="btn-detail"><i class="fa fa-2x fa-trash" aria-hidden="true"></i></button>
								</div></a>	
							</div>
						
						</div>
					</div>
				</section>
                        
			</div>
        </div>
    </div>

<?php
    include("_footer.php");
?>
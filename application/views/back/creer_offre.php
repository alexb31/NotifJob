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
<h2>Offres d'emploi</h2>
<hr>
            
			<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group row">
						<div class="panel panel-green margin-bottom-40">
						<div class="panel-heading offre-header">
							<h3 class="panel-title"><i class="fa fa-plus-circle" aria-hidden="true"></i>    Ajouter enregistrement</h3>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="inputIntitulé" class="col-lg-2 control-label">Intitulé</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputIntitulé">
									</div>
								</div>
								<div class="form-group">
									<label for="inputDescription" class="col-lg-2 control-label">Description</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputDescription">
									</div>
								</div>
								<div class="form-group">
									<label for="inputLieu" class="col-lg-2 control-label">Lieu</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputLieu">
									</div>
								</div>
								<div class="form-group">
									<label for="inputDateDebut" class="col-lg-2 control-label">Date de début</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputDateDebut">
									</div>
								</div>
								<div class="form-group">
									<label for="inputDatePub" class="col-lg-2 control-label">Date de publication</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputDatePub">
									</div>
								</div>
								<div class="form-group">
									<label for="inputCompetences" class="col-lg-2 control-label">Competences</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputCompetences">
									</div>
								</div>
								<div class="form-group">
									<label for="inputExperiences" class="col-lg-2 control-label">Expériences</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputExperiences">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEtude" class="col-lg-2 control-label">Étude</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputEtude">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-lg-2 control-label">Email</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="inputEmail">
									</div>
								</div>	
								<div class="form-group">
									<div class=" col-lg-offset-2 col-lg-2">
										<button class="btn-orange">Enregistrer</button>
									</div>
									<div class="col-lg-4">
										<button class="btn-orange">Enregistrer et retourner à la liste</button>
									</div>
									<div class="col-lg-2">
										<button  class="btn-orange">Annuler</button>
									</div>
								</div>
							</form>
						</div>
					</div>
                    </div>
                </div>
            </div>
			




<?php
    include("_footer.php");
?>
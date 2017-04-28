<?php
include("_head.php");
?>
<body id="page-top">
<?php
include("_menu.php");
?>

<section>
<div id="container">
    <h1>Test Technique</h1>

    <form method="post" action="<?php echo base_url();?>index.php/questions/resultdisplay">

    <?php foreach ($questions as $row) { ?>

        <?php $ans_array = array($row->choice1, $row->choice2, $row->choice3, $row->answer);
        shuffle($ans_array); ?>

        <p><?= $row->id ?>.<?= $row->question ?></p>

        <input type="radio" name="quizid<?= $row->id ?>" value="<?= $ans_array[0] ?>"> <?=$ans_array[0] ?> <br>
        <input type="radio" name="quizid<?= $row->id ?>" value="<?= $ans_array[1] ?>"> <?=$ans_array[1] ?> <br>
        <input type="radio" name="quizid<?= $row->id ?>" value="<?= $ans_array[2] ?>"> <?=$ans_array[2] ?> <br>
        <input type="radio" name="quizid<?= $row->id ?>" value="<?= $ans_array[3] ?>">
        <?=$ans_array[3]?><br>

    <?php } ?>

        <br><br>

        <h1>Veuillez sélectionner la date et l'heure qui vous conviendrait pour un eventuel
            entretien :</h1>

        <label for="Jour">Jour : </label>
        <input type="text" class="datepicker" id=""
               placeholder="Jour" name="Jour"
               value="<?php echo set_value("Jour", ""); ?>"/>

        <label for="Heure">Heure : </label>
        <input type="text" class="timepicker" id=""
               placeholder="Heure" name="Heure"
               value="<?php echo set_value("Heure", ""); ?>"/>

        <input type="submit" value="Envoyer!">

        </form>
    
</div>
    </section>

<?php
include("_footer.php");
?>
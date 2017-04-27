<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <style type="text/css">

        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: white;
        }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            marg: in 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
    </style>
</head>
<body>

<div id="container">
    <h1>YOLO</h1>

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
        <input type="text" class="form-control datepicker" id=""
               placeholder="Jour" name="Jour"
               value="<?php echo set_value("Jour", ""); ?>"/>

        <label for="Heure">Heure : </label>
        <input type="text" class="form-control datepicker" id=""
               placeholder="Heure" name="Heure"
               value="<?php echo set_value("Heure", ""); ?>"/>

        <input type="submit" value="Envoyer!">

        </form>
    
</div>

</body>
</html>
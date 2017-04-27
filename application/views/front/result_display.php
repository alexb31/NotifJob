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

    <?php $score = 0; ?>

    <?php $array1 = array(); ?>
    <?php $array2 = array(); ?>
    <?php $array3 = array(); ?>
    <?php $array4 = array(); ?>
    <?php $array5 = array(); ?>
    <?php $array6 = array(); ?>
    <?php $array7 = array(); ?>
    <?php $array8 = array(); ?>

    <?php foreach ($checks as $checkans) { ?>
        <?php array_push($array1, $checkans);
    } ?>

    <?php foreach ($results as $res) { ?>
        <?php array_push($array2, $res->answer);
        array_push($array3, $res->id);
        array_push($array4, $res->question);
        array_push($array5, $res->choice1);
        array_push($array6, $res->choice2);
        array_push($array7, $res->choice3);
        array_push($array8, $res->answer);
    } ?>

    <?php
    for ($x = 0;
    $x < 2;
    $x++) { ?>


    <form method="post" action="<?php echo base_url(); ?>index.php/questions/resultdisplay">

        <p><?=$array3[$x] ?>.<?=$array4[$x]?></p>

        <?php if($array2[$x] != $array1[$x]) { ?>

            <p><span style="background-color: #FF9C9E"><?=$array1[$x]?></span></p>
            <p><span style="background-color: #ADFFB4"><?=$array2[$x]?></span></p>

        <?php } else { ?>

            <p><span style="background-color: #ADFFB4"><?=$array1[$x]?></span></p>

            <?php $score = $score + 1; ?>

        <?php } }?>

        <br><br>

        <h2>Votre Score</h2>
            <h1><?=$score?>/2</h1>
        <input type="submit" value="Envoyer!">

    </form>

</div>

</body>
</html>
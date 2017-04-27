<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Inscription Utilisateur</title>

    <style type="text/css">

        ::selection { background-color: #E13300; color: white; }
        ::-moz-selection { background-color: #E13300; color: white; }

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
            margin: 0 15px 0 15px;
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

<div class="row">
    <div class="container" style="max-width: 500px !important; margin: 0 auto;">
        <div class="col-sm-12">
        </div>
    </div>
</div>

<div class="row">
    <div class="container">
        <h1>Rentrez vos informations</h1>

        <form action="" method="post" >

            <?php echo validation_errors(); ?>
            <?php echo form_open('form'); ?>

            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" value="<?php echo set_value("prenom", ""); ?>"/>

            <label for="name">Nom</label>
            <input class="form-control" name="nom" placeholder="Nom" type="text" value="<?php
            echo set_value('nom'); ?>" />
            <span class="text-danger"><?php echo form_error('nom'); ?></span>

            <label for="email">email</label>
            <input type="text" name="email" id="email" value="<?php echo set_value("email", ""); ?>"/>

            <label for="telephone">numero de telephone</label>
            <input type="text" name="telephone" id="telephone" value="<?php echo set_value
            ("telephone",
                ""); ?>"/>

            <label for="mdp">Mot de Passe</label>
            <input type="password" name="mdp" id="mdp" value="<?php echo set_value("mdp", ""); ?>"/>

            <label for="competences">competences</label>
            <textarea name="competences" id="competences"><?php echo set_value("competences", ""); ?></textarea>

            <label for="experiences">experiences</label>
            <textarea name="experiences" id="experiences"><?php echo set_value("experiences", ""); ?></textarea>

            <input type="submit" name="submit" id="submit" value="<?php echo set_value("submit", "Valider"); ?>"/>

        </form>

    </div>
</div>

</body>
</html>
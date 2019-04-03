<?php ob_start(); ?>

<?php

if (!isset($_POST['FromCountryRegion']) AND (!isset($_POST['Weight'])) )
{
    $answer = "";

    require('php/form.php');
}
elseif (isset($_POST['FromCountryRegion']) AND isset($_POST['Weight']))
{

    if ($_POST['Weight']<=0) {

        $answer = "Weight should be higher than zero";}
    else {
        $option = $_POST['FromCountryRegion'];
        $czech = $_POST['czechRepublic'];
        $weight = $_POST['Weight'];
        $kg = $_POST['optionWeight'];
        $weightNew ="";
        if ($kg === 'kg') { $weightNew= $weight;}
        else { $weightNew = $weight *0.453592;}
        if ($czech ==='CZ') {
            require('php/price_cz.php');
        }
        else {
            require('php/price_outside.php');
        }
    }


    require('php/form.php');
}

?>
<?php $content = ob_get_clean(); ?>
<?php require('php/template.php'); ?>

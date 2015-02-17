
<!DOCTYPE html>

<?php
        /*if (!defined('ok')){die('Forbidden Fruit');}*/
        echo 'TEST index.php ACCES OK<br>';
        defined('ok',true);
        require 'Personnage.php';
        $merlin = new Personnage('Merlin');
        $merlin->regenerer();
        $merlin->atk=180;

        $harry = new Personnage('Harry');
        $harry->almost_dead();
        $harry->regenerer();

?>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
<?php
        var_dump($merlin);
?>
<br>
<?php
        var_dump($harry);
?>
<br>
<?php
        $harry->crier();
?>
    
    </body>



<html>

</html>
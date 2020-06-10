
<!--Exercice 5 Variable-->
<?php 
    $title = 'Exercice 5';
     include 'header.php';

?>

<h2>Exercice 5</h2>
<?php for($step = 1; $step <= 15; $step ++){ ?>
    <p> <?php echo 'On y arrive presque';  ?> </p>
<?php }

    include 'footer.php';
?>
<!--Exercice 7 Variable-->
<?php 
    $title = 'Exercice 7';
    include 'header.php';
?>

<h2>Exercice 7</h2>
<?php for($step = 1; $step <= 100 ; $step += 15){ ?>
    <p> <?php echo 'On tient le bon bout.'; ?> </p> 
<?php }

    include 'footer.php';
?>
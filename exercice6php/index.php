<!--Exercice 6 Variable-->
<?php 
    $title = 'Exercice 6';
    include '../header.php';
?>

<h2>Exercice 6</h2>
<?php for ($step = 20; $step >= 0 ; $step --){ ?>
    <p> <?php echo 'C\'est presque bon'; ?> </p>
<?php }

    include '../footer.php';
?>
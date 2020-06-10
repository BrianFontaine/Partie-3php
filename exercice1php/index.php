<!--Exercice 1 Variable-->
<?php 
    $title = 'Exercice 1';
    include '../header.php';

    $i = 0;
?>

<h1>Exercice 1</h1>
<?php while ($i <= 10){ ?>
    <p> <?php echo ' '.$i; ?> </p>
<?php $i++; }

    include '../footer.php';
?>
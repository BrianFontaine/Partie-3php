<!--Exercice 4 Variable-->
<?php 
    $title = 'Exercice 4';
    include 'header.php';

    $i = 1;
?>

<h1>Exercice 4</h1>
<?php while($i <= 10){ ?>
    <p> <?php echo $i; ?> </p>
<?php $i += $i / 2 ;
    }

    include 'footer.php';
?>

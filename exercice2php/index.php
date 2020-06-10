<!--Exercice 2 Variable-->
<?php 
    $title = 'Exercice 2';
    include '../header.php';

    $first = 0;
    $second = 5;
?>

<h1>Exercice 2</h1>

<?php do { ?>
    <p><?php echo $first * $second; ?></p>
<?php $first ++;
    }while($first <= 20);

include '../footer.php';
?>
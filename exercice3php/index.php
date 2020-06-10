<!--Exercice 3 Variable-->
<?php 
    $title = 'Exercice 3';
    include 'header.php';

    $firstNumber = 60;
    $secondNumber = 55;
?>

<h1>Exercice 3</h1>

<?php while ($firstNumber >= 10){ ?>
    <p> <?php echo $firstNumber * $secondNumber; ?> </p>
<?php 
    $firstNumber --;
    }

    include 'footer.php';
?>
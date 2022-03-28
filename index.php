<?php 

//Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.

$text = "La barbabietola da zucchero è una pianta del genere Beta, appartenente alla famiglia delle Chenopodiaceae (Amaranthaceae secondo la classificazione APG). Le radici della barbabietola contengono un'alta concentrazione di saccarosio. Per questo la barbabietola è coltivata nelle regioni temperate per la produzione di zucchero e di etanolo. Fino alla fine del XVIII secolo / inizio XIX secolo, quando non esisteva ancora un procedimento industrialmente conveniente per l'estrazione del saccarosio, la sua era una coltura marginale e se ne usava solo il fogliame crescente fuori terra ad uso foraggio. Fu lo scienziato tedesco Franz Karl Achard a dare il primo impulso all'industria della produzione di zucchero estratto dalla barbabietola. La selezione dei genotipi di barbabietola da zucchero tolleranti il nematode cisticolo ha raggiunto, recentemente, risultati produttivi molto interessanti. L'utilizzo di tali varietà in terreni con presenza del nematode Heterodera schachtii è da considerarsi fondamentale, pena rilevanti perdite produttive.";
$length = strlen($text);

//Una parola da censurare viene passata dall’utente tramite parametro GET.

 $parolaCensurata = $_GET["censura"];

//Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Testo: <?php echo $text; ?></p>
    <p>Lunghezza: <?php echo $length; ?></p>
</body>
</html>

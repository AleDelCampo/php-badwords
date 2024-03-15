<?php 

$paragraph = $_GET['paragraph'];

$censored = array(
    'pollo' => '***',
    'pane' => '***',
    'ciao' => '***',
    'password' => '***',
    'Daniele' => '***',
    'Davide' => '***',
    'pluto' => '***',
    'pippo' => '***');

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Badwords Results</title>
</head>
<body>

    <h1>Risultati Form: </h1>

    <div id="censored-container">
        <span id="words">(***)</span>
        <div>
            <ul id="dropdown">
                <?php for ($i = 0; $i < count($censored); $i++): ?>
                <li><?php echo array_keys($censored)[$i]; ?></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>

    <div class="form">
    <p class="paragraph">
        <!-- Facciamo apparire il paragrafo per come viene scritto. -->
        <span class="label">Ecco il tuo paragrafo: </span><?php echo $paragraph ?>
        
    </p>

    <p class="paragraph">
        <!-- Estrapoliamo la lunghezza del paragrafo e la visualizziamo. -->
        <span class="label">La sua lunghezza: </span><?php echo strlen($paragraph) ?>
    
    </p>

    <span class="paragraph">
        <!-- Rimuoviamo inserendo i 3 asterischi richiesti le parole censurate tramite l'array in cima. -->
        <span class="label">E se per caso vedi i 3 asterischi hai detto una delle parole PROIBITE: </span><?php echo strtr("$paragraph", $censored);?>

    </span>
    </div>

</body>
</html>
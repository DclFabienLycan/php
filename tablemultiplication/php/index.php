<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Table de multiplication</title>
</head>

<body>
    <header>
        <h1>Table de multiplication</h1>
    </header>
    <div id="container">
        <form name="table" method="GET" action="#">
            <select name="listeTable" id="lTable">
                <option name="listeTable">Choose</option>
                <option name="listeTable" value="0">Table de multiplication x0</option>
                <option name="listeTable" value="1">Table de multiplication x1</option>
                <option name="listeTable" value="2">Table de multiplication x2</option>
                <option name="listeTable" value="3">Table de multiplication x3</option>
                <option name="listeTable" value="4">Table de multiplication x4</option>
                <option name="listeTable" value="5">Table de multiplication x5</option>
                <option name="listeTable" value="6">Table de multiplication x6</option>
                <option name="listeTable" value="7">Table de multiplication x7</option>
                <option name="listeTable" value="8">Table de multiplication x8</option>
                <option name="listeTable" value="9">Table de multiplication x9</option>
                <option name="listeTable" value="10">Table de multiplication x10</option>
            </select>
            <p>Choisir la table à afficher</p>
            <div id="bouton">
                <button type="submit">Voir</button>
            </div>
            <div id="tableau">
                <?php include 'table.php'; ?>
            </div>
        </form>
        </div>   
        


    <script src="../js/script.js"></script>
</body>

</html>
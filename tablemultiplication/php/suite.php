<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/suite.css">
    <title>Table de multiplication</title>
</head>

<body>
    <header>
        <h1>Table de multiplication</h1>
    </header>
    <div id="container">
        <form name="table" method="GET" action="#">
            <label for="table1">Table de 1 &nbsp;</label>
            <input type="checkbox" id="table1" name="table[]" value="1"><br>
            
            <label for="table2">Table de 2 &nbsp;</label>
            <input type="checkbox" id="table2" name="table[]" value="2"><br>
            
            <label for="table3">Table de 3 &nbsp;</label>
            <input type="checkbox" id="table3" name="table[]" value="3"><br>
            
            <label for="table4">Table de 4 &nbsp;</label>
            <input type="checkbox" id="table4" name="table[]" value="4"><br>
            
            <label for="table5">Table de 5 &nbsp;</label>
            <input type="checkbox" id="table5" name="table[]" value="5"><br>
           
            <label for="table6">Table de 6 &nbsp;</label>
            <input type="checkbox" id="table6" name="table[]" value="6"><br>
            
            <label for="table7">Table de 7 &nbsp;</label>
            <input type="checkbox" id="table7" name="table[]" value="7"><br>
          
            <label for="table8">Table de 8 &nbsp;</label>
            <input type="checkbox" id="table8" name="table[]" value="8"><br>
           
            <label for="table9">Table de 9 &nbsp;</label>
            <input type="checkbox" id="table9" name="table[]" value="9"><br>

            <label for="table10">Table de 10 </label>
            <input type="checkbox" id="table10" name="table[]" value="10"><br>

            <input type="submit" name="">
        </form>
    </div>   

    <?php 
        $result;
        $i;

        if (isset($_GET['table'])) {
            foreach ($_GET['table'] as $key => $value) {
                echo '<h2>'.'Table de'.' '.$value.'</h2>'.'<br>';

                for ($i=0; $i <=30; $i++) {
                    $result = $value * $i;
                    echo $value .' '. 'x'.$i. ' '.'='.$result. '<br>';
                }
            }
        }
    ?>
        


    <script src="../js/script.js"></script>
</body>

</html>
<?php 

$table = $_GET['listeTable'];

for ($b=0; $b<=30; $b++) {
    echo $table. 'x' .$b. '=' .$table * $b.'<br>';
}

?>
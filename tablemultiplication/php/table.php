<?php 

if(isset($_GET['listeTable'])){
    echo  '<div id="tableau">';
$table = $_GET['listeTable'];
echo '<h2>'. 'Table de'.' '. $table. '</h2>'. '<br>'.'<br>';
echo '<div id="calcul">';
for ($b=0; $b<=30; $b++) {
    echo $table. ' '. 'x'. ' ' .$b.' '. '='.' ' .$table * $b.'<br>';
}
echo '</div>';
echo '</div>';
}

?>
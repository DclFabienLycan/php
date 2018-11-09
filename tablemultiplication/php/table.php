<?php 

if(isset($_GET['listeTable'])){
 echo  '<div id="tableau">';
$table = $_GET['listeTable'];
echo 'Table de'.' '. $table. '<br>'.'<br>';
for ($b=0; $b<=30; $b++) {
    echo $table. ' '. 'x'. ' ' .$b.' '. '='.' ' .$table * $b.'<br>';
}
echo '</div>';
}



?>
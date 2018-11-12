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

 <!-- <?php
// function selected() {
// 	$i;
// 	$table = $_GET['choixTable'];

// 	for ($i = 1; $i <= 10; $i++) { 
// 		if ($table == $i) {
// 			echo '<option value="' . $i . '" selected>' . 'Table de ' . $i . '</option>';
// 		} else {
// 			echo '<option value="' . $i . '">' . 'Table de ' . $i . '</option>';
// 		}
// 	}
// }
// ?> -->


<!-- PHP question for the user -->
<?php 
    function selected () {
        if(isset($_GET['listeTable'])) {
        $table = $_GET['listeTable'];
        
    }
    }
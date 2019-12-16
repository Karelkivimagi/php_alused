<?php
// h01 tabeli väljund
function table01($dbResult, $heading){
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    foreach ($heading as $th){
        echo '<th>'.$th.'</th>';
    }
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($dbResult as $row => $schoolData){
        echo '<tr>';
        foreach ($schoolData as $name => $value){
            echo '<td>'.$value.'</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}
// h03 otsingu vorm
function otsing(){
    echo '<form action="" method="get">
		<label for="otsi">Kool</label>
		<input type="text" name="otsi" id="otsi">
		<input type="submit" value="Otsi"> 
	</form>';
}
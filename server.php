<?php
$db = new SQLite3('notes.db');

$results = $db->query('SELECT notes FROM notes');
$allNotes = array();;
while ($row = $results->fetchArray()) {
 //   var_dump($row);
	$allNotes[] = $row;
}

print json_encode($allNotes);
?>

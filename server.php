<?php
$db = new SQLite3('notes.db');

$results = $db->query('SELECT notes FROM notes');
$allNotes = array();;
while ($row = $results->fetchArray()) {
	$allNotes[] = $row;
}
if( isset($_GET['addNote']) == true){
$query = 'INSERT INTO notes VALUES (\'' .$_GET['addNote'] . '\')';
$addDB = $db->query($query);
	echo "OK";
} else{
	print json_encode($allNotes);
}
?>

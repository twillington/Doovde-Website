<?php
$view = new stdClass();
$view->pageTile = "index";

require_once ("Models/Database.php");

$db = Database::getInstance();
$dbh = $db->getDbh();

$sql = 'SELECT * FROM dvd WHERE Client="0"';
//$director = 'SELECT Name FROM Director WHERE id=$director2';
$results = $dbh->prepare($sql);
//$results->execute();


$dvds = array();
if ($results->execute()) {
    while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
        $dvds[] = $row;
    }
}

require_once("Views/home.phtml");
<?php
$view = new stdClass();
$view->pageTile = "index";

require_once ("Models/Database.php");

$db = Database::getInstance();
$dbh = $db->getDbh();

$sql = 'SELECT * FROM genre';
//$sql2 = 'SELECT Name FROM Actor WHERE actor-id=(SELECT actor-id FROM Starring WHERE dvd-id ='.$_GET['id'];
//$director = 'SELECT Name FROM Director WHERE id=$director2';
$results = $dbh->prepare($sql);
//$results->execute();


$dvds = array();
if ($results->execute()) {
    while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
        $directors[] = $row;
    }
}

require_once("Views/directors.phtml");
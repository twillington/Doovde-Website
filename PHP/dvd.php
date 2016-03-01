<?php

require_once("Models/Database.php");
require_once("Models/Dvd.php");

$view = new stdClass();
$view->pageTitle = "dvd";

$db = Database::getInstance();
$dbh = $db->getDbh();

$sql = 'SELECT * FROM dvd WHERE id ='.$_GET['id'];
$sql2 = 'SELECT	`actor`.`actor-id`,	`Name` FROM	`actor`, `starring` WHERE	`starring`.`actor-id` = `actor`.`actor-id` AND `starring`.`dvd-id` = '.$_GET['id'];
$director = 'SELECT `director-id`, `Name` FROM `dvd`, `directors` WHERE `dvd`.`Director` = `directors`.`director-id` AND `dvd`.`id` = '.$_GET['id'];
$results = $dbh->prepare($sql);
$results2 = $dbh->prepare($sql2);
$results3 = $dbh->prepare($director);

$results->execute();
$results2->execute();
$results3->execute();

$view->dvd = new Dvd($results->fetch());
$view->dvd->setDirector($results3->fetch());

$actor = array();
while($row = $results2->fetch())
{
   $actor[] = $row;
}
$view->dvd->setActors($actor);



require_once("Views/dvd.phtml");
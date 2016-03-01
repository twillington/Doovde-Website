<?php


/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 06/01/2016
 * Time: 16:09
 */
class Dvd
{

    private $id;
    private $Title;
    private $Director;
    private $RunTime;
    private $Price;
    private $IMDBRating;
    private $actors;
    private $ReleaseYear;

    /**
     * @return mixed
     */
    public function getReleaseYear()
    {
        return $this->ReleaseYear;
    }

    /**
     * @param mixed $ReleaseYear
     */
    public function setReleaseYear($ReleaseYear)
    {
        $this->ReleaseYear = $ReleaseYear;
    }

    /**
     * @return mixed
     */
    public function getSynopsis()
    {
        return $this->Synopsis;
    }

    /**
     * @param mixed $Synopsis
     */
    public function setSynopsis($Synopsis)
    {
        $this->Synopsis = $Synopsis;
    }
    private $Synopsis;


    /**
     * @return mixed
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param mixed $Director
     */
    public function setDirector($Director)
    {
        $this->Director = $Director;
    }

    /**
     * @param mixed $actors
     */
    public function setActors($actors)
    {
        $this->actors = $actors;
    }

    public function __construct($dbRow){
        $this->id = $dbRow['id'];
        $this->Title = $dbRow['Title'];
        $this->RunTime = $dbRow['RunTime'];
        $this->Price = $dbRow['Price'];
        $this->IMDBRating = $dbRow['IMDBRating'];
        $this->Synopsis = $dbRow['Synopsis'];
        $this->ReleaseYear = $dbRow['ReleaseYear'];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @return mixed
     */
    public function getDirector()
    {
        return $this->Director;
    }

    /**
     * @return mixed
     */
    public function getRunTime()
    {
        return $this->RunTime;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        if ($this->Price=="A")
            return "£3.50";
        elseif ($this->Price=="B")
            return "£2.50";
        elseif ($this->Price=="C")
            return "£1.00";
    }

    /**
     * @return mixed
     */
    public function getIMDBRating()
    {
        return $this->IMDBRating;
    }

}
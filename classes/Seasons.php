<?php



class Seasons
{
    private $season;
    private $days;
    private $date;
    private $author;
    private $category;

    public function __construct($season = '', $days = '', $author = '', $date = '', $category = '')
    {
        $this->season = ($season !== '') ? $season : [1]; // Set $season to the provided value, or [1] if no value is provided.

       
        $this->days = $days;
        $this->author = $author;
        $this->date = $date;
        $this->category = $category;
    }

    public function getDateFr()
    {
        return date('d/m/Y', strtotime($this->date));
    }

    /**
     * Get the value of season
     */ 
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set the value of season
     *
     * @return  self
     */ 
    public function setSeason($season)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get the value of days
     */ 
    public function getSays()
    {
        return $this->days;
    }

    /**
     * Set the value of days
     *
     * @return  self
     */ 
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
}

<?php



class Seasons
{
    private $season;
    private $date;
    private $category;

    public function __construct($season = '', $date = '', $category = '')
    {
        $this->season = ($season !== '') ? $season : [1]; // Set $season to the provided value, or [1] if no value is provided.

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

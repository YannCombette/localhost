<?php



class Days
{
    private $day;
    private $date;
    private $language;

    public function __construct($day = '', $date = '', $language = '')
    {
        $this->day = ($day !== '') ? $day : [1]; // Set $day to the provided value, or [1] if no value is provided.

        $this->date = $date;
        $this->language = $language;
    }

    public function getDateFr()
    {
        return date('d/m/Y', strtotime($this->date));
    }

    /**
     * Get the value of day
     */ 
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set the value of day
     *
     * @return  self
     */ 
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }
    
    /**
     * Get the value of language
     */ 
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set the value of language
     *
     * @return  self
     */ 
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }
}

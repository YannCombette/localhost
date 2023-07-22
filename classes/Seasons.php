<?php



class Seasons
{
    private $season;


    public function __construct($season = '')
    {
        $this->season = ($season !== '') ? $season : [1]; // Set $season to the provided value, or [1] if no value is provided.


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
}

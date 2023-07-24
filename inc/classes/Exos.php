<?php



class Exos
{
    private $exo;
    private $date;
    private $language;

    public function __construct($exo = '', $date = '', $language = '')
    {
        $this->exo = ($exo !== '') ? $exo : [1]; // Set $exo to the provided value, or [1] if no value is provided.

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
    public function getExo()
    {
        return $this->exo;
    }

    /**
     * Set the value of day
     *
     * @return  self
     */
    public function setExo($exo)
    {
        $this->exo = $exo;

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

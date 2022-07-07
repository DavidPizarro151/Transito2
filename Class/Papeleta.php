<?php
class Papeleta{
    private $NROPAP, $NROPLA, $INFCOD, $IDPOL;
    function __construct($NROPAP, $NROPLA, $INFCOD, $IDPOL, $PAPFECHA){
        $this->NROPAP = $NROPAP;
        $this->NROPLA = $NROPLA;
        $this->INFCOD = $INFCOD;
        $this->IDPOL = $IDPOL;
    }
    /**
     */ 
    public function getNROPAP()
    {
        return $this->NROPAP;
    }

    /**
     * Set the value of NROPAP
     *
     * @return  self
     */ 
    public function setNROPAP($NROPAP)
    {
        $this->NROPAP = $NROPAP;

        return $this;
    }

    /**
     * Get the value of NROPLA
     */ 
    public function getNROPLA()
    {
        return $this->NROPLA;
    }

    /**
     * Set the value of NROPLA
     *
     * @return  self
     */ 
    public function setNROPLA($NROPLA)
    {
        $this->NROPLA = $NROPLA;

        return $this;
    }

    /**
     * Get the value of INFCOD
     */ 
    public function getINFCOD()
    {
        return $this->INFCOD;
    }

    /**
     * Set the value of INFCOD
     *
     * @return  self
     */ 
    public function setINFCOD($INFCOD)
    {
        $this->INFCOD = $INFCOD;

        return $this;
    }

    /**
     * Get the value of IDPOL
     */ 
    public function getIDPOL()
    {
        return $this->IDPOL;
    }

    /**
     * Set the value of IDPOL
     *
     * @return  self
     */ 
    public function setIDPOL($IDPOL)
    {
        $this->IDPOL = $IDPOL;

        return $this;
    }

}
?>
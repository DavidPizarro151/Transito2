<?php
class Vehiculo{
    private $NROPLA, $NOMPRO,$COLOR, $MODELO;
    function __construct($NROPLA, $NOMPRO,$COLOR, $MODELO){
        $this->NROPLA = $NROPLA;
        $this->NOMPRO = $NOMPRO;
        $this->COLOR = $COLOR;
        $this->MODELO = $MODELO;
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
     * Get the value of NOMPRO
     */ 
    public function getNOMPRO()
    {
        return $this->NOMPRO;
    }

    /**
     * Set the value of NOMPRO
     *
     * @return  self
     */ 
    public function setNOMPRO($NOMPRO)
    {
        $this->NOMPRO = $NOMPRO;

        return $this;
    }

    /**
     * Get the value of COLOR
     */ 
    public function getCOLOR()
    {
        return $this->COLOR;
    }

    /**
     * Set the value of COLOR
     *
     * @return  self
     */ 
    public function setCOLOR($COLOR)
    {
        $this->COLOR = $COLOR;

        return $this;
    }

    /**
     * Get the value of MODELO
     */ 
    public function getMODELO()
    {
        return $this->MODELO;
    }

    /**
     * Set the value of MODELO
     *
     * @return  self
     */ 
    public function setMODELO($MODELO)
    {
        $this->MODELO = $MODELO;

        return $this;
    }
}
?>
<?php
class Pagos{
    private $NROPAP, $NROPLA, $NOMPRO, $INFIMP, $PAPFECHA, $DESCUENTOS, $TOTAL;
    function __construct($NROPAP, $NROPLA, $NOMPRO, $INFIMP, $PAPFECHA, $DESCUENTOS, $TOTAL){
        $this->NROPAP = $NROPAP;
        $this->NROPLA = $NROPLA;
        $this->NOMPRO = $NOMPRO;
        $this->INFIMP = $INFIMP;
        $this->PAPFECHA = $PAPFECHA;
        $this->DESCUENTOS = $DESCUENTOS;
        $this->TOTAL = $TOTAL;
    }
    

    /**
     * Get the value of NROPAP
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
     * Get the value of INFIMP
     */ 
    public function getINFIMP()
    {
        return $this->INFIMP;
    }

    /**
     * Set the value of INFIMP
     *
     * @return  self
     */ 
    public function setINFIMP($INFIMP)
    {
        $this->INFIMP = $INFIMP;

        return $this;
    }

    /**
     * Get the value of PAPFECHA
     */ 
    public function getPAPFECHA()
    {
        return $this->PAPFECHA;
    }

    /**
     * Set the value of PAPFECHA
     *
     * @return  self
     */ 
    public function setPAPFECHA($PAPFECHA)
    {
        $this->PAPFECHA = $PAPFECHA;

        return $this;
    }

    /**
     * Get the value of DESCUENTOS
     */ 
    public function getDESCUENTOS()
    {
        return $this->DESCUENTOS;
    }

    /**
     * Set the value of DESCUENTOS
     *
     * @return  self
     */ 
    public function setDESCUENTOS($DESCUENTOS)
    {
        $this->DESCUENTOS = $DESCUENTOS;

        return $this;
    }

    /**
     * Get the value of TOTAL
     */ 
    public function getTOTAL()
    {
        return $this->TOTAL;
    }

    /**
     * Set the value of TOTAL
     *
     * @return  self
     */ 
    public function setTOTAL($TOTAL)
    {
        $this->TOTAL = $TOTAL;

        return $this;
    }
}
?>
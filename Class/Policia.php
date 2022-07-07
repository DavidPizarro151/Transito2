<?php
class Policia{
    private $IDPOL;
    private $NOMPOL;
    private $NROPATR;
    
    function __construct($IDPOL, $NOMPOL, $NROPATR){
        $this->IDPOL = $IDPOL;
        $this->NOMPOL = $NOMPOL;
        $this->NROPATR = $NROPATR;
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

    /**
     * Get the value of NOMPOL
     */ 
    public function getNOMPOL()
    {
        return $this->NOMPOL;
    }

    /**
     * Set the value of NOMPOL
     *
     * @return  self
     */ 
    public function setNOMPOL($NOMPOL)
    {
        $this->NOMPOL = $NOMPOL;

        return $this;
    }

    /**
     * Get the value of NROPATR
     */ 
    public function getNROPATR()
    {
        return $this->NROPATR;
    }

    /**
     * Set the value of NROPATR
     *
     * @return  self
     */ 
    public function setNROPATR($NROPATR)
    {
        $this->NROPATR = $NROPATR;

        return $this;
    }
}
?>
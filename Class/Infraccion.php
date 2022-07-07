<?php
class Infraccion{
    private $INFCOD, $INFDES, $INFIMP;
    function __construct($INFCOD, $INFDES, $INFIMP){
        $this->INFCOD = $INFCOD;
        $this->INFDES = $INFDES;
        $this->INFIMP = $INFIMP;
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
     * Get the value of INFDESC
     */ 
    public function getINFDES()
    {
        return $this->INFDES;
    }
    
    /**
     * Set the value of INFDESC
     *
     * @return  self
     */ 
    public function setINFDESC($INFDES)
    {
        $this->INFDES = $INFDES;
        
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
}
?>
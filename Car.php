<?php

  // Voiture.php

class Car
  {
  	
  	 /**
    * @var integer
    */
    private $nbWheels = 4;

    /**
    * @var integer
    */
    private $currentSpeed = 0;
   
  	/**
    * @var string
    */
    private $color;

    /**
    * @var integer
    */
    private $nbSeats;

    /** 
    * @var string
    */
    private $energy;

    /** 
    * @var integer
    */
    private $energyLevel = 100;


    // Démarrer, avancer, freiner

    public function start()
	{
	        $this->currentSpeed = 0;
	        return "Ignition !";
	}

    public function forward()
	{
	        $this->currentSpeed = 150;
	        return "Go !";
	}

	public function brake(): string
	{
	   $sentence = "";
	   while ($this->currentSpeed > 0) {
	       $this->currentSpeed--;
	       $sentence .= "Brake !!!";
	   }
	   $sentence .= "I'm stopped !";
	   return $sentence;
	}

    public function dump()
    {
        var_dump($this);

    }


// Getters & Setters

	// nbWheels

	/**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels) : void
    {
        $this->nbWheels = $nbWheels;
    }

	// currentSpeed

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

	/**
     * @param int $currentSpeed
     * @return void
     */
    
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }

    }

   // Color

   	/**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param int $NbWheels
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }


   // nbSeats

   	/**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @param int $NbWheels
     */
    public function setNbSeats(int $nbSeats) : void
    {
        $this->nbSeats = $nbSeats;
    }


   // energy

   /**
     * @return int
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param int $energy
     */
    public function setEnergy(string $energy) : void
    {
        $this->energy = $energy;
    }


   // energyLevel

      /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

	/**
     * @param int $energy
     * @return void
     */
    
    public function setEnergyLevel(int $energyLevel): void
    {
        if($energyLevel >= 0){
            $this->energyLevel = $energyLevel;
        }

    }

// constructeur

    public function __construct(string $color, int $nbSeats, string $energy)
	{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;

	}
}

	    






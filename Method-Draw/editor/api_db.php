<?php

//Diunuge Buddhika
//Colombo city Envirenmental Monitoring System
//CSE10

/**
 * A class file to connect to database
 */
class API_DB {

	/**
     * @var Singleton The reference to *Singleton* instance of this class
     */
    private static $instance;
	private $svg;
    
    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return Singleton The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }
	
	public function setSVG($svg){
		$this->svg = $svg;
	}
	
	public function getSVG(){
		return $this->svg;
	}

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    }

}

?>
  
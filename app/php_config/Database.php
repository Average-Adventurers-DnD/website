<?php
class Database{
	private $DBServer;
	private $DBUser;
	private $DBPassword;
	private $DBName;
	protected $DBConnection;
	
	function __construct(){
        
        $this->DBServer = "localhost";
        $this->DBUser = "root";
        $this->DBPassword = "";
        $this->DBName = "avgadv_web";
        
		try{
			@$this->DBConnection = 
			new PDO("mysql:host=$this->DBServer;dbname=$this->DBName",
									$this->DBUser,
									$this->DBPassword,
									 array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}
		catch (PDOException $e){
			$ErrorMessage = $e->getMessage();        
        }
	}
    
    function GetConnection(){
        return $this->DBConnection;
    }
}   
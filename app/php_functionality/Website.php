<?php
class Website extends Database
{
    private $WebsiteDetails;

    function __construct()
    {
        parent::__construct();
        $GetWebsiteDetailsQuery = $this->DBConnection->prepare(
            "SELECT  * FROM `settings`"
        );

        $GetWebsiteDetailsQuery->execute();
        $this->WebsiteDetails = $GetWebsiteDetailsQuery->fetchAll(PDO::FETCH_ASSOC);
    }

    function TestConnection(){
        return $this->WebsiteDetails;
    }
}
?>
<?php

/**
 * Basic database connection class
 *
 * @author Matteo Santarcangelo
 */
class dbconnection
{
    public $dsn = "mysql:host=localhost;dbname=test_junior";
    public $user = "alla";
    public $pass = "12345";
    /** @var PDO */
    public $conn;

    public function __construct()
    {
        // implementa la connessione al db tramite PDO
        try{
          $this->conn =new PDO($this->dsn, $this->user, $this->pass);
                  }
        catch(PDOException $ex)
        {
          die(json_encode(array(
              'outcome' => false,
              'message' => 'Unable to connect'
          )));
      }
}

}

?>
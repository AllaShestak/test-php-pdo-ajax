<?php

/**
 * Basic controller class
 *
 * @author Matteo Santarcangelo
 */
class controller
{
    /** @var dbconnection */
    protected $db;

    public function __construct()
    {
        $this->db = new dbconnection();
    }
}

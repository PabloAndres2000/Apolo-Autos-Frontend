<?php
class Config
{
    private $DB_HOST = "localhost";
    private $DB_USER = "root";
    private $DB_PASS = "";
    private $DB_NAME = "ventadeautos";
    public $Con = null;
    public function __construct()
    {
        $this->Con = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);
        if ($this->Con->connect_errno) {
            exit();
        } else {
            return $this->Con;
        }
    }
}

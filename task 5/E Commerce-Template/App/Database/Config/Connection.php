<?php
namespace App\Database\config;

use mysqli;
class connection 
{   protected $hostname='localhost';
    protected $username='root';
    protected $password='';
    protected $database='ecommerce';
    public  mysqli $connect;
    public function __construct() 
    {
        $this->connect = new mysqli($this->hostname,$this->username,$this->password,$this->database); 
        // if($this->connect->connect_error)
        // {
        //     die("connection failed: ". $this->connect->connect_error);
        // }
        // echo ("success"); 
    }
   
}

new connection;
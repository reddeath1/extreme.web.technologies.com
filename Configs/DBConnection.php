<?php
/**
 * Created by PhpStorm.
 * User: reddeath
 * Date: 4/14/2018
 * Time: 2:17 PM
 */

include_once './smarty/libs/Smarty.class.php';
#namespace Connection;


class DBConnection extends Smarty
{
    public $conn;
    public $connected = true;
    protected $DB_USER = 'root';
    protected $DB_PASSOWRD = 'hiddenroute';
    protected $DB_HOST = 'localhost';
    protected $DB_NAME = 'extreem_db';

    public function __construct()
    {
        parent::__construct();
        $this->create_db();
        $this->connection();
    }

    private function connection(){
        try{
            mysqli_report(MYSQLI_REPORT_STRICT);
            $this->conn = new mysqli($this->DB_HOST,$this->DB_USER,$this->DB_PASSOWRD,$this->DB_NAME);
            $this->connected = true;
        }catch (mysqli_sql_exception $e){
            echo 'ERROR::'.$e->getMessage();
            $this->connected = false;
        }

        $this->conn->close();
    }

    public function create_db(){
        try{
            mysqli_report(MYSQLI_REPORT_STRICT);
            $this->conn = new mysqli($this->DB_HOST,$this->DB_USER,$this->DB_PASSOWRD);
            try{
                $this->conn->query("CREATE DATABASE IF NOT EXISTS $this->DB_NAME");
            }catch (mysqli_sql_exception $e){
                die ('Could not create a database:::'.$e->getMessage());
            }
        }catch (mysqli_sql_exception $e){
            die ('Connection failed:::'.$e->getMessage());
        }
    }
}
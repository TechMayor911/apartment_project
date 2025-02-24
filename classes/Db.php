<?php
    require_once "config.php";
    class Db{

        private $dbname = DBNAME;
        private $dbuser = DBUSER;
        private $dbpass = DBPASS;
        private $dbhost = DBHOST;

       // protected $dbconn;

        protected function connect(){

            $dsn ="mysql:host=$this->dbhost;dbname=$this->dbname;";

            $option = [

                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
            ];

            try{
                //$this->dbconn = new PDO($dsn, 'username')
               $conn =  new PDO($dsn, $this->dbuser, $this->dbpass, $option);
                return $conn;

            }catch(PDOException $se){
                 echo $se->getMessage();
                    return false;

            }


        }


    }




?>
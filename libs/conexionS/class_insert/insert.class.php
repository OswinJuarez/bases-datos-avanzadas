<?php
 
require_once 'conexion/conexion.class.php';

class Insert
{
 
    private static $instancia;
    private $dbh;
 
    private function __construct()
    {
 
        $this->dbh = Conexion::singleton_conexion();
 
    }
 
    public static function singleton_insert()
    {
 
        if (!isset(self::$instancia)) {
 
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
 
        }
 
        return self::$instancia;
 
    }
	

	public function insert_users($nick,$password){


		try {

			$sql = 'INSERT INTO users  (nombre, password) VALUES (?,?);';
			$query = $this->dbh->prepare($sql);
            $query->bindParam(1,$nick);
            $query->bindParam(2,$password);
			$query->execute();
			$this->dbh = null;

		} catch (PDOException $e) {
			print "Error!: ".$e->getMessage();
		}
	}


    public function delete_users($column,$value){

        try {

            $sql = 'DELETE FROM users WHERE ? = ?';
            $query = $this->dbh->prepare($sql);
            $query->bindParam(1,$column);
            $query->bindParam(2,$value);
            $query->execute();
            $this->dbh = null;

        } catch (PDOException $e) {
            print "Error!: ".$e->getMessage();
        }
    }

    public function update_users(){
        try {

            $sql = 'UPDATE ? SET WHERE ? = ? ';
            $query = $this->dbh->prepare($sql);
            $query->bindParam(1,$column);
            $query->bindParam(2,$value);
            $query->execute();
            $this->dbh = null;

        } catch (PDOException $e) {
            print "Error!: ".$e->getMessage();
        }
    }

    public function select(){
        try {

            $sql = 'UPDATE ? SET WHERE ? = ? ';
            $query = $this->dbh->prepare($sql);
            $query->bindParam(1,$column);
            $query->bindParam(2,$value);
            $query->execute();
            $this->dbh = null;

        } catch (PDOException $e) {
            print "Error!: ".$e->getMessage();
        }
    }



    
 
     // Evita que el objeto se pueda clonar
    public function __clone()
    {
 
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
 
    }
 
}
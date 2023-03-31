<?php IDEA:

class Person{

    private $name;
    private $nationalID;
    
    public function __construct( $personName, $ID ) {
    
    $this->name = strtolower($personName);
    $this->nationalID = $ID;
       
    }
    public function GetName(){
           return $this->name; 
    } 
    public function SetName($newName){
        $this ->name = strtolower($newName);
    }
    public function GetNationalID(){
        return $this->nationalID;
    }
}



?>
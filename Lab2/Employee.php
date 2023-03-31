<?php IDEA:
require_once("Person.php");

class Employee extends Person{
    private $employeeID;
    private $department;
    public function __construct($employeeName, $nationalID,$dept){
        parent::__construct($employeeName,$nationalID);
        $this-> department =$dept;
        $this-> employeeID = $this->GenerateEmployeeID();

    }
    public function GetEmployeeID(){
        return $this->employeeID;
    }
    public function GetDepartment(){
        return $this->department;
    }
    public function SetDepartment($dept){
        $this -> department = $dept;
    }
    final function GenerateEmployeeID(){
        static $IDGen=1;
        return $IDGen++;
    }


}


?>
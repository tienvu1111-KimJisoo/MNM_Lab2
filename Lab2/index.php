<! DOCTYPE html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta charset="utf-8">
<meta name="author" content="nguyendinhanh" />
<link href="/Lab2/site.css" rel="stylesheet"/>
<title>OOP PHP </title>
</head>
<body>
<div id="wrapper">
<?php // IDEA:
    require_once("User.php");

    $nguyenanh = new User('nguyen anh','dinhanhvnn@gmail.com');
    echo "<h2>---User info--</h2>";
    echo "UserID: ".$nguyenanh->GetUserID()." <br/>";
    echo "UserName: ".$nguyenanh->GetUserName()."<br/>";

    $nguyenanhmore = new User("Nguyen Van A", "youremail@gmail.com");
    echo "<h2>--More user--</h2>";
    echo "UserID: ".$nguyenanhmore->GetUserID()."<br/>";
    echo "UserName: ".$nguyenanhmore->GetUserName()." <br/>";

    //more OOP
    include("Employee.php");
    $person_a = new Person("Nguyen Van B", 1234);
    echo "<h2>--More OOP PHP--</h2>";
    echo "Person Name: ". $person_a->GetName()."</br>";
    echo "Person ID: ". $person_a->GetNationalID()."</br>";

    echo "<h2>--Employee--</h2>";
    $employee_a = new Employee("Nguyen Van C", 5678, "Security");
    echo "Employee ID: ". $employee_a->GetEmployeeID()."</br>";
    echo "Employee Name: ". $employee_a->GetName()."</br>";
    echo "Employee Department: ". $employee_a->GetDepartment()."</br>";
    
    echo "<h2>--More Employee--</h2>";
    $employee_b = new Employee("Nguyen Van D", 1615651, "Security");
    echo "Employee ID: ". $employee_b->GetEmployeeID()."</br>";
    echo "Employee Name: ". $employee_b->GetName()."</br>";
    echo "Employee Department: ". $employee_b->GetDepartment()."</br>";


?>
</div>
<footer>

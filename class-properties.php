<?php


//create class and properties

class Employee {
	var $emp_id;
	var $first_name;
	var $is_active = false;

}

//create instance

$emploiyee_1 = new Employee;
$emploiyee_2 = new Employee;
  
  // setting value
$emploiyee_1->emp_id = 100;
$emploiyee_1->first_name = 'michel';
$emploiyee_1->last_name = "anjala";

$emploiyee_2->emp_id = 200;
$emploiyee_2->first_name = 'devin';
$emploiyee_2->last_name = 'desilva';

// read value

echo 'details of employee 1 :<br>';
echo '<br>';
echo 'Employee ID: ' . $emploiyee_1->emp_id;
echo '<br>';
echo 'Full Name:' . $emploiyee_1->first_name .' ' .$emploiyee_1->last_name;
echo '<br>';
echo '<br>';

echo 'details of employee 2 :<br>';
echo '<br>';
echo 'Employee ID: ' . $emploiyee_2->emp_id;
echo '<br>';
echo 'Full Name:' . $emploiyee_2->first_name .' ' .$emploiyee_2->last_name;
echo '<br>';
echo '<br>';


// varible get to arrays of the class Employee
$class_vars = get_class_vars('Employee');

echo 'Class Variables <br>';
echo '<pre>';
print_r($class_vars);
echo '</pre>';

// object of the class

$object_vars = get_object_vars($emploiyee_1);

echo 'Class Variables of the object: emploiyee_1 <br>';
echo '<pre>';
print_r($object_vars);
echo '</ pre>';

// checking properti in class Employee

if (property_exists('Employee', 'first_name')) {

	echo 'properti first_name found in Employee class';
}else {
	echo 'property first_name Not found in Employee class';
}

?>
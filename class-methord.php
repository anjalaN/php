<?php
// calling le methord in the classs

//create class Employee

class Employee {

//create function greet

	function greet() {
		return 'Ayubovan!';
	}

	function get_basic_salary() {

	}

}

// create instance 
$emploiyee_1 = new Employee;

echo $emploiyee_1->greet();

$class_methods = get_class_methods('Employee');

echo '<pre>';
print_r($class_methods);
echo '</pre>';

//methord _exists function

if (method_exists('Employee', 'greet')) {

	echo 'Method greet exists.';

} else {

	echo 'Method greet dosen ot exists.';
}


?>
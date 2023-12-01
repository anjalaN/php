<?php

// refer to properties/methods from inside the class
//thow to use this-keyword

//create class

class Employee {


//create properties 

	var $first_name;
	var $last_name;

// create methord in to the class

function full_name() {
	
	return $this->first_name . ' ' . $this->last_name;
	}
}
//create instance

$employee = new Employee;

$employee->first_name = 'anjala';
$employee->last_name = 'niroshani';

$employee->full_name();

?>
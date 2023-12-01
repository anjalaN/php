<?php

//create class

class Employee {

}

class Customer {

}

// create instance

$mike = new Employee;
$anjala = new Employee;
$devin = new Customer;

echo get_class($mike);
echo '<br>';
echo get_class($anjala);
echo '<br>';

if (is_a($mike, 'Employee') ) {
	echo 'mike belong to the class: Employee';
}else {
	echo 'mike dose not belong to the class: Employee';
}

?>
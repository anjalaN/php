<?php

// inheritance
//define sub class 

// create class
class Product {
	var $product_name;
	var $cost_price;
	var $sales_price;

	function calculate_sales_price() {
		$this->sales_price = round($this->cost_price * 1.2, 2);
	}
}

//create sub class and inherit  parent class also

class Computer extends Product {
	var $processor;
	var $hard_disk;
	var $ram;

}

class Garment extends Product {

}

$my_product = new Computer;
$my_product->product_name = 'Apple macbook air 2023';
$my_product->cost_price = 19000;
$my_product->calculate_sales_price();

$my_garment = new Garment;

$my_array = get_object_vars($my_product);

echo 'object variables for my-product';
echo '<pre>';
print_r($my_array);
echo '</pre>';

//get parent class funtion

echo 'get parent class of Garement: <br>';
echo get_parent_class($my_garment);
echo '<br>';
echo '<br>';

echo 'cheking if computer is a subclass of product<br>';

if (is_subclass_of('Computer', 'Product')) {
	echo 'computer is a subclass of product';
}else {
	echo 'computer is NOT a subclass of product';
}

?>
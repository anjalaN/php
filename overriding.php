<?php

// inheritance
//define sub class 

// create class
class Product {

	var $product_name;
	var $cost_price;
	var $sales_price;

	function display() {

		echo '<b>Product Info<b>';
		echo  '</br>';
		echo 'product name:' . $this->product_name .' ' . '<b></br>';
		echo 'sales price:' . $this->sales_price .' ' . '<b></br>';
		
	}
}

//create sub class in class of product
	class Computer extends Product {
		var $processor;
		var $hard_disk;
		var $ram;

	function display() {

		echo '<b>Product Info<b>';
		echo  '</br>';
		echo 'product name:' . $this->product_name .' ' . '<b></br>';
		echo 'sales price:' . $this->sales_price .' ' . '<b></br>';
		echo 'processor:' . $this->processor .' ' . '<b></br>';
		echo 'hard_disk:' . $this->hard_disk .' ' . '<b></br>';
		echo 'ram:' . $this->ram .' ' . '<b></br>';
		
		}

	}

$general_product = new Product;

$general_product->product_name = 'Table fan';
$general_product->cost_price = 5000;
$general_product->sales_price = 8000;

$general_product->display();


$computer = new Computer;

$computer->product_name = 'macbook';
$computer->cost_price = 120000;
$computer->sales_price = 3000;
$computer->processor = 'intel core';
$computer->hard_disk = '234GB';
$computer->ram = '32ram';Ò

$computer->display();



?>
<!-- Author: Carlo Castro Galindo  -->
<?php

$dishes1 = [["Salad","Tomato","Cucumber","Salad","Sauce"],
 			["Pizza","Tomato","Sausage","Sauce","Dough"],
 			["Quesadilla","Chicken","Cheese","Sauce"],
 			["Sandwich","Salad","Bread","Tomato","Cheese"]];

$dishes2 = [["Pasta","Tomato Sauce","Onions","Garlic"],
 			["Chicken Curry","Chicken","Curry Sauce"],
 			["Fried Rice","Rice","Onions","Nuts"],
 			["Salad","Spinach","Nuts"],
 			["Sandwich","Cheese","Bread"],
 			["Quesadilla","Chicken","Cheese"]];

function groupingDishes($dishes) {
    $group = [];
    foreach($dishes as $dish){
        for($i=1; $i<count($dish); $i++){
            $group[$dish[$i]][] = $dish[0]; // find all the dishes that contain this ingredient 
        }
    }
    $group = array_filter($group, function($group){ 
    	return count($group)>1; // at least 2 dishes
    });
    ksort($group); // sort ingredients alphabetically
    foreach($group as $key=>$value){
        sort($group[$key]); // sort dishes alphabetically
        array_unshift($group[$key], $key); // insert ingredient in the beginning of the array
    }
    return array_values($group); // output
}

function showDishes($output) { // function that print input & output
	foreach ($output as $value) {
		for ($i=0; $i < count($value); $i++) { 
			echo "'".$value[$i]."' ";
		}
		echo "<br>";
	}
}

echo "Input:<br>";
showDishes($dishes1);
echo "<br>Output:<br>";
showDishes(groupingDishes($dishes1));
echo "<br>Input:<br>";
showDishes($dishes2);
echo "<br>Output:<br>";
showDishes(groupingDishes($dishes2));

?>
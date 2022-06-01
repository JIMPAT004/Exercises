<?php
/* Task 2 */

function calculation ($a, $b , ...$c) {
	$sum = 0;
	$sum = $a*$b;
	
	foreach($c as $n){
		$sum+=$n;
	}
	
	return $sum;
}

$ans = calculation(3,4,5);

	echo "<p>$ans</p>";
echo "<p>-------------------------------------------------------------------------------------------------------------------------------</p>";
	
	
/* Task 3 */
	
$word = array("This", "is", "PHP", "course", "Task");

$lower = array_map(function($a) {
	return strtolower($a);
}, $word);
	
foreach($lower as $a){
	echo "<p>$a</p>";
}

echo "<p>-------------------------------------------------------------------------------------------------------------------------------</p>";



/* Task 4 */

usort($word, function($a, $b) {
	
	return strlen($a) <=> strlen($b);
});	

foreach($word as $a) 
{
	echo "<p>$a</p>";
}

?>
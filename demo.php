<?php

	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "test";
	$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	
	require 'simple_html_dom.php';
	$html = file_get_html('http://turbo.az/autos/2574571-jeep-wrangler');
	//echo $html->find('.label[for=ad_model]',0)->nextsibling()->firstChild()->innertext;
	$html = file_get_html('http://turbo.az/autos/');
	for ($i=1; $i <= 5; $i++) {
		$page_href = $html->find('.span[class=page current]',0)->nextsibling()->firstChild()->href;	
		$html = file_get_html('http://turbo.az'.$page_href);
		$text = $html->find('.products-bottom');
		echo '<br>'.'this is page:'.$i.'<br>';
		foreach ($text as $date) {
			if (strpos($date->innertext,'bugün') !== false) {
				echo '<br>';
	      		$href = $date->parentNode()->parentNode()->firstChild()->href;
	      		$html_child =  file_get_html('http://turbo.az'.$href);
	      		$class = $date->parentNode()->parentNode()->class;
	       	  
	       	    if (strpos($class, 'salon') == false ) {
	     			$name = $html_child->find('.seller-name',0);
	     			//echo '<br>';
	     			$model = $html_child->find('.label[for=ad_model]',0)->nextsibling()->firstChild()->innertext;
	     			$marka = $html_child->find('.label[for=ad_make_id]',0)->nextsibling()->firstChild()->innertext;
	     			$year = $html_child->find('.label[for=ad_reg_year]',0)->nextsibling()->firstChild()->innertext;
	     			echo '<a href="'.'http://turbo.az'.$href.'"a>'.'Go to car'.'</a>'.' Phone number of person is: '.$html_child->find('.phone', 0)->href.' Model of the car is: '.$marka.' '.$model.' Year of production: '.$year.' Name of the seller is: '.$name->firstChild()->innertext;
	     			}
	     }		
		}
}
 ?>


 const ARRAY_LENGTH = 9999; // Length of our test array
const ITERATIONS = 9999; // Number of searches we will do
$array = array();
for ($i = 0; $i < ARRAY_LENGTH; $i++)
{
	$array[] = isset($array[ $i - 1 ]) ? $array[ $i - 1 ] + rand(1, 25) : rand(1, 25);
}
$needles = array();
for ($i = 0; $i < ITERATIONS; $i++) {
	$needles[] = $array[ rand(0, count($array) - 1 ) ];
}
/**
 * Binary search
 *
 * @param type $needle
 * @param array $haystack Sorted array
 * @param Closure $cmp_function Either a closure or a function name
 * @param type $first
 * @param type $last
 * @return boolean|int
 * @throws BadFunctionCallException
 */
function array_bsearch($needle, array $haystack, $cmp_function = null, $first = null, $last = null) {
	$low = isset($first) ? $first : 0;
	$high = isset($last) ? ( $last - 1 ) : ( count($haystack) - 1 );
	while ($low <= $high)
	{
		$middle = (int) ( ($high - $low) / 2 ) + $low;
		// Closure
		if ($cmp_function instanceof Closure)
		{
			$compare = $cmp_function($haystack[$middle], $needle);
		}
		// Function name as string
		elseif ( is_string($cmp_function) )
		{
			if ( is_callable($cmp_function) )
			{
				call_user_func($cmp_function, $haystack[$middle], $needle);
			}
			else
			{
				throw new BadFunctionCallException("Function '$cmp_function' is undefined");
			}
		}
		// Default
		else
		{
			$compare = ($haystack[$middle] < $needle) ? -1 : ( ($haystack[$middle] > $needle) ? 1 : 0 );
		}
		// If needle is greater
		if ($compare < 0)
		{
			$low = $middle + 1;
		}
		// Else, if needle is less than
		elseif ($compare > 0)
		{
			$high = $middle - 1;
		}
		// Else, we found it!
		else
		{
			return $middle;
		}
	}
	// Return
	return FALSE;
}
$start_binary = microtime(true);
for ($i = 0; $i < ITERATIONS; $i++)
{
	array_bsearch($needles[$i], $array, function($a, $needle) {
		return ($a < $needle) ? -1 : (($a > $needle) ? 1 : 0);
	});
}
$end_binary = microtime(true);
$time_binary = round($end_binary - $start_binary, 4);
$start_linear = microtime(true);
for ($i = 0; $i < ITERATIONS; $i++)
{
	array_search($needles[$i], $array);
}
$end_linear = microtime(true);
$time_linear = round($end_linear - $start_linear, 4);
echo "Binary search took $time_binary seconds wheras linear search took $time_linear seconds. Binary search was " . ( round( abs( ($time_linear / $time_binary) - 1 ), 2 ) * 100 ) . "% " . ($time_binary > $time_linear ? 'slower' : 'faster')  . '.';
?>
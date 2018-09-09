<?php

	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "test";
	$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	//$sql = "Insert into cars(model,marka,pro_year,seller_info) Values('$dbUsername','$dbServername','$dbName','$dbName');";
	

	require 'simple_html_dom.php';
	$html = file_get_html('http://turbo.az/autos/');
	$info = array();
	for ($i=1; $i <= 5; $i++) {
		$page_href = $html->find('.span[class=page current]',0)->nextsibling()->firstChild()->href;	
		$html = file_get_html('http://turbo.az'.$page_href);
		$text = $html->find('.products-bottom');
		echo '<br>'.'this is page:'.$i.'<br>';
		foreach ($text as $date) {
			if (strpos($date->innertext,'bugün') !== false) {
				//echo '<br>';
	      		$href = $date->parentNode()->parentNode()->firstChild()->href;
	      		$html_child =  file_get_html('http://turbo.az'.$href);
	      		$class = $date->parentNode()->parentNode()->class;
	       	  
	       	    if (strpos($class, 'salon') == false ) {
	     			$name/* = $info['name']*/ = $html_child->find('.seller-name',0)->firstChild()->innertext;
	     			$model/* = $info['model']*/ = $html_child->find('.label[for=ad_model]',0)->nextsibling()->firstChild()->innertext;
	     			$marka/* = $info['marka']*/ = $html_child->find('.label[for=ad_make_id]',0)->nextsibling()->firstChild()->innertext;
	     			$year/* = $info['year']*/ = $html_child->find('.label[for=ad_reg_year]',0)->nextsibling()->firstChild()->innertext;
					$sql = "Insert into cars(model,marka,pro_year,seller_info) Values('$model','$marka','$year','$name');";
	     		 	mysqli_query($conn,$sql);
	     			}
	     }		
		}
}

//var_dump($info_general);

 ?>
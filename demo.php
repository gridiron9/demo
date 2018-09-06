<?php

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
	       	  
	       	    if (strpos($class, 'salon') !== false ) {

	     			foreach ($html_child->find('.shop-contact--phones-number') as $key_child) {
	     				$name = $html_child->find('.shop-contact--shop-name',0);
	     				echo '<br>';
	     				$model = $html_child->find('.label[for=ad_model]',0)->nextsibling()->firstChild()->innertext;
	     				$marka = $html_child->find('.label[for=ad_make_id]',0)->nextsibling()->firstChild()->innertext;
	     				$year = $html_child->find('.label[for=ad_reg_year]',0)->nextsibling()->firstChild()->innertext;
	     				echo '<a href = "'.'http://turbo.az'.$href.'">'.'Go to Car'.'</a>'.' This is the phone number of salon: '.$key_child->href.' Model of the car is: '.$marka.' '.$model.' Year of production: '.$year.' Name of the seller is: '.$name->innertext;
	     			}
	     		}
	     		else{
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
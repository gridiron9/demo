<?php
// initializing text and lowering all character
		$fin = 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.';

		$fin = strtolower($fin);
		 $arr1 = array("aboard", "about", "above", "across", "after", "against" ,"ahead", "along","among", "as", "at", "athwart", 
		"atop","barring", "before", "behind", "below", "beneath", "beside", "besides", "between", "beyond", "but", "by", "circa", 
		"concerning", "despite", "down", "during", "except", "excluding", "following","for", "from","in", "with", "front", "lieu", 
		"place", "spite", "including", "inside", "into","like","minus", "near", "next", "notwithstanding","of", "off", "on","onto", 
		"opposite", "out", "outside", "over", "past", "plus","regarding","save","since", "than", "through", "till", "to", "toward", 
		"towards", "under", "underneath", "unlike", "until", "up", "upon","versus","via","with","without","within","after",
		 "although", "as","because", "before","even", "though","if","lest","once","than", "that", "though", "till","unless", "until","when","whenever", "where", "wherever", "while","the","there","a","are","or","be","which","you","it","this","is","have","and","has","also","was","were","am","been","she","he","they","bc","their","here","not","will","all","an","etc","more");
		 sort($arr1);
	 // removing all iwares
	 $count = sizeof($arr1);
	$test = explode(' ',$fin);
	$words = array();
	foreach ($test as $key) {
		if (ord($key[0])<65 && ord($key[1])<65 && ord($key[2])<65) {
			continue;
		}
		while(ord($key[-1])<97 || ord($key[-1])>122) {
			$key = str_replace($key[-1],'',$key);
			}
		while(ord($key[0])<97 || ord($key[0])>122) {
			$key = str_replace($key[0],'',$key);
			}
		if (binarySearch($arr1,0,$count-1,$key)==-1) {
			if(array_key_exists($key, $words)){
				$words[$key]+= 1;
			}
			else{
				$words[$key] = 1;
			}
		}
	}

	arsort($words);
	foreach ($words as $key => $value) {
		$i = 0;
		echo $key.' value is: '.$value.'<br>';
	}

	function binarySearch($arr,$l,$r,$x){
	 	if($r>=$l){
	 		if (($r-$l)%2==0) {
	 			$mid = $l+($r-$l)/2;
	 		}
	 		else{
	 			$mid = $l+($r-$l+1)/2;
	 		}
		if($arr[$mid] ==$x ){
			return $mid;
			}
		if($arr[$mid]>$x){
		return binarySearch($arr,$l,$mid-1,$x);
		}
		else{
			return binarySearch($arr,$mid+1,$r,$x);
		}
	}
	return -1;
}
	
/*	$key = '"nicat,';
	if (ord($key[-1])<97 || ord($key[-1])>122) {
			$key = str_replace($key[-1],' ',$key);
			echo $key.'<br>';}
	if (ord($key[0])<97 || ord($key[0])>122) {
			$key = str_replace($key[0],' ',$key);
			echo $key.'<br>';}	

	//for ($i=0; $i <strlen($fin) ; $i++) { 
		
	
	$test = explode(' ',$fin);
	//echo ord('a');

	foreach ($test as $key) {
		if (ord($key[-1])<97 || ord($key[-1])>122) {
			$key = str_replace($key[-1],' ',$key);
			//echo $key.'<br>';
			if (count($words>0)) {
				if(array_key_exists($key, $words)
				{
					$words[$key] += 1;
				}
				else{
					$words[$key] = 1;
				}
			/*	foreach ($words as $word ) {
					if ($key == $word) {
						
					}
				}
			}
		
		else{
			if (count($words>0)) {
				if(array_key_exists($key, $words)
				{
					$words[$key] += 1;
				}
				else{
					$words[$key] = 1;
				}
		}

		//echo ord($key[-1]).'<br>';
	}
	
	
	//echo $key1;
	/*if (if((ord($key[-1])<65 && ord($key[-1])>90)) || if((ord($key[-1])<97 && ord($key[-1])<122)) {
		$key1 = str_replace($key[-1],' ',$key);
		echo $key1;
	}
		
	if (65>=(ord($key[-1])<=90 || 65>=(ord($key[-1])<=90) {
		# code...
	}
	/*foreach ($test as $key) {
		echo 'first '.$key[-1].' last '.$key[1].'<br>';

	}
	/*foreach ($test as $key) {
		if(ord($key[-1])<65 and ord($key[-1])>90 and ord($key[-1])<97 and ord($key[-1])<122){
			//str_replace($key[-1],null,$key);
			chop($key,$key[-1]);
				echo $key;
		}
		if(ord($key[1])<65 and ord($key[1])>90 and ord($key[1])<97 and ord($key[1])<122){
			chop($key,$key[-1]);
				echo $key;
		}
	}
	//$test = explode(' ',$fin);
	/*for ($i=0; $i < strlen($fin); $i++) { 
		if (ord($fin[$i])<97 && ord($fin[$i])>122 && ord($fin[$i])<65 && ord($fin[$i])>90) {
			$fin[$i] = ' ';
		}
	}

	foreach ($test as $key) {
		echo $key.'<br>';
		}

/*
    $myvalue = 'Test me, more';
    $arr = explode(' ',trim($myvalue));
    echo $arr[0]; // will print Test

?>
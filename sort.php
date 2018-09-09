<?php
$fin = 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.';


	//echo $fin = chop($fin,"Lorem");

	if (empty(1)) {
		echo 'yeas';
	}
	else{
		echo 'no';
	}
	die();



/*




$arr1 = array("aboard", "about", "above", "across", "after", "against" ,"ahead", "along","among", "at", "athwart", 
		"atop","barring", "behind", "below", "beneath", "beside", "besides", "between", "beyond", "but", "by", "circa", 
		"concerning", "despite", "down", "during", "except", "excluding", "following","for", "from","in", "front", "lieu", 
		"place", "spite", "including", "inside", "into","like","minus", "near", "next", "notwithstanding","of", "off", "on","onto", 
		"opposite", "out", "outside", "over", "past", "plus","regarding","save","since", "to", "toward", 
		"towards", "under", "underneath", "unlike", "up", "upon","versus","via","with","without","within",
		 "although", "as","because", "before","even", "if","lest","once","than", "that", "though", "till","unless", "until","when","whenever", "where", "wherever", "while");
	

	$words = array();

	$words("nicat") = 1;

	print_r($words);
	die();

	sort($arr1);
	$count = sizeof($arr1);

	$result = binarySearch($arr1,0,$count-1,'without');
	
	if($result==-1){
		echo"number is not found";  
	}
	else{
		echo"index is:".($result+1);
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
			
	return -1;
	}
}
?>
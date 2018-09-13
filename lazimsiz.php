<?php

		$time_start = microtime(true);
		$fin = file_get_contents('./metn.txt',FILE_USE_INCLUDE_PATH);
	    $fin = strtolower($fin);
		$keywords = preg_split("/\W+/", $fin);
		$stopwordsstring = file_get_contents('./stopwords.txt',FILE_USE_INCLUDE_PATH);
		$stopwords = explode(" ", $stopwordsstring);
		
		$words = array();
		array_unique($keywords);
		$index = array("ai"=>2,"af"=>50,"bi"=>51,"bf"=>91,"ci"=>92,"cf"=>122,"di"=>123,"df"=>139,"ei"=>140,"ef"=>166,"fi"=>167,"ff"=>188,
		"gi"=>189,"gf"=>212,"hi"=>213,"hf"=>252,"ii"=>253,"if"=>282,"ji"=>283,"jf"=>288,"ki"=>289,"kf"=>300,"li"=>301,"lf"=>324,"mi"=>325,"mf"=>368,"ni"=>369,"nf"=>400,"oi"=>401,"of"=>424,"pi"=>425,"pf"=>441,"ri"=>444,"rf"=>453,"si"=>454,"sf"=>503,"ti"=>504,"tf"=>564,"ui"=>566,"uf"=>583,"vi"=>584,"vf"=>593,"wi"=>594,"wf"=>651,"xi"=>652,"xf"=>652,"yi"=>653,"yf"=>667,"zi"=>668,"zf"=>672,"qi"=>442,"qf"=>443);

		foreach ($keywords as $key) {
			if (!empty($key)) {
				if (binarySearch($stopwords,$index[$key[0].'i'],$index[$key[0].'f'],$key)==-1){
					if(!array_key_exists($key, $words)){
					$words[$key] = substr_count($fin, $key);				}
					}
				}
		}
		arsort($words);
		$i = 0;
		foreach ($words as $key => $value) {
			echo $key.' value is: '.$value.'<br>';
			$i++;
			if($i==3){
				break;
			}
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

		$time_end = microtime(true);
		$execution_time = ($time_end - $time_start);
		echo '<b>Total Execution Time:</b> '.$execution_time.' seconds.';
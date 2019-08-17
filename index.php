<?php

$textInput = "sd[c}{x{}cxv]gfdg[]f[]dg";
echo " Text Input : ".$textInput . "<br><br>";

$validbalance = checkChar($textInput);
echo $validbalance;

function parenthesis1($text) {
	$totalstr1 = 0;
	$totalstr2 = 0;

	if(strpos($text, '[') !== false) {
		$totalstr1 = substr_count($text, '[');
	}
	
	if(strpos($text, ']') !== false) {
		$totalstr2 = substr_count($text, ']');
	}

	if($totalstr1 !== $totalstr2) {
		$parenthesis = false;
	} else {
		$parenthesis = true;
	}		

	return 	$parenthesis;
}

function parenthesis2($text) {
	$totalstr1 = 0;
	$totalstr2 = 0;

	if(strpos($text, '{') != false) {
		$totalstr1 = substr_count($text, '{');
	}
	
	if(strpos($text, '}') != false) {
		$totalstr2 = substr_count($text, '}');
	}

	if($totalstr1 !== $totalstr2) {
		$parenthesis = false;
	} else {
		$parenthesis = true;
	}	

	return 	$parenthesis;
}

function parenthesis3($text) {
	$totalstr1 = 0;
	$totalstr2 = 0;

	if(strpos($text, '(') != false) {
		$totalstr1 = substr_count($text, '(');
	}
	
	if(strpos($text, ')') != false) {
		$totalstr2 = substr_count($text, ')');
	}

	if($totalstr1 !== $totalstr2) {
		$parenthesis = false;
	} else {
		$parenthesis = true;
	}	

	return 	$parenthesis;
}


function checkChar($text) {
	$parenthesis1 = parenthesis1($text);
	$parenthesis2 = parenthesis2($text);
	$parenthesis3 = parenthesis3($text);

	echo "[] = " . $parenthesis1 . "<br>";
	echo "{} = " . $parenthesis2 . "<br>";
	echo "() = " . $parenthesis3 . "<br>";
	echo "<br><br>";

	if($parenthesis1 == true && $parenthesis2 == true && $parenthesis3 ==true ) {
		
		for($i=0; $i < strlen($text); $i++) {
			$string = $text[$i];
			$ch = $string;

			$stringBalance1 = true;
			$stringBalance2 = true;
			$stringBalance3 = true;

			if($string == "[" || $string == "{" || $string == "(") {
				$ch = $string;
			} elseif($string == "]") {
				if(isset($ch) || $ch != "[") {
					$stringBalance1 = false;
				} 
			} elseif($string == "}") {
				if(isset($ch) || $ch != "{") {
					$stringBalance2 = false;
				} 
			} elseif($string == ")") {
				if(isset($ch) || $ch != "(") {
					$stringBalance3 = false;
				} 
			} 
		}

		echo "sring balance [] : " . $stringBalance1 . "<br>";
		echo "sring balance {} : " . $stringBalance2 . "<br>";
		echo "sring balance () : " . $stringBalance3 . "<br>";
		echo "<br>";

		if($stringBalance1 == true && $stringBalance2 == true && $stringBalance3 == true) {
			return "check valid Balanced parentheses is true";
		} else {
			return "check valid Balanced parentheses is false 2";
		}	
	} else {
		return "check valid Balanced parentheses is false 1";	
	}	
}



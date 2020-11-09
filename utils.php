<?php

//to find any character, word in a string
function filter_str($str, $target) {
	if (preg_match('/(?<=[\s,.:;"\']|^)' . $target . '(?=[\s,.:;"\']|$)/', $str)) {
		return true; //if found
	}
	return false;
}



?>
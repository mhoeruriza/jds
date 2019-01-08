<?php
	class Palindrome
	{
		public static function isPalindrome($word)
		{
			$temp='';
			for($i=(strlen($word)-1);$i>=0;$i--){
				$temp = $temp.$word[$i];
			}	
			
			$value = false;
			if(strtolower($temp)==strtolower($word)){
				$value = true;
			}
			
			return $value;
		}
	}

	echo Palindrome::isPalindrome('Deleveled');
?>
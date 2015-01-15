	<?php

	function shortText($string, $lenght) {
	    if (strlen($string) > $lenght) {
		$string = substr($string, 0, $lenght) . "...";
		$string_ende = strrchr($string, " ");
		$string = str_replace($string_ende, " ...", $string);
	    }
	    return $string;
	}

	?>
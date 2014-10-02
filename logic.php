<? php

$words = ['']

if (isset($_POST['count'])) {
	$count = $_POST['count'];
	if (!is_numeric($count)) {
	return 'Please choose a number';

}
} else {
	$count = 1;
}


if (isset($_POST['uppercase'])) {
	$uppercase = true;	
}	else {
	$uppercase = false;	
}

if (isset($_POST['symbol'])) {
	$symbol = true;
}	else {
	$symbol = false;

}

if (isset($_POST['number'])) {
	$number = true;
}	else {
	$number = false;
}



if ($words = file('wordlist.txt')) {

	$selected_words = [];




	for($i = 0; $i < $count; $i++) {

		$max = count($words) -1;
		$rand = rand(0,$max);
        
        $word = $words[$rand];
        
		array_push($selected_words, $word);

	}



	if ($uppercase)	{

		foreach ($selected_words as $worded => $word) {
			$selected_words[$worded] = ucfirst($word);
			echo $selected_words[$worded] . '<br/>';
		}

	}
	 
	if ($symbol) {

	} 

	if ($number) {

	}

	$password = implode("", $selected_words);

}


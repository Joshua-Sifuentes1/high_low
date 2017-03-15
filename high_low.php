<?php 
	// $randomNumber = mt_rand(0, 100);
	// fwrite(STDOUT, "Guess a number between 0 and 100." . PHP_EOL);
	// $userGuess = fgets(STDIN);

	// while($userGuess != $randomNumber) {

	// 	echo "Guess? $userGuess" . PHP_EOL;

	// 		if($userGuess < $randomNumber) {
	// 			fwrite(STDOUT, "Higher!" . PHP_EOL);
	// 			fwrite(STDOUT, "Guess again." . PHP_EOL);
	// 			$userGuess = fgets(STDIN);

	// 		} else if($userGuess > $randomNumber) {
	// 			fwrite(STDOUT, "Lower!" . PHP_EOL);
	// 			fwrite(STDOUT, "Guess again." . PHP_EOL);
	// 			$userGuess = fgets(STDIN);

	// 		} else {
	// 			fwrite(STDOUT, "Try again" . PHP_EOL);
	// 		}
	// }

	// echo "Great Guess! You got it!" . PHP_EOL;
// -----------------------------------------------------------------
// 
// -----------------------------------------------------------------

	if ($argc == 3) {

		if (is_numeric($argv[1]) && is_numeric($argv[2])) {
			$random = mt_rand($argv[1], $argv[2]);
			fwrite(STDOUT, "Guess a number between $argv[1] and $argv[2]!" . PHP_EOL);

		} else {

			$minValue = $argv[1];
			$maxValue = $argv[2];

			fwrite(STDOUT, "Input values invalid. Please enter a minimum and maximum value." . PHP_EOL);
			
			do {
				fwrite(STDOUT, "Enter minimum value: ");
				$minValue = trim(fgets(STDIN));
			} while (!is_numeric($minValue));

			do {
				fwrite(STDOUT, "Enter maximum value: ");
				$maxValue = trim(fgets(STDIN));
			} while (!is_numeric($maxValue) || ($maxValue < $minValue));

			$random = mt_rand($minValue, $maxValue);
			fwrite(STDOUT, "Guess a number between $minValue and $maxValue!" . PHP_EOL);
		}

	} else {
		$random = mt_rand(1, 100);
		fwrite(STDOUT, "Guess a number between 1 and 100!" . PHP_EOL);
	}

// -----------------------------------------------------------------
// 
// -----------------------------------------------------------------

	do {
		// fwrite(STDOUT, "Guess a number!" . PHP_EOL);
		$guess = trim(fgets(STDIN));

		if (!is_numeric($guess)){
			$message = 'Value not valid. Please enter a valid integer.' . PHP_EOL;
		} else if($guess == $random) {
			$message = 'You guessed it!' . PHP_EOL;
		} elseif ($guess < $random) {
			$message = 'HIGHER' . PHP_EOL;
		} else {
			$message = 'LOWER' . PHP_EOL;
		}
		
		fwrite(STDOUT, $message . PHP_EOL);

	} while($guess != $random);

?>
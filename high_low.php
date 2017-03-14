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

	$random = mt_rand(1, 100);

	do {
		fwrite(STDOUT, 'Guess a number between 0 and 100.' . PHP_EOL);
		$guess = trim(fgets(STDIN));

		if ($guess == $random) {
			$message = 'You guessed it!' . PHP_EOL;
		} elseif ($guess < $random) {
			$message = 'HIGHER' . PHP_EOL;
		} else {
			$message = 'LOWER' . PHP_EOL;
		}
		
		fwrite(STDOUT, $message . PHP_EOL);

	} while($guess != $random);

?>
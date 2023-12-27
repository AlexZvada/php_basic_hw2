<?php

    echo"What is your name?" . PHP_EOL;

    $user = fgets(STDIN);
    
    echo "Hello, $user!";

    echo "Please enter first number" . PHP_EOL;

    $firstNumber = (int)fgets(STDIN);

    echo "Please enter second number" . PHP_EOL;

    $secondNumber = (int)fgets(STDIN);

    echo "Please enter third number". PHP_EOL;

    $thirdNumber = (int)fgets(STDIN);


    $sum = $firstNumber + $secondNumber + $thirdNumber;

    $average = $sum / 3;
    
    echo "summ = $sum". PHP_EOL;

    echo "average = $average";


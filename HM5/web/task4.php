<?php
function printRes($attempt) {
    switch ($attempt) {
        case 1:
            return 'My dear!';
            break;
        case 2:
            return 'You are not the worst!';
            break;
        case 3:
            return 'God loves you!';
            break;
        case 4:
            return 'Nice try ;)';
            break;
        case 5:
            return 'Great job :)';
            break;
        case 6:
            return 'Lucky bastard! :D';
            break;
        default :
            return 'Ooooooops.Something wrong with my program!';

    }
}
function dices () {
    $attempt1 = mt_rand(1, 6);
    echo '<h2>1st attempt and you get: '.printRes($attempt1).'</h2>';
    $attempt2 = mt_rand(1, 6);
    echo '<h2>2nd attempt and you get: '.printRes($attempt2).'</h2>';
    if($attempt1 === $attempt2) {
        echo '<h1 style="text-align:center;color:red;font-size: 10em;">JACKPOT</h1>';
    }
}
dices();
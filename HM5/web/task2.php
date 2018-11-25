<form action=" " method="POST">
    <label >A <input type="number" name="aSide"></label>
    <label >B <input type="number" name="bSide"></label>
    <label >C <input type="number" name="cSide"></label>
    <input type="submit" placeholder="Confirm">
</form>
<?php

function pythagoras () {
    $find = '';
    $a = $_POST['aSide']; // I cant disable notice even with $a = $b = $c = 0;
    $b = $_POST['bSide'];
    $c = $_POST['cSide'];
    ($a) ? $a = pow($a,2) : $find .= 'a';
    ($b) ? $b = pow($b,2) : $find .= 'b';
    ($c) ? $c = pow($c,2) : $find .= 'c';
    switch ($find) {
        case 'a':
            return round(sqrt($c - $b), 3);
            break;
        case 'b':
            return round(sqrt($c - $a), 3);
            break;
        case 'c':
            return round(sqrt($a + $b), 3);
            break;
    }
    return false;
}
echo '<h2> Result:' .pythagoras().'</h2>';

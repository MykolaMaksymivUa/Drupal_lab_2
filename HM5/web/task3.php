<h1 style="text-align: center;">Pythagoras</h1>
<form action=" " method="POST">
    <input type="text" name="Number">
    <input type="submit" placeholder="Confirm">
</form>
<?php
function sumOfPosElems () {
    if ($_POST) {
        $n = (int)$_POST['Number'];
        $sum = 0;
        for ($i = 0; $i <= $n; $i++) {
            $sum += $i;
        }
        return $sum;
    } else echo 'Please enter a number!';

}
echo '<h1>Sum = ' .sumOfPosElems() .'</h1>';

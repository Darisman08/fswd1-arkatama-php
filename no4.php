<?php
function triangleUpsideleft($n) {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
function triangleDownsideleft($n) {
    for ($i = $n; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
function triangleUpsideright($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $n; $j > $i; $j--) {
            echo "&nbsp;&nbsp";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
}
function triangleDownsideright($n) {
    for ($i = $n; $i > 0; $i--) {
        for ($j = $n; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 0; $k < $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
}
function printSelectedPattern($patternName, $n)
{
    switch ($patternName) {
        case 'pattern1':
            triangleUpsideleft($n);
            break;
        case 'pattern2':
            triangleDownsideleft($n);
            break;
        case 'pattern3':
            triangleUpsideright($n);
            break;
        case 'pattern4':
            triangleDownsideright($n);
            break;
        default:
            echo "Invalid pattern name!";
            break;
    }
}
printSelectedPattern('pattern1', 5);
printSelectedPattern('pattern2', 5);
printSelectedPattern('pattern3', 5);
printSelectedPattern('pattern4', 5);
?>


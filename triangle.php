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

echo "Triangle Upside Left","<br>";
triangleUpsideleft(5);
echo "Triangle Downside Left","<br>";
triangleDownsideleft(5);
echo "Triangle Upside Right","<br>";
triangleUpsideright(5);
echo "Triangle Downside Right","<br>";
triangleDownsideright(5);
?>


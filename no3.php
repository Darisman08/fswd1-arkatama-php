<?php
function triAngle($pattern, $n) {
    switch ($pattern) {
        case "pattern1":
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j <= $i; $j++) {
                    echo "$ ";
                }
                echo "<br>";
            }
            break;
        case "pattern2":
            for ($i = $n; $i > 0; $i--) {
                for ($j = 0; $j < $i; $j++) {
                    echo "@ ";
                }
                echo "<br>";
            }
            break;
        case "pattern3":
            for ($i = 1; $i <= $n; $i++) {
                for ($j = $n; $j > $i; $j--) {
                    echo "&nbsp;&nbsp";
                }
                for ($k = 1; $k <= $i; $k++) {
                    echo "#";
                }
                echo "<br>";
            }
            break;
        case "pattern4":
            for ($i = $n; $i > 0; $i--) {
                for ($j = $n; $j > $i; $j--) {
                    echo "&nbsp;&nbsp;";
                }
                for ($k = 0; $k < $i; $k++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;
        default:
            echo "Invalid pattern";
    }
}

triAngle("pattern1", 5);
triAngle("pattern2", 10);
triAngle("pattern3", 9);
triAngle("pattern4", 6);
?>


<?php

    $z=1; $x=1;
    for($y=1; $y<=10; $y++){
        echo "<tr> <td> $y </td>";
        for($x=1; $x<=10; $x++){
            $total=$x*$y;
            echo "<td> $total </td>";
            echo "</tr>";
        }
    }
?>
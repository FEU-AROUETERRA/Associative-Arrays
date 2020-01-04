<!doctype html>
<html>

<head>
    <title> NBA STANDINGS </title>
    <link rel="stylesheet" href="style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>

<body>
    <hr style="border: 1px solid white;" />
    <br>
    <h1 style="display: inline;"> &nbsp 2019-20 NBA STANDINGS: <span id="dark">By August Florese</span></h1>
    <hr style="border: 1px solid white;" />
    <?php
    $counter = 0;
    $teams =
        array(
            "Eastern Conference" => array(
                "Atlantic Division" => array(
                    "Philadelphia 76ers" => array(20, 8, "images\PHI.svg"),
                    "Boston Celtics" => array(17, 7, "images\BOS.svg"),
                    "Toronto Raptors" => array(18, 8, "images\TOR.svg"),
                    "Brooklyn Nets" => array(14, 12, "images\BKN.svg"),
                    "New York Knicks" => array(6, 21, "images\NYK.svg")
                ),
                "Central Division" => array(
                    "Milwaukee Bucks" => array(17, 7, "images\MIL.svg"),
                    "Indiana Pacers" => array(18, 9, "images\IND.svg"),
                    "Detroit Pistons" => array(11, 16, "images\DET.svg"),
                    "Chicago Bulls" => array(10, 19, "images\CHI.svg"),
                    "Cleveland Cavaliers" => array(6, 21, "images\CLE.svg")
                ),
                "Southeast Division" => array(
                    "Miami Heat" => array(19, 8, "images\MIA.svg"),
                    "Orlando Magic" => array(12, 14, "images\ORL.svg"),
                    "Charlotte Hornets" => array(12, 17, "images\CHA.svg"),
                    "Washington Wizards" => array(8, 17, "images\WAS.svg"),
                    "Atlanta Hawks" => array(6, 21, "images\ATL.svg")
                )
            ),
            "Western Conference" =>  array(
                "Northwest Division" => array(
                    "Denver Nuggets" => array(17, 8, "images\DEN.svg"),
                    "Utah Jazz" => array(15, 11, "images\UTA.svg"),
                    "Olklahoma City Thunder" => array(12, 14, "images\OKC.svg"),
                    "Minnesota Timberwolves" => array(10, 15, "images\MIN.svg"),
                    "Portland Trail Blazers" => array(10, 16, "images\POR.svg")
                ),
                "Pacific Division" => array(
                    "Los Angeles Lakers" => array(24, 3, "images\LAL.svg"),
                    "LA Clippers" => array(20, 8, "images\LAC.svg"),
                    "Sacramento Kings" => array(12, 14, "images\SAC.svg"),
                    "Phoenix Suns" => array(11, 14, "images\PHX.svg"),
                    "Golden State Warriors" => array(5, 23, "images\GSW.svg")
                ),
                "Southwest Division" => array(
                    "Dallas Mavericks" => array(18, 8, "images\DAL.svg"),
                    "Houston Rockets" => array(18, 9, "images\HOU.svg"),
                    "San Antonio Spurs" => array(10, 16, "images\SAS.svg"),
                    "Memphis Grizzlies" => array(10, 17, "images\MEM.svg"),
                    "New Orleans Pelicans" => array(65, 21, "images\NOP.svg")
                )
            )
        );
    $keys = array_keys($teams);
    ?>


    <?php
    $Coast = [];
    $ctr = 0;
    foreach ($teams as $key[0] => $coast) {
        $Coast[$ctr] = $coast;
        $ctr++;
    }
    ?>
    </table>
    <?php for ($i = 0; $i < 2; $i++) : ?>
        <div style="background-color:ghostwhite">
            <h2 class="title"> <?php
                                echo " &nbsp &nbsp $keys[$i]";
                                ?> </h2>
        </div>
        <div class="ind">
            <?php foreach ($Coast[$i] as $Division => $Group) : ?>
                <div class="ind">
                    <table class="table table-striped table-bordered table-hover table-sm table-condensed">
                        <thead>
                            <tr class="title">
                                <th>
                                    &nbsp
                                    <?= $Division ?>
                                </th>
                                <th class="rhs"> W <i class="fas fa-angle-down    " style="font-size:18px;"></i> </th>
                                <th class="rhs"> L <i class="fas fa-angle-down    " style="font-size:18px;"></i> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = 0;
                            foreach ($Group as $Grouping => $Score) {
                                $counter++;
                                echo "<tr>";
                                echo "<td scope=\"row\" class=\" text-left \" style=\"width:70%\"> &nbsp <span id=\"bold\">$counter</span> <img src=$Score[2]> $Grouping </td>";
                                echo "<td style=\"width:15% font-size: 18px\">";
                                echo $Score[0];
                                echo "</td>";
                                echo "<td style=\"width:15%\">";
                                echo $Score[1];
                                echo "</td>";
                                echo "</tr>";
                            } ?>
                        </tbody>
                    </table>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endfor; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>

<hr style="border: 1px solid white;" />

<span style="color: white"> FLORESE &#x2015;&#x2015;&#x2015; N31 &#x2015;&#x2015;&#x2015; Lab Activity 2.2</span>


</html>
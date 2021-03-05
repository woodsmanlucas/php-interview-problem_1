<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 1</title>
</head>
<body>
    <?php

        $array = array(8, 5, 6, 9, 3, 8, 2, 4, 6, 10, 8, 5, 6, 1, 7, 10, 5, 3, 7, 6);

        print_r($array);
        sort($array);
        print_r($array);

        $team1 = array();
        $team2 = array();
        foreach($array as $key => $val) {
            if ($key % 2 == 0) {
                array_push($team1, $val);
            } else {
                array_push($team2, $val);
            }
        }
        echo "<p>";
        print_r($team1);
        echo "</p><p>";
        print_r($team2);
        echo "</p>";
    ?>

    <img src="image" alt="an image created with the gd library" height=300 width=300/>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade</title>
</head>
<body>

<?php
    $answer1 = $_POST['Q1'];
    $answer2 = $_POST['Q2'];
    $answer3 = $_POST['Q3'];
    $answer4 = $_POST['Q4'];
    $answer5 = $_POST['Q5'];
    $answer6 = $_POST['Q6'];
    $answer7 = $_POST['Q7'];
    $answer8 = $_POST['Q8'];
    $answer9 = $_POST['Q9'];
    $answer10 = $_POST['Q10'];
    $answer11 = $_POST['Q11'];
    $answer12 = $_POST['Q12'];
    $answer13 = $_POST['Q13'];
    $answer14 = $_POST['Q14'];
    $answer15 = $_POST['Q15'];
    $answer16 = $_POST['Q16'];
    $answer17 = $_POST['Q17'];
    $answer18 = $_POST['Q18'];
    $answer19 = $_POST['Q19'];
    $answer20 = $_POST['Q20'];

    $totalA = 0;
    $totalB = 0;
    $totalC = 0;
    $totalD = 0;

    if ($answer1 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
    if ($answer1 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
    if ($answer1 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }
    if ($answer1 == "D") { $totalD = $totalD + 1.16; $totalA = $totalA + .07; }

    if ($answer2 == "A") { $totalA = $totalA + 1.23; }
    if ($answer2 == "B") { $totalB = $totalB + 1.15; }
    if ($answer2 == "C") { $totalC = $totalC + 1.13; }
    if ($answer2 == "D") { $totalD = $totalD + 1.16; }

    if ($answer3 == "A") { $totalA = $totalA + 1.17; $totalC = $totalC + .05; }
    if ($answer3 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .03; }
    if ($answer3 == "C") { $totalC = $totalC + 1.13; $totalB = $totalB + .07; }
    if ($answer3 == "D") { $totalD = $totalD + 1.16; }

    if ($answer4 == "A") { $totalA = $totalA + 1.17; }
    if ($answer4 == "B") { $totalB = $totalB + 1.15; }
    if ($answer4 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; $totalB = $totalB + .06; $totalD = $totalD + .07; }
    if ($answer4 == "D") { $totalD = $totalD + 1.16; $totalB = $totalB + .04; $totalA = $totalA + .045; $totalC = $totalC + .034; }

    if ($answer5 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .08; }
    if ($answer5 == "B") { $totalB = $totalB + 1.15; }
    if ($answer5 == "C") { $totalC = $totalC + 1.14; $totalA = $totalA + .06; $totalD = $totalD + .08; }
    if ($answer5 == "D") { $totalD = $totalD + 1.16; $totalC = $totalC + .04; }

    if ($answer6 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
    if ($answer6 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
    if ($answer6 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }
    if ($answer6 == "D") { $totalD = $totalD + 1.16; $totalA = $totalA + .07; }

    if ($answer7 == "A") { $totalA = $totalA + 1.23; }
    if ($answer7 == "B") { $totalB = $totalB + 1.15; }
    if ($answer7 == "C") { $totalC = $totalC + 1.13; }
    if ($answer7 == "D") { $totalD = $totalD + 1.16; }

    if ($answer8 == "A") { $totalA = $totalA + 1.17; $totalC = $totalC + .05; }
    if ($answer8 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .03; }
    if ($answer8 == "C") { $totalC = $totalC + 1.13; $totalB = $totalB + .07; }
    if ($answer8 == "D") { $totalD = $totalD + 1.16; }

    if ($answer9 == "A") { $totalA = $totalA + 1.17; }
    if ($answer9 == "B") { $totalB = $totalB + 1.15; }
    if ($answer9 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; $totalB = $totalB + .06; $totalD = $totalD + .07; }
    if ($answer9 == "D") { $totalD = $totalD + 1.16; $totalB = $totalB + .04; $totalA = $totalA + .045; $totalC = $totalC + .034; }
    
    if ($answer10 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .08; }
    if ($answer10 == "B") { $totalB = $totalB + 1.15; }
    if ($answer10 == "C") { $totalC = $totalC + 1.14; $totalA = $totalA + .06; $totalD = $totalD + .08; }
    if ($answer10 == "D") { $totalD = $totalD + 1.16; $totalC = $totalC + .04; }

    if ($answer11 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
    if ($answer11 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
    if ($answer11 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }
    if ($answer11 == "D") { $totalD = $totalD + 1.16; $totalA = $totalA + .07; }

    if ($answer12 == "A") { $totalA = $totalA + 1.23; }
    if ($answer12 == "B") { $totalB = $totalB + 1.15; }
    if ($answer12 == "C") { $totalC = $totalC + 1.13; }
    if ($answer12 == "D") { $totalD = $totalD + 1.16; }

    if ($answer13 == "A") { $totalA = $totalA + 1.17; $totalC = $totalC + .05; }
    if ($answer13 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .03; }
    if ($answer13 == "C") { $totalC = $totalC + 1.13; $totalB = $totalB + .07; }
    if ($answer13 == "D") { $totalD = $totalD + 1.16; }

    if ($answer14 == "A") { $totalA = $totalA + 1.17; }
    if ($answer14 == "B") { $totalB = $totalB + 1.15; }
    if ($answer14 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; $totalB = $totalB + .06; $totalD = $totalD + .07; }
    if ($answer14 == "D") { $totalD = $totalD + 1.16; $totalB = $totalB + .04; $totalA = $totalA + .045; $totalC = $totalC + .034; }
    
    if ($answer15 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .08; }
    if ($answer15 == "B") { $totalB = $totalB + 1.15; }
    if ($answer15 == "C") { $totalC = $totalC + 1.14; $totalA = $totalA + .06; $totalD = $totalD + .08; }
    if ($answer15 == "D") { $totalD = $totalD + 1.16; $totalC = $totalC + .04; }

    if ($answer16 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
    if ($answer16 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
    if ($answer16 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }
    if ($answer16 == "D") { $totalD = $totalD + 1.16; $totalA = $totalA + .07; }

    if ($answer17 == "A") { $totalA = $totalA + 1.23; }
    if ($answer17 == "B") { $totalB = $totalB + 1.15; }
    if ($answer17 == "C") { $totalC = $totalC + 1.13; }
    if ($answer17 == "D") { $totalD = $totalD + 1.16; }

    if ($answer18 == "A") { $totalA = $totalA + 1.17; $totalC = $totalC + .05; }
    if ($answer18 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .03; }
    if ($answer18 == "C") { $totalC = $totalC + 1.13; $totalB = $totalB + .07; }
    if ($answer18 == "D") { $totalD = $totalD + 1.16; }

    if ($answer19 == "A") { $totalA = $totalA + 1.17; }
    if ($answer19 == "B") { $totalB = $totalB + 1.15; }
    if ($answer19 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; $totalB = $totalB + .06; $totalD = $totalD + .07; }
    if ($answer19 == "D") { $totalD = $totalD + 1.16; $totalB = $totalB + .04; $totalA = $totalA + .045; $totalC = $totalC + .034; }
    
    if ($answer20 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .08; }
    if ($answer20 == "B") { $totalB = $totalB + 1.15; }
    if ($answer20 == "C") { $totalC = $totalC + 1.14; $totalA = $totalA + .06; $totalD = $totalD + .08; }
    if ($answer20 == "D") { $totalD = $totalD + 1.16; $totalC = $totalC + .04; }
?>

<?php

    if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD) {
        echo '<p>You Are: Sasuke</p><img/></p><p></p><a href="/index.php">Play Again?</a></div>';
    }

    elseif ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD) {
        echo '<p>You Are: Zabuza</p><img/></p><p></p><a href="/index.php">Play Again?</a></div>';
    }

    elseif ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD) {
        echo '<p>You Are: Choji</p><img/></p><p><p></p><a href="/index.php">Play Again?</a></div>';
    }

    elseif ($totalD > $totalA && $totalD > $totalB && $totalD > $totalC) {
        echo '<p>You Are: Naruto</p><img/></p><p>.</p><a href="/index.php">Play Again?</a></div>';
    } 

?>
    
</body>
</html>
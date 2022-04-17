<!DOCTYPE html>
<html>
<head>
    <title>My website</title>
    <meta charset="utf-8">
</head>
<body>

    <h1>Lorem Ipsum</h1>
    <?php
        $day = "Tuesday";
        switch ($day) {
            case "Monday": 
                echo "Monday";
                break;
            case "Tuesday":
                echo "Tuesday";
                break;
            case "Wednesday":
                echo "Wednesday";
                break;
            case "Thursday":
                echo "Thursday";
                break;
            case "Friday":
                echo "Friday";
                break;
            case "Saturday":
                echo "Saturday";
                break;
            case "Sunday":
                echo "Sunday";
                break;
            default: 
                echo "Day Info Not Available!";  
        }        
    ?>

</body>
</html>












<!-- <?php

$hour = 12;

?>
<!DOCTYPE html>
<html>
<head>
    <title>My website</title>
    <meta charset="utf-8">
</head>
<body>

    <h1>Lorem Ipsum</h1>

    <?php if ($hour < 12): ?>
        Good morning
    <?php elseif ($hour < 18): ?>
        Good afternoon
    <?php elseif ($hour < 22): ?>
        Good evening
    <?php else: ?>
        Good night
    <?php endif; ?>

</body>
</html> -->

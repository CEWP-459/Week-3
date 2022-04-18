<?php
     $day = "Tuesday";
?>

<!DOCTYPE html>
<html>
<head>
    <title>My website</title>
    <meta charset="utf-8">
</head>
<body>

    <h1>Lorem Ipsum</h1>
    <?php switch ($day) : 
            case "Monday": ?>
                Monday
            <?php  break; 
            case "Tuesday": ?>
                <em>Tuesday</em>
            <?php  break;
            case "Wednesday": ?>
                Wednesday
            <?php  break;
            case "Thursday": ?>
                Thursday
            <?php break;
            case "Friday": ?>
                Friday
            <?php break;
            case "Saturday": ?>
                Saturday
            <?php break;
            case "Sunday": ?>
                Sunday
            <?php default: ?>
                Day Info Not Available!      
    <?php endswitch; ?>

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

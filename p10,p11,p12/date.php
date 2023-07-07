<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date display</title>
    <style>
        h1{
            text-align:center;
        }
        p{
            color: blue;
        }
    </style>
    
</head>
<body>
    <?php
    $date=getdate();
    echo "<h1>Todays date is <p>$date[mday]/$date[mon]/$date[year]</p></h1>"
    ?>
</body>
</html>
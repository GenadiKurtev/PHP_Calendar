<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Calendar Project</title>
</head>
<body>
    <?php $year = date('Y') ?>
    <h1><form method="post" action="index.php">Year:<input type="number" name="year" placeholder="<?=$year?>"><input type="submit" name="submit" value="Submit"></form></h1>
    <hr>
    <div class="month">
        <?php include("inc.php");?>

    </div>
</body>
</html>
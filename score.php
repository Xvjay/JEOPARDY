<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>

    <br>
    <?php
    session_start();
    $file = fopen("scores.txt", "r+");
    $scores = array();
    while (!feof($file)) {
        $line = fgets($file);
        if (!empty($line)) {
            list($username, $score) = explode(",", $line);
            $scores[$username] = (int) $score;
        }
    }
    $username = $_SESSION['username'];

    $score = (int) $_SESSION['score'];
    $scores[$username] = $score;

    echo $score;







    ?>
</body>

</html>
<html>

<head>
    <title>Jeopardy!</title>
    <link href="jeopardy.css" type="text/css" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <li><a href="leaderboard.php">Leaderboard</a></li>
        <li><a href="logout.php">Logout</a></li>
    </nav>

    <h1>JEOPARDY!</h1>

    <div id="score">
        TOTAL SCORE<br />

        <?php
        include('score.php')
            ?>
    </div>

    <table class="center">
        <tr>
            <td>Music</td>
            <td>HTML</td>
            <td>Georgia State</td>
            <td>CSS</td>
            <td>Food & Drink</td>
            <td>Jokes</td>
        </tr>
        <tr>
            <td><a id="value" href="M200.html">$200</a></td>
            <td><a id="value" href="H200.html">$200</a></td>
            <td><a id="value" href="GS200.html">$200</a></td>
            <td><a id="value" href="C200.html">$200</a></td>
            <td><a id="value" href="FD200.html">$200</a></td>
            <td><a id="value" href="J200.html">$200</a></td>
        </tr>
        <tr>
            <td><a id="value" href="M400.html">$400</a></td>
            <td><a id="value" href="H400.html">$400</a></td>
            <td><a id="value" href="GS400.html">$400</a></td>
            <td><a id="value" href="C400.html">$400</a></td>
            <td><a id="value" href="FD400.html">$400</a></td>
            <td><a id="value" href="J400.html">$400</a></td>
        </tr>
        <tr>
            <td><a id="value" href="M600.html">$600</a></td>
            <td><a id="value" href="H600.html">$600</a></td>
            <td><a id="value" href="GS600.html">$600</a></td>
            <td><a id="value" href="C600.html">$600</a></td>
            <td><a id="value" href="FD600.html">$600</a></td>
            <td><a id="value" href="J600.html">$600</a></td>
        </tr>
        <tr>
            <td><a id="value" href="M800.html">$800</a></td>
            <td><a id="value" href="H800.html">$800</a></td>
            <td><a id="value" href="GS800.html">$800</a></td>
            <td><a id="value" href="C800.html">$800</a></td>
            <td><a id="value" href="FD800.html">$800</a></td>
            <td><a id="value" href="J800.html">$800</a></td>
        </tr>
        <tr>
            <td><a id="value" href="M1000.html">$1000</a></td>
            <td><a id="value" href="H1000.html">$1000</a></td>
            <td><a id="value" href="GS1000.html">$1000</a></td>
            <td><a id="value" href="C1000.html">$1000</a></td>
            <td><a id="value" href="FD1000.html">$1000</a></td>
            <td><a id="value" href="J1000.html">$1000</a></td>
        </tr>
    </table>

</body>

</html>
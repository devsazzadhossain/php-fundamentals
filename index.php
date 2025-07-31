<?php 
    $fonts = "Roboto";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

<style>
    *{
        margin: 0px;
        padding: 0px;
    }
    body {
        font-family: <?php echo $fonts;?>;
        margin-top: <?php echo "20px";?>;
    }
    h1 {
        font-family: <?php echo $fonts;?>;
    }
    div.php-coding {
        width: 900px;
        margin: 0 auto;
        background-color: #dddddd;
        border-radius: 10px;
    }
    div.header, footer.footer-area {
        padding: 20px 30px;
        background-color: <?php echo "#1E1E1E";?>;
        color: #ffffff;
        text-align: center;
    }
    footer.footer-area a{
        color: #ffffff;
    }
    div.main-content {
        min-height: 300px;
        padding: 30px;
    }
    input[type="text"] {
        width: 250px;
    }

</style>

<div class="php-coding">

    <div class="header">
        <h1><?php echo "PHP Fundamentals";?></h1>
    </div>

    <div class="main-content">

        <h2>PHP current(), next(), prev(), end() reset()</h2><br><hr/><br/>

        <?php
            $playlist = array ("Song A", "Song B", "Song C");

            print "<pre>";
            print_r($playlist);
            print "</pre><br>";
            
            echo "Current Value: ".current($playlist)."<br>";   // Song A (starts at the first song)
            echo "Next Value: ".next($playlist)."<br>";     // Song B (moved forward)
            echo "Current Value: ".current($playlist)."<br>";
            echo "End Value: ".end($playlist)."<br>";       // Song C (jumped to last song)
            echo "Current Value: ".current($playlist)."<br>";
            echo "Previous Value: ".prev($playlist)."<br>";     // Song B (went back)
            echo "Current Value: ".current($playlist)."<br>";
            echo "Reset Value: ".reset($playlist)."<br>";   // Song A (back to first)
            echo "Current Value: ".current($playlist)."<br>";
        ?>



    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
<?php 
    $fonts = "Roboto";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
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
    a{
        color: #ffffff;
    }
    div.main-content {
        min-height: 300px;
        padding: 30px;
    }

</style>

<div class="php-coding">

    <div class="header">
        <h1><?php echo "PHP Fundamentals";?></h1>
    </div>

    <div class="main-content">

        <h2>PHP string methods (video part 07)</h2>
        1. String lenth (strlen)
        2. PHP word count (str_word_count)
        3. String reverse (strrev)
        4. Search string position - strpos($x, "string");
        5. String replace -str_replace("PHP", "JAVA", $x);
        <br/><br/>

        <?php 
            $x = "I love PHP";
            echo strlen($x);
            echo "<br/><br/>";
        ?>

        <?php
            $x = "PHP word count method";
            echo str_word_count($x);
            echo "<br/><br/>";
        ?>

        <?php
            $x = "PHP string reverse method";
            echo strrev($x);
            echo "<br/><br/>";
        ?>

        <?php
            $x = "PHP search string position method";
            echo strpos($x, "string");
            echo "<br/><br/>";
        ?>

        <?php
            $x = "PHP string replace method";
            echo str_replace("PHP", "JAVA", $x);
            echo "<br/><br/>";
        ?>

    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
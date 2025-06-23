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

        <h2>PHP Conditional Statements </h2><hr/><br/>
        
        <!-- The if statement executes some code if one condition is true -->
        <?php 
            $x = 15;
            if ($x > 10){
                echo "15 is greater than 10";
            }
        ?>
        <br/><br/>
        <!-- The if...else statement executes some code if a condition is true and another code if that condition is false -->
        <?php 
            $x = 5;
            if ($x > 10){
                echo "15 is greater than 10";
            } else {
                echo "Wrong";
            }
        ?>
        <br/><br/>
        <!-- The if...elseif...else statement executes different codes for more than two conditions. -->
        <?php
            $x = 10;
            if ($x > 15){
                echo ("x is greater than 15");
            } elseif ($x > 12){
                echo "x is greater than 12";
            } elseif ($x > 11){
                echo "x is greater than 11";
            } else {
                echo "x is less than 11";
            }
        ?>


    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
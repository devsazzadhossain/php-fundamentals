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

        <h2>PHP Loops </h2><hr/><br/>
        
        <!-- while loop -->
        <?php
            $x = 1;
            while ($x <= 5){
                echo "The number is $x <br/>";
                $x++;
            }
            echo "<hr/>";
        ?>

        <!-- do...while loop --><br/>
        <?php
            $x = 1;
            do {
                echo "The number is $x <br/>";
                $x++;
            } while ($x <= 5);
            echo "<hr/>";
        ?>

        <!-- for loop --><br/>
        <?php
            for ($i = 1; $i <= 10; $i++){
                echo "The number is $i <br/>";
            }
        ?>


    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
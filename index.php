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


        <?php echo "Hello, PHP World!"; ?> <br>
        <h1><?php echo "Hello, PHP World";?></h1><br>
        <?php echo "Hello, php World"; ?><br>

        <?php 
            $a = "5";
            $b = "10";
            $c = $a+$b;
            echo "total value = ".$c." ok fine";
        ?>

        <?php 
            echo "</br>";
            echo "This is the output using echo";
            echo "</br>";
            echo "This is the ", " output using echo";
            print "</br>";
            print "This is the output using print";
            //print "This is the ", " output using print";
            print "</br>";
            $a = print("Sazzad");
            var_dump($a);
            ?>



    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
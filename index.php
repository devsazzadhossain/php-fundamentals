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

        <h2>PHP Functions </h2><hr/><br/>
        
        <?php
            function school($name, $year){
                echo "$name is established in $year <br/>";
            }

            school("CMC school", "2003");
            school("Genius school", "2005");
            school("Govt. school", "1950");
        ?><br/><hr/>

        <?php
            function schools($name="My school"){
                echo "$name is good school <br/>";
            }

            schools("CMC school");
            schools();
            schools("Genius school");
            schools("Govt. school");
        ?><br/><hr/>

        <?php
            function sum($x, $y){
                $z = $x+$y;
                return $z;
            }

            echo "5+10 = " . sum(5, 10);
        ?>




    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
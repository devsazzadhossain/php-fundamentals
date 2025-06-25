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

        <h2>PHP Sorting Arrays </h2><hr/><br/>
        <!-- Sorting Arrays -->
        <?php
            // $names = array("Rafi", "Sazzad", "Munshi", "Arif", "Sajedur");
            $names = array(52, 45, 1, 10, 50);
            sort($names);
            $lenth = count($names);
            for ($i = 0; $i < $lenth; $i++){
                echo $names[$i];
                echo ("<br/>");
            }
        ?><br/><hr/><br/>

        <?php
            $age = array("Rafi"=> "21", "Arif" => "28", "Sazzad" => "22", "Sajedur" => "26");
            ksort($age);

            foreach ($age as $key => $value){
                echo "Name = ".$key. ", age = ".$value;
                echo "<br/>";
            }

        ?>




    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
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

        <h2>PHP Arrays </h2><hr/><br/>
        <!-- Indexed array -->
        <?php
            $x = array(1,3,5,7,9);
            echo $x[3];
            $x[0] = 1;
            $x[1] = 3;
            $x[2] = 5;
            $x[3] = 7;
            $x[4] = 9;
        ?><br/>

        <!-- Print indexed array values in loop -->
        <?php
            $x = array(1,3,5,7,9);
            $lenth = count($x);

            for ($i = 0; $i < $lenth; $i++){
                echo $x[$i];
                echo "<br/>";
            }
        ?><br/><hr/><br>

        <!-- PHP associative array -->
        <?php
            $ages = array("sajedur" => "26", "arif" => "28", "sazzad" => "22");
            
            $ages["sajedur"] = "26";
            $ages["arif"] = "28";
            $ages["sazzad"] = "22";

            foreach($ages as $x => $age){
                echo $x. " is " .$age. " years old". "<br/>"; 
            }

        ?><br/><hr/><br>

        <!-- PHP multidimensional array -->
        <?php
            $cars = array(
                array("BMW", 15, 50),
                array("Volvo", 10, 30),
                array("Audi", 25, 40),
                array("Toyota", 11, 35)
            );

            // echo $cars[1][2];

            for ($row = 0; $row < 4; $row++){
                echo "<p> Row number $row </p>";
                echo "<ul>";
                for ($col = 0; $col < 3; $col++){
                    echo "<li> ".$cars[$row][$col]." </li>";
                }
                echo"</ul>";
            }

        ?>




    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
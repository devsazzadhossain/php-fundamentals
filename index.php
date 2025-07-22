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

        <h2>PHP array_map()</h2><br><hr/><br/>
        <?php
            function myfunction($values){   // example 1
                return($values+$values); 
            }

            $numbers = array(1,2,3,4,5);

            $result = array_map("myfunction", $numbers);

            echo "<pre>";
            print_r($result);
            echo "</pre>";
        ?><br><hr><br>

        <?php
            function uppercase($capital){   // example 2
                $c = strtoupper($capital);
                return $c;
            }

            $assoc = array(
                "Name" => "Sazzad Hossain",
                "Nationality" => "Bangladeshi",
                "Blood Group" => "b+"
            );

            print "<pre>";
            print_r(array_map("uppercase", $assoc));
            print "</pre>";
        ?><br><hr><br>

        <?php
            function many_arrays($m1,$m2){  // example 3
                if ($m1===$m2){
                    return "same";
                } else {
                    return "different";
                }
            }
            
            $a1 = array("horse", "dog", "rat");
            $a2 = array("cat", "dog", "cow");

            print "<pre>";
            print_r(array_map("many_arrays", $a1,$a2));
            print "</pre>";
        ?>

    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
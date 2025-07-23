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

        <h2>PHP array_multisort()</h2><br><hr/><br/>
        <?php
            $arr_one = array("Helicopter", "Mobile Phone", "Computer");     // example 1
            $arr_two = array("Zoo", "Bull", "Lime");

            array_multisort($arr_one,SORT_ASC,$arr_two,SORT_DESC);

            print "<pre>";
            print_r($arr_one);
            print "</pre>";

            print "<pre>";
            print_r($arr_two);
            print "</pre>";
        ?><br><hr/><br/>

        <?php
            $num_one = array(40,50,20,10);      // example 2 - Merge two arrays and sort them as numbers, in ascending order:
            $num_two = array(30,100,60,90,);

            $number = array_merge($num_one, $num_two);

            array_multisort($number,SORT_ASC, SORT_NUMERIC);

            print "<pre>";
            print_r($number);
            print "</pre>";

        ?>

    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
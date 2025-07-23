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

        <h2>PHP array_merge()</h2><br><hr/><br/>
        <?php
            $one = array("Red", "Green", "Blue");       // example 1
            $two = array("Black", "White", "Gray");

            print "<pre>";
            print_r(array_merge($one, $two));
            print "</pre>";
        ?><br><hr/><br/>

        <?php
            $array_one = array(     // example 2
                "a" => "Apple",
                "b" => "Bat",
                "c" => "Cat"
            );
            $array_two = array(
                "c" => "Override Cat",
                "d" => "Desk",
                "e" => "Element"
            );
            $array_three = array(
                4 => "one",
                2 => "two",
                3 => "three"
            );

            print "<pre>";
            print_r(array_merge($array_one, $array_two, $array_three));
            print "</pre>";
        ?>

    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
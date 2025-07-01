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
    footer.footer-area a{
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

        <h2>PHP Date & Time </h2><hr/><br/>

        <?php
            echo "Date: ". date("d.m.Y"), "<br>";
            echo "Date: ". date("d/m/Y"), "<br>";
            echo "Date: ". date("d-m-Y"), "<br>";
            echo "Today is ". date("l"), "<br>";
            // Default PHP Server
            echo "Default PHP Server Time is ". date("h:i:s a"), "<br>";

            // Your Default timezone
            date_default_timezone_set('Asia/Dhaka');
            echo "Bangladesh Time is ". date("h:i:s a"), "<br>";
            echo date_default_timezone_get(). "<br>";

            // Create a Date With mktime()
            // creates a date and time with the date() function from a number of parameters in the mktime() function
            // Syntax - mktime(hour, minute, second, month, day, year)
            $d = mktime(5,16,50,7,1,2025);
            echo "Created time is " . date("d-m-Y h:i:s a", $d) . "<br>";

            // Create a Date From a String With strtotime()
            // The example below creates a date and time from the strtotime() function
            // Syntax - strtotime(time, now)
            $d = strtotime("5:46pm July 2025");
            echo "Created time is " . date("d-m-Y h:i:s a", $d) . "<br>";

            // PHP is quite clever about converting a string to a date, so you can put in various values:
            $d=strtotime("tomorrow");
            echo date("Y-m-d h:i:sa", $d) . "<br>";

            $d=strtotime("next Saturday");
            echo date("Y-m-d h:i:sa", $d) . "<br>";

            $d=strtotime("+3 Months");
            echo date("Y-m-d h:i:sa", $d) . "<br>";

        ?>



    </div>

    <footer class="footer-area">
        <p>&copy; <?php echo date("Y");?> sazzadhossainmit</p>
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
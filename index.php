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

</style>

<div class="php-coding">

    <div class="header">
        <h1><?php echo "PHP Fundamentals";?></h1>
    </div>

    <div class="main-content">

        <h2>PHP Filters</h2><hr/><br/>

        <!-- The filter_list() function can be used to list what the PHP filter extension offers: -->
        <table>
            <tr>
                <td>Filter Name</td>
                <td>Filter ID</td>
            </tr>
            <?php
                foreach (filter_list() as $id => $filter) {
                    echo "<tr><td>". $filter . "</td><td>". filter_id($filter). "</td></tr>";
                }
            ?>
        </table>

        <!-- The filter_var() function both validate and sanitize data. -->
        <?php
            $int = 50.6;
            if (filter_var($int, FILTER_VALIDATE_INT)){
                echo "$int is valid Integer";
            } else {
                echo "$int is not valid Integer!". "<br>";
            }
        ?>

        <!-- Validate IP -->
        <?php
            $ip = "127.0.0.1";
            if (filter_var($ip, FILTER_VALIDATE_IP)){
                echo "$ip is valid IP.";
            } else {
                echo "$ip is not valid IP!" . "<br>";
            }
        ?><br>

        <!-- Validate Email -->
        <?php
            $email = "sazzadhossainmitgmail.com";
            if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "$email is valid email.";
            } else {
                echo "$email is not valid email!". "<br>";
            }
        ?>

        <!-- Validate URL -->
        <?php
            // Remove all illegal characters from email (SANITIZE)
            // $url = filter_var($url, FILTER_SANITIZE_EMAIL);

            $url = "https://github.com/sazzadhossainmit";
            if (filter_var($url, FILTER_SANITIZE_URL)){
                echo "$url is valid URL address.";
            } else {
                echo "$url is not valid URL address!". "<br>";
            }
        ?>

    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
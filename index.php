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

        <h2>PHP Operators (tutorial part 09)</h2>
        1. Arithmetic operators
        2. Assignment operators
        3. Comparison operators
        4. Increment/Decrement operators
        5. Logical operators
        6. String operators
        7. Array operators
        <br/><br/>
        <hr/>6. String operators <hr/>

        <?php
            $x = "I am learning";
            $y = " PHP";
            $x .= $y;
            echo $x;
        ?>

        <br/><br/>
        <hr/>7. Array operators (The PHP array operators are used to compare arrays.) <hr/>
        <?php
            $x = array (
                "a" => "Apple",
                "b" => "Banana"
            );
            $y = array (
                "c" => "Cat",
                "d" => "Date"
            );
            var_dump($x+$y);
            // union (Union of $x and $y)
        ?>
        <br/><br/>
        <?php
            $x = array (
                "a" => "Apple",
                "b" => "Banana"
            );
            $y = array (
                "c" => "Cat",
                "d" => "Date"
            );
            var_dump($x == $y);
            // equality (Returns true if $x and $y have the same key/value pairs)
        ?>
        <br/><br/>
        <?php
            $x = array (
                "a" => "Apple",
                "b" => "Banana"
            );
            $y = array (
                "c" => "Cat",
                "d" => "Date"
            );
            var_dump($x === $y);
            // Identity (Returns true if $x and $y have the same key/value pairs in the same order and of the same types)
        ?>
        <br/><br/>
        <?php
            $x = array (
                "a" => "Apple",
                "b" => "Banana"
            );
            $y = array (
                "c" => "Cat",
                "d" => "Date"
            );
            var_dump($x != $y);
            // Inequality (Returns true if $x is not equal to $y)
            // != , <>
        ?>

        <br/><br/>
        <?php
            $x = array (
                "a" => "Apple",
                "b" => "Banana"
            );
            $y = array (
                "c" => "Cat",
                "d" => "Date"
            );
            var_dump($x !== $y);
            // Non-Identity (Returns true if $x is not identical to $y)
        ?>


    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
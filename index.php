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

        <h2>PHP datatypes</h2>
        1. String
        2. Integer
        3. Float/Double
        4. Boolean
        5. Array
        6. Object 
        7. Null
        8. Resource  <br/><br/>

        <u>1. String *Text (inside quotes) </u><br/>
        <?php
            $a = "This is a string";
            var_dump($a);
            echo "<br/>", "<br/>";
        ?>
        <u>2. Integer *Whole numbers (positive or negative) </u><br/>
        <?php 
            $x = 10;
            var_dump($x);
            echo "<br/>", "<br/>";
        ?>
        <u>3. Float/Double (Decimal numbers) </u><br/>
        <?php 
            $x = 28.36;
            var_dump($x);
            echo "<br/>", "<br/>";
        ?>
        <u>4. Boolean (Only two values: true or false) </u><br/>
        <?php
            $x = false;
            var_dump($x);
            echo "<br/>", "<br/>";
        ?>
        <u>5. Array (A group of values in one variable) </u><br/>
        <?php
            $x = array("Sazzad", "Sajedur", "Raihan");
            var_dump($x);
            echo "<br/>", "<br/>";
        ?>
        <u>6. Object *A variable that holds data and functions(from a class) </u><br/>
        <?php
            class student {
                function department (){
                    return "Physics";
                }
                function details (){
                    echo $this->department();
                }
            }

            $st = new student();
            $st->details();
            echo "<br/>", "<br/>";
        ?>
        <u>7. Null (A variable with no value) </u><br/>
        <?php
            //$x = "I love PHP";
            $x = null;
            var_dump($x);
            echo "<br/>", "<br/>";
        ?>
        <u>8. Resource (holds a reference to an external thing — like a file, database connection, or image) </u><br/>
        <?php
           // $file = fopen("example.txt", "r");
        ?>

        <?php echo "Working from home PC";?>

    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
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

        <h2>PHP Superglobals </h2><hr/><br/>
        <!-- $GLOBALS, $_SERVER, $_REQUEST, $_POST -->
        
        <!-- $GLOBALS is an array that contains all global variables -->
        <?php
            $x = 5;
            $y = 10;

            function sum(){
                $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
            }

            sum();
            echo $z;
        ?><br><hr><br>


        <!-- $_SERVER holds information about headers, paths, and script locations -->
        <?php
            // Returns the filename of the currently executing script
            echo $_SERVER['PHP_SELF']. "<br/>";
            // Returns the name of the host server (such as www.w3schools.com)
            echo $_SERVER['SERVER_NAME']. "<br/>";
            // Returns the path of the current script
            echo $_SERVER['SCRIPT_NAME']. "<br/>";
            // Returns the current browser information
            echo $_SERVER['HTTP_USER_AGENT']. "<br/>";
            // Returns the servers ip address 
            echo $_SERVER['SERVER_ADDR']. "<br/>";

        ?><br><hr><br>


        <!-- $_REQUEST contains submitted form data, and all cookie data, $_POST -->
         <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            Username: <input type="text" name="username" id="">
            <input type="submit" value="Submit">
         </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                // $name = $_REQUEST['username'];
                $name = $_POST['username'];
                if (empty($name)){
                    echo "<span style ='color:red'>Please fill out this field!</span>";
                } else {
                    echo "<span style ='color:green'>You have submitted Username: ".$name. "</span>";
                }
            }
        ?>





    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
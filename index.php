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

        <h2>PHP Form Validation </h2><hr/><br/>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <table>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Website: </td>
                    <td><input type="text" name="website"></td>
                </tr>
                <tr>
                    <td>Comment: </td>
                    <td><textarea name="comment" id="" rows="5" cols="50"></textarea></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" id="" value="Male"> Male
                        <input type="radio" name="gender" id="" value="Female"> Female
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit" name="submit"></td>
                </tr>
            </table>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = validate($_POST["name"]);
                $email = validate($_POST["email"]);
                $website = validate($_POST["website"]); 
                $comment = validate($_POST["comment"]);
                $gender = validate($_POST["gender"]);

                echo "Name: ".$name."<br>";
                echo "Email: ".$email."<br>";
                echo "Website: ".$website."<br>";
                echo "Comment: ".$comment."<br>";
                echo "Gender: ".$gender."<br>";
            }

            function validate($data){
                $data = trim($data); // trim() removes unwanted whitespace.
                $data = stripslashes($data); // stripslashes() removes backslashes (\).
                $data = htmlspecialchars($data); // htmlspecialchars() prevents XSS by converting special characters (<, >, etc.) into HTML entities.
                return $data;
            }


        ?>


    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
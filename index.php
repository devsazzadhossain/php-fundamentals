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

        <h2>Get multiple checkbox values in JavaScript</h2><br><hr/><br/>

        <script>
            function multicheck(){
                var length = document.myform.language.length;
                var get_value = "";

                for(i=0; i<length; i++){
                    var selected = document.myform.language[i].checked;
                    if(selected){
                        get_value += document.myform.language[i].value + ", ";
                    }
                }

                if(get_value !==""){
                    get_value = get_value.slice(0, -2);
                    var result = "You have selected : " + get_value;
                }   else{
                    var result = "You have not selected any language";
                }

                document.getElementById('state').innerHTML = result;
            }
            
        </script>

        <p id="state"></p>

        <form action="" method="post" name="myform" onsubmit="multicheck(); return false;">
            <table>
                <tr>
                    <td>Languages: </td>
                    <td>
                        <input type="checkbox" name="language" value="PHP">PHP
                        <input type="checkbox" name="language" value="JavaScript">JavaScript
                        <input type="checkbox" name="language" value="C++">C++
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Clear">
                    </td>
                </tr>
            </table>
        </form>

    </div>

    <footer class="footer-area">
        <a href="https://github.com/sazzadhossainmit"><?php echo "https://github.com/sazzadhossainmit";?></a>
    </footer>


</div>


</body>
</html>
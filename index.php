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
    
    form, table.output {
        background-color: #ffffff;
        border: 1px solid rgba(255, 255, 255, 0.3);
        padding: 25px;
        max-width: 500px;
        margin: auto;
        border-radius: 15px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        color: #000;
        margin-bottom: 30px;
    }

    table {
        width: 100%;
    }

    td {
        padding: 10px;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
    }

    input[type="radio"],
    input[type="checkbox"] {
        margin-right: 8px;
    }

    input[type="submit"],
    input[type="reset"] {
        padding: 8px 16px;
        margin-right: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007BFF;
        color: white;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover {
        background-color: #0056b3;
    }

</style>

<div class="php-coding">

    <div class="header">
        <h1><?php echo "PHP Fundamentals";?></h1>
    </div>

    <div class="main-content">

        <h2>Get data from a data table in PHP</h2><br><hr/><br/>

        <?php
            if(isset($_POST['submit'])){
                $name = $_POST['username'];
                $gender = $_POST['gender'];
                $hobby = $_POST['hobby'];
                $district = $_POST['district'];
        ?>

        <table class="output">
            <tr>
                <td colspan="2" align="center"><b>Output</b></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <?php  if($gender == "Male"){  ?>
                        <td><?php echo "Male";?></td>
                <?php } elseif($gender == "Female"){ ?>
                    <td><?php echo "Female";?></td>
                <?php } ?> 
            </tr>
            <tr>
                <td>Hobby</td>
                <td><?php echo implode(", ", $hobby);?></td>
            </tr>
            <tr>
                <td>District</td>
                <td><?php echo $district;?></td>
            </tr>
        </table>

        <?php } ?>
                
        <form action="" name="myform" method="post">
            <table>
                <tr>
                    <td>Name: </td>
                    <td>
                        <input type="text" name="username" required>
                    </td> 
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td>
                        <input type="radio" name="gender" value="Male" required>Male
                        <input type="radio" name="gender" value="Female">Female
                    </td> 
                </tr>
                <tr>
                    <td>Hobby: </td>
                    <td>
                        <input type="checkbox" name="hobby[]" value="Traveling">Traveling
                        <input type="checkbox" name="hobby[]" value="Photography">Photography
                        <input type="checkbox" name="hobby[]" value="Reading">Reading
                        <input type="checkbox" name="hobby[]" value="Others">Others
                    </td> 
                </tr>
                <tr>
                    <td>District: </td>
                    <td>
                        <select name="district" required>
                            <option value="">Select your district</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Khulna">Khulna</option>
                        </select>
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
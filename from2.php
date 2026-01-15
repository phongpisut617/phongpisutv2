<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f2f4f8;
        }
        .container{
            width:500px;
            margin:50px auto;
            background:#fff;
            padding:25px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }
        h2{
            text-align:center;
            color:#2c3e50;
        }
        .data{
            margin:10px 0;
        }
        .back{
            text-align:center;
            margin-top:20px;
        }
        .btn{
            padding:8px 20px;
            background:#3498db;
            color:#fff;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Result Information</h2>

    <?php
    if(isset($_POST['save'])){
        $user = $_POST['user'];
        $pwd = $_POST['Pwd'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $beverage = $_POST['beverage'];

        echo "<div class='data'><b>Username:</b> $user</div>";
        echo "<div class='data'><b>Password:</b> $pwd</div>";
        echo "<div class='data'><b>Address:</b> $address</div>";
        echo "<div class='data'><b>Gender:</b> $gender</div>";
        echo "<div class='data'><b>Beverage:</b> $beverage</div>";
    }else{
        echo "You didn't press save.";
    }
    ?>

    <div class="back">
        <form method="post" action="from1.php">
            <input class="btn" type="submit" value="Back">
        </form>
    </div>
</div>

</body>
</html>

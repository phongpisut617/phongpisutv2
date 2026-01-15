<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ponglert - Register</title>
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
        label{
            display:block;
            margin-top:10px;
            font-weight:bold;
        }
        input, textarea, select{
            width:100%;
            padding:8px;
            margin-top:5px;
            border:1px solid #ccc;
            border-radius:5px;
        }
        .inline{
            width:auto;
        }
        .btn-group{
            text-align:center;
            margin-top:20px;
        }
        .btn{
            padding:8px 20px;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }
        .btn-save{
            background:#3498db;
            color:#fff;
        }
        .btn-reset{
            background:#e74c3c;
            color:#fff;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Register Form</h2>

    <form name="frmRegis" method="post" action="from2.php">
        
        <label>Username</label>
        <input type="text" name="user" size="25" maxlength="25">

        <label>Password</label>
        <input type="password" name="Pwd" size="8" maxlength="8">

        <label>Address</label>
        <textarea name="address" cols="60" rows="5"></textarea>

        <label>Gender</label>
        <input class="inline" type="radio" name="gender" value="Male"> Male
        <input class="inline" type="radio" name="gender" value="Female"> Female

        <label>Hobby</label>
        <input class="inline" type="checkbox" name="Hobby[]" value="อ่านหนังสือ"> อ่านหนังสือ
        <input class="inline" type="checkbox" name="Hobby[]" value="ดูทีวี"> ดูทีวี

        <label>Beverage</label>
        <select name="beverage">
            <option value="IcedTea">ICED TEA</option>
            <option value="LemonTea">LEMON TEA</option>
            <option value="COFF">COFFEE</option>
        </select>

        <div class="btn-group">
            <input class="btn btn-save" type="submit" name="save" value="Save">
            <input class="btn btn-reset" type="reset" value="Cancel">
        </div>

    </form>
</div>

</body>
</html>

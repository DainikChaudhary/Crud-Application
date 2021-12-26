<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .form{
            width: 480px;
            height:400px;
            background-color:#ddd;
            text-align:center;
            display: block;
            margin-left:400px;
            border-radius:5px;
            padding:40px; 
            position: absolute;
        }
        .see{
            position: relative;
            margin-top:100px;
        }
        button{
            background:green;
            padding:5px;
            position:absoulte;
            border-radius:3px;
            cursor: pointer;
            font-family:vardana;
            font-size:20px;
            text-align:center;
            position: absolute;
        }
       

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form">
    <form action="/isd" method="POST">
    <div class="see">
    <h1>Fill The Data</h1>
    @csrf
        FIRSTNAME:-<input type="text" name="FIRSTNAME" id=""><br><br>
        <span style="color:red">@error('FIRSTNAME'){{$message}}@enderror</span><br>
        LASTNAME:-<input type="text" name="LASTNAME" id=""><br>
        <span style="color:red">@error('LASTNAME'){{$message}}@enderror</span><br>
        <button type="Submit">Submit</button>
        </div>
    </form>
    </div>
</body>
</html> 
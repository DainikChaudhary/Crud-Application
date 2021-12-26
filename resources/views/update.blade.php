<!DOCTYPE html>
<html lang="en">
<head> 
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Edit Data in Database</h1>

<form action="boom" method="POST">
@csrf
<input type="hidden" name="id" value={{$data['id']}}>
FIRSTNAME<input type="text" name="FIRSTNAME" value="{{$data['FIRSTNAME']}}"><br>
<span style="color:red">@error('FIRSTNAME'){{$message}}@enderror</span><br>
LASTNAME<input type="text" name="LASTNAME" value="{{$data['LASTNAME']}}"><br>
<span style="color:red">@error('LASTNAME'){{$message}}@enderror</span><br>
<button type='Submit'>Update</button>
</form>

<div class="btn">
<a href="/safe"><button style="background:skyblue; color:white" >ADD Data</button></a> 
</div>
      
</body>
</html>
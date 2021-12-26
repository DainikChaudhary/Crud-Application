<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Delete Data From Database</h1>

 
<table border="1px">
<tr>
    <th>ID</th>
    <th>FIRSTNAME</th>
    <th>LASTNAME</th>
    <th>Delete</th>
    <th>Edit</th>
    
</tr> 
@foreach($delta as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->FIRSTNAME}}</td>
    <td>{{$item->LASTNAME}}</td>
    <td><a href="list{{$item->id}}" class="btn btn-danger" >Delete</a></td>
    <td><a href="edit{{$item->id}}" class="btn btn-danger">Edit</a></td>
</tr>
@endforeach
</table>

</body>
</html>
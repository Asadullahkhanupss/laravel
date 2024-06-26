<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: black;
        color: white;
        
    }
    .bb{
        color: cyan;
      
    }
    .cc{
        text-align: center;
    }
</style>
<body>
    <h1 class="bb">User Table </h1>
    <table class="cc">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
        </tr>
        @foreach ($userdata as $item)
        
        <tr>
        <td>
            {{$item->id}}
        </td>
        <td>
            {{$item->name}}
        </td>
        <td>
            {{$item->email}}
        </td>
        <td>
            {{$item->password}}
        </td>
    </tr>
    @endforeach
    </table>
</body>
</html>
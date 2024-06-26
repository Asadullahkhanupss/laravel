<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
@if(session('success'))
    <div class="alert alert-success">
    {{session('success')}}
      </div>
      @endif
<form method="POST" action="submition">
  @csrf
  
      
    </div>

    <div class="container">
    <div class="mb-3 mt-5 ">
    <label for="exampleInputname" class="form-label">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputname" aria-describedby="name">
    <div id="name" class="</div>
  </div>
  <div class="mb-3 mt-5 >
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div> 
 
  <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</body>
</html>
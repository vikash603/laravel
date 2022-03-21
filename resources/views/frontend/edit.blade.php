<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>About form</h2>
  @foreach($data as $a)
  <form method="post" action="{{url('/')}}/update">
    
    @csrf

    <input type="hidden" value="{{$a->id}}" name="id">

    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$a->name}}">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$a->email}}">
    </div>
    <div class="form-group">
      <label for="about">about:</label>
      <input type="text" class="form-control" id="about" placeholder="Enter about" name="about" value="{{$a->about}}">
    </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  @endforeach
</div>

</body>
</html>

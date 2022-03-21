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
  <h2>About Table</h2>
              
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>About Us</th>
        <th>Action</th>
        <th>view</th>

      </tr>
    </thead>
    <tbody>

    	@foreach($about as $a)

      <tr>
        <td>{{$a->name}}</td>
        <td>{{$a->email}}</td>
        <td>{{$a->about}}</td>
        <td><a href="{{url('/')}}/edit/{{$a->id}}" class="btn btn-primary">Edit</a> <a href="{{url('/')}}/delete/{{$a->id}}" class="btn btn-danger">Delete</a></td>
        <td><a href="{{url('/')}}/show/{{$a->id}}" class="btn btn-primary">show</a></td>

      </tr>

      @endforeach
     
    </tbody>
  </table>
</div>

</body>
</html>

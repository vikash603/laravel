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
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>action</th>
        <th>view</th>
      </tr>
    </thead>
    <tbody>
      @foreach($contact as $c)
      <tr>
        <td>{{$c->name}}</td>
        <td>{{$c->email}}</td>
        <td>{{$c->password}}</td>
        <td><a href="{{url('/')}}/contact/edit/{{$c->id}}" class="btn btn-primary">Edit</a> <a href="{{url('/')}}/contact/delete/{{$c->id}}" class="btn btn-danger">Delete</a></td>
        <td><a href="" class="btn btn-primary">show</a></td>
      </tr>

      @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>

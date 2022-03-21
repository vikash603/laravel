<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Employee Table</h2>          
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Country</th>
        <th>Action</th>
      
      </tr>
    </thead>
    <tbody>
      @foreach($country as $c)
      <tr>
       <th> {{$c->country_id}}</th>
        <td>{{$c->country_name}}</td>
        <td><a href="{{url('/')}}/view/{{$c->country_id}}" class="btn btn">show</a></td>
        
        
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

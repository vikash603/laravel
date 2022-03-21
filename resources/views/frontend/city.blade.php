<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Black/Dark Table</h2>
  <p>The .table-dark class adds a black background to the table:</p>            
  <table class="table table-dark">

         
   
    
    <tbody>
      
      <tr>
       
        
        <td style="background-color: green;">City name</td>
        <td style="background-color: green;">Action</td>
        
      </tr>
  


    </tbody>

     <tbody>
      @foreach($city->city as $c)
      <tr>
       
        <td>{{$c->city_name}}</td>
        
        
        
      </tr>
     @endforeach


    </tbody>

   




        


  



  </table>
</div>

</body>
</html>

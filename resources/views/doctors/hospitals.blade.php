<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>hospitals</title>
</head>
<body>
    <h1>Hospitals</h1>
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>

            @if(isset($hospitals) && $hospitals->count()>0 )
               @foreach($hospitals as $hospital)
          <tr>
            <th scope="row">{{$hospital->id}}</th>
            <td>{{$hospital->name}}</td>
            <td>{{$hospital->address}}</td>
            <td><a href="{{route('hospital.doctors',$hospital->id )}}" class="btn btn-success">view doctors
              <a href="{{route('hospital.delelte',$hospital->id )}}" class="btn btn-danger">delete</a>
            </td>
              
          </tr>
                @endforeach()
             @endif
          
        </tbody>
      </table>
 
</body>
</html>
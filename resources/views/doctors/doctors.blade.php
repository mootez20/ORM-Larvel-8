<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>doctors</title>
</head>
<body>
   <h1>Doctors</h1>
   <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">title</th>
          </tr>
        </thead>
        <tbody>

            @if(isset($doctors) && $doctors->count()>0 )
               @foreach($doctors as $doctor)


          <tr>
            <th scope="row">{{$doctor->id}}</th>
            <td>{{$doctor->name}}</td>
            <td>{{$doctor->title}}</td>
          </tr>
               @endforeach
           @endif
       
        </tbody>
      </table>
</body>
</html>
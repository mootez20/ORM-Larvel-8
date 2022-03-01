<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>article</title>
</head>
<body>
    <h1>Récuperer l'image depuis post</h1>
    <h1> <a href="{{$post->image->path}}" >{{$post->content}}</a></h1>
    <h1> <a href="{{$linkedIn->image->path}}" >{{$linkedIn->content}}</a></h1>
 
</body>
</html>
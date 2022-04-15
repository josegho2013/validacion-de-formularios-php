<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validacion</title>
</head>
<body>

<form method="post" action="guardar"></form>

<!-- se usa siempre en los formularios @csrf -->
@csrf
    

<label for="nombre">nombre</label>
<input type="text" name="nombre">

<label for="email">nombre</label>
<input type="email" name="email">

<input type="submit" name="" id="" value="enviar">
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Listar todos los usuarios</h1>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>NOMBRES</td>
                    <td>APELLIDOS</td>
                    <td>CORREO</td>
                    <td>DIRECCION</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->names }}</td>
                    <td>{{ $user->last_names }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table> 
    </div>

</body>
</html>
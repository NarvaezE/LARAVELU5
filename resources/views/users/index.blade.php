<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Usuarios del sistema</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Action</th>

          </tr>

          <tr>
            @foreach ($users as $user )
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <a href="{{url('users/'.$user->id)}}">Editar</a>
                <br>

            @endforeach


          </tr>
    </table>
</body>
</html>

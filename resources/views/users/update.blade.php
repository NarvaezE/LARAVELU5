<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="http://127.0.0.1:8000/users/">
        @csrf <!-- Genera un token -->
        <label>Nombre</label>
        <input type="text" value="{{$user->name}}" name="name">
        <br>
        <label>Email</label>
        <input type="email" value="{{$user->email}}" name="email">
        <br>

        <label>Phone number</label>
        <input type="number" value="{{$user->phone_number}}" name="phone">
        <br>
        <button>
          Editar
        </button>
      </form>
</body>
</html>

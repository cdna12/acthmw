<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $superpower->name }}</title>
</head>
<body>
   <h1>{{ $parent->name }}<h1>
    <p>{{ $parent->description }}</p> 

    <a href="{{ route('parents.edit',$parent->id) }}">Editar</p>
    <!---<a href="{{ route('superpowers.destroy',$superpower->id) }}">Delete</p>--->

    <form action="{{ route('parents.edit','$parent->id) }}" method="post">
        @method('delete')
        @csrf
        <button type="submit" onlick="return  confirm('Are you sure you want to deletethis record?')">Delete</button>
    </form>
</body>
</html>
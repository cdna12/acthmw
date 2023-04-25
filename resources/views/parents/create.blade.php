<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Parent</title>
</head>
<body>
   <h1>Create Parent</h1> 
   <form action="{{ route('superpowers.store') }}" method="post">
        @csrf

        <label form="name">Name</label><br>
        <input type="text" name="name">

        <br><br>

        <label for="gender">Gender</label><br>
        <input type="text" name="gender">

        <button type="submit">Create Parent</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parents</title>
</head>
<body>
    <h1 style="text-align: center">PARENTS</h1>

    <table style="with: 100%; text-align: center;">
        <thead>
            <tr>
                <th style="with : 30%;">ID</th>
                <th style="with : 30%;">Name</th>
                <th style="with : 30%;">Description</th>
            </tr>
        </thead> 
        
        <tbody>
            @forsel($parents as $parent)
            <tr>
                <td>{{ $parent->id}}</td>
                    <td>
                     <a href="{{ route('parents.show',$parent-id) }}">{{ $parent->name }}</a>
                    </td>
                <td>{{ $parent->description }}</td>
            </tr>
            @empty
            <p>There/re no parents.</p>
            @endforelse
        </tbody>
    </table>

</body>
</html>
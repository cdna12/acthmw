<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superpowers</title>
</head>
<body>
    <h1 style="text-align: center">SUPERPOWERS</h1>

    <table style="with: 100%; text-align: center;">
        <thead>
            <tr>
                <th style="with : 30%;">ID</th>
                <th style="with : 30%;">Name</th>
                <th style="with : 30%;">Description</th>
            </tr>
        </thead> 
        
        <tbody>
            @forsel($superpowers as $superpower)
            <tr>
                <td>{{ $superpower->id}}</td>
                    <td>
                     <a href="{{ route('superpowers.show',$superpower-id) }}">{{ $superpower->name}}</a>
                    </td>
                <td>{{ $superpower->description}}</td>
            </tr>
            @empty
            <p>There/re no superpowers.</p>
            @endforelse
        </tbody>
    </table>

</body>
</html>
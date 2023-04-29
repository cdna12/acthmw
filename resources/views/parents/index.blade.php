@extends('layouts.master')
@section('botones')
<div class="row justify-content-center mb-4">
    <div class="col">
    </div>
</div>
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
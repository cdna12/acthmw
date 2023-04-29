@extends('layouts.master')
@section('botones')

<div class="row justify-content-center mb-4">
    <div class="col-12 col-md-9 col-lg-6">
      <a href="{{ route('superpowers.index'}}" class="btn btn-primary"> 
    </div>
</div>

@endsection
@section('content')
<div class="row justify-content-center mb-4">
    <div class="col-12 col-md-9 col-lg-6">
        <p>{{ $superpower->description }}</p>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-12 col-md-9 col-lg-6 text-end">
        <ul class="list-in-line">
            <li class="list-inline-item">
                <a href="{{ route('parents.edit',$parent->id) }}">Editar</p>
                <!---<a href="{{ route('superpowers.destroy',$superpower->id) }}">Delete</p>--->
            </li>
            <li class="list-inline-item">
                <form action="{{ route('parents.destroy','$parent->id) }}">Delete</p>
                @method('delete')
                @csrf
                <button type="submit" onlick="return  confirm('Are you sure you want to deletethis record?')">Delete</button>
                </form>
            </li>
        </ul>
    </div>
</div>

@endsection
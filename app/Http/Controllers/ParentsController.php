<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parents;
use Illuminate\Support\Facades\Auth;

class ParentsController extends Controller
{
    public function index()
    {
        $superpowers = SuperPowers::where('user_id',Auth::id())
            ->where('active',1)
            ->select('id','name','gender')
            ->get();
        return view('parents.index',compact('parents'));
    }

    public function create()
    {
        return view('parents.create');
    }

    public function store(Request $request)
    {
        Parents::create((
            'user_id'-> Auth::id()
            //'name'=> $request->name,
            //'gender'=>$request->gender
        ));
        return redirect()->route("parents.index");
    }

    public function show(string $id)
    {
       
    }

    public function edit(string $id)
    {
        $parents = Parents::where('user_id',Auth::id())
        ->where('id',$id)
        ->where('active',1)
        ->select('id','name','gender')
        ->firstOfFail();
    return view('parents.edit',compcat('parent'));
    }

    public function update(Request $request,string $id)
    {
        $superpowers = SuperPowers::where('user_id',Auth::id())
        ->where('id',$id)
        ->where('active',1)
        ->select('id','name','description')
        ->firstOfFail();

        $superpowers->update([
            'name'=> $request->name,
            'description'=>$request->description
        ]);

    }

    public function destroy(string $id)
    {
        
    }
}




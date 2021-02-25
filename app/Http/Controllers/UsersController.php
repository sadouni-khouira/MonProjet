<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $users = User::get()->all();
       $users  = User::latest()->paginate(3);
        return view('user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creatUSER');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
       request()->validate([
            'name'=>['required'],
            'email' => ['required','email'], 
            'password'=>['required','confirmed','min:8'],
             'password_confirmation'=>['required'],
        ]);
        $users = User::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=> password_hash(request('password'), PASSWORD_DEFAULT),
            
          ]);
        
        return redirect()->route('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view ('editUSER', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $attributes = request()->validate([
            'name'=>['required'],
            'email' => ['required','email'], 
        ]);
        $users = User::findOrFail($id);
        $users->update($attributes);
        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users');
    }
/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPASSE($id)
    {
        $users = User::findOrFail($id);
        return view ('editPASSE', compact('users'));
    }

    /** (Request $request, $id)
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePASSE($id)
    {
        $attributes = request()->validate([
            'password'=>['required','confirmed','min:4'],
            'password_confirmation'=>['required'],
        ]);
        $users = User::findOrFail($id);
        $users->update([   
            'password'=> password_hash(request('password'), PASSWORD_DEFAULT),
            
          ]);
        return redirect()->route('users');
    }

}

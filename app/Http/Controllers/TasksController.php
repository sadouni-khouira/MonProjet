<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks  = Task::latest()->paginate(4);

      // $tasks = Task::get()->all();
        return view('task', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'nom' => ['required'],
            'email' => ['required','email'], 
            'tel' => ['required'],
            'date_de_reservation' => ['required',"date_format:d/m/Y" ,'ends_with:2021'],
            'heure_de_reservation' => ['required'],
            'nbr_de_personne' => ['required','integer'],
            'message' => ['required'],
        ]);
        $tasks = Task::create($attributes);
        return redirect()->route('tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        //dd('show');
         $tasks = Task::findOrFail($id);
            return view ('show', compact('tasks'));
          
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasks = Task::findOrFail($id);
        return view ('edit', compact('tasks'));
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    { //      'ends_with:2021',  'date_format:d/m/y']
        $attributes = request()->validate([
            'nom' => ['required'],
            'email' => ['required','email'], 
            'tel' => ['required'],
            'date_de_reservation' =>['required','date_format:d/m/Y','ends_with:2021'],
            'heure_de_reservation' => ['required'],
            'nbr_de_personne' => ['required','integer'],
            'message' => ['required'],
        ]);
        $tasks = Task::findOrFail($id);
        $tasks->update($attributes);
        return redirect()->route('tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks');
    }
 

}


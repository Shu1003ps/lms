<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Models\Goal;

class LearningController extends Controller
{
    public function home(Goal $goal)
    {
        return view('/home')->with(['goals'=>$goal->getPaginateByLimit()]);
    }
    
    
    public function index(Record $record)
    {
        return view('records/index')->with(['records' => $record->getPaginateByLimit()]);
    }
    
    public function show(Goal $goal)
    {
        return view('/goals/show')->with(['goal'=>$goal]);
    }
    
    public function goal_setting()
    {
        return view('/goals/goals');
    }
    
    public function stopwatch()
    {
        return view('/stopwatch');
    }
    
}

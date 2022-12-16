<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class LearningController extends Controller
{
    
    
    
    public function index(Record $record)
    {
        return $record->get();
    }
    
}

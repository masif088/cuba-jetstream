<?php

namespace App\Http\Controllers;

use App\Models\LearningPath;
use Illuminate\Http\Request;

class LearningPathController extends Controller
{
    public function index(){
        $learningpaths = LearningPath::orderByDesc('updated_at')->get()->take(10);
//        dd($learningpaths);
        return view('pages.learning-path.index',compact('learningpaths'));
    }
    public function create(){
        return view('pages.learning-path.create');
    }
}

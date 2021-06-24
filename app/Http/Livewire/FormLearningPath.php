<?php

namespace App\Http\Livewire;

use App\Models\LearningPath;
use App\Models\StudyProgram;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormLearningPath extends Component
{
    use WithFileUploads;

    public $action;
    public $learningpath;
    public $file;
    public $ps;

    public function mount(){
        $this->ps=StudyProgram::whereFacultyId(auth()->user()->faculty->id)->get();
    }

    public function render()
    {
        return view('livewire.form-learning-path');
    }

    public function create()
    {
        $this->learningpath['slug']=Str::slug($this->learningpath['title']);
LearningPath::create($this->learningpath);
    }
}

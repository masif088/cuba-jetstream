<?php

namespace App\Http\Livewire;

use App\Models\StudyProgram;
use Livewire\Component;

class FormStudyProgram extends Component
{
    public $action;
    public $ps;
    public function render()
    {
        return view('livewire.form-study-program');
    }
    public function create(){
        StudyProgram::create(['name'=>$this->ps,'faculty_id'=>auth()->user()->faculty->id]);
    }
}

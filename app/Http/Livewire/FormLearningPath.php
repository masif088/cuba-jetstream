<?php

namespace App\Http\Livewire;

use App\Models\LearningPath;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormLearningPath extends Component
{
    use WithFileUploads;

    public $action;
    public $learningpath;
    public $file;

    public function render()
    {
        return view('livewire.form-learning-path');
    }

    public function create()
    {
LearningPath::create($this->learningpath);
    }
}

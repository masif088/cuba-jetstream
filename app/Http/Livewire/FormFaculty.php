<?php

namespace App\Http\Livewire;

use App\Models\College;
use App\Models\Faculty;
use App\Models\User;
use Livewire\Component;

class FormFaculty extends Component
{
    public $user;
    public $action;
    public function render()
    {
        return view('livewire.form-faculty');
    }
    public function create(){
        $user=User::create($this->user);
        Faculty::create(['user_id'=>$user->id,'college_id'=>auth()->user()->college->id,'name'=>$user->name]);
    }
}

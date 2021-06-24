<?php

namespace App\Http\Livewire;

use App\Models\College;
use App\Models\User;
use Livewire\Component;

class FormCollege extends Component
{
    public $action;
    public $college;
    public $user;

    public function mount(){

    }

    public function render()
    {
        return view('livewire.form-college');
    }
    public function create(){
        $user=User::create($this->user);
        College::create(['user_id'=>$user->id,'name'=>$user->name]);
    }
}

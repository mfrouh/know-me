<?php

namespace App\Http\Livewire;

use App\question;
use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\WithPagination;

class Createquestion extends Component
{
    use WithPagination;

    public $answer=null;
    public function mount($answer=null)
    {
     $this->answer=$answer;
    }
    public function render()
    {
        return view('livewire.createquestion',[
            'answer'=>$this->answer,
            'questions'=>question::paginate(1),
        ]);
    }
}

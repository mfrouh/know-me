<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Editquestion extends Component
{
    public $answer=null;
    public $question;
    public function mount($answer=null,$question)
    {
     $this->answer=$answer;
     $this->question=$question;
    }
    public function render()
    {
        return view('livewire.editquestion',[
            'answer'=>$this->answer,
            'question'=>$this->question,
            ]);
    }
}

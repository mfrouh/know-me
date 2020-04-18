<?php

namespace App\View\Components;

use Illuminate\View\Component;

class publicquestion extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $question;
    public $k;
    public function __construct($question,$k)
    {
        $this->question=$question;
        $this->k=$k;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.publicquestion',
        [
            'question'=>$this->question,
            'k'=>$this->k,
        ]);
    }
}

<?php

class Question
{

    public static function Select($name,$options,$class=null,$id=null)
    {
        return view('input.selectone',compact(['class','name','options','id']));
    }
    public static function Input($name,$type,$class=null,$id=null)
    {
        return view('input.input',compact(['class','name','type','id']));
    }
    public static function Create($answer)
    {
        if($answer!=null)
        {
          return view('input.question',compact('answer'));
        }
        else
        {
          return;
        }
    }
    public static function Edit($question,$answer=null)
    {
        if($question!=null)
        {
          if ($answer==null) {
            $answer=self::Answer($question);
          }
          else
          {
            $answer=$answer;
          }
          return view('input.editquestion',compact(['question','answer']));
        }
        else
        {
          return;
        }
    }
    public static function Answer($question)
    {
        if($question->option4==null && $question->option3==null )
        {
         return 2;
        }
        elseif($question->option3!=null && $question->option4==null )
        {
          return 3;
        }
        elseif($question->option3!=null && $question->option4!=null )
        {
          return 4;
        }
    }
    public static function CorrectAnswer($questions,$request)
    {
        $total=0;
        $score=0;
         foreach ($questions as $key => $question) {
            $total+=1;
            if (isset($request[$question->id]) && $question->correctanswer==$request[$question->id]) {
               $score+=1;
            }
         }
         return ($score/$total)*100;
    }
}

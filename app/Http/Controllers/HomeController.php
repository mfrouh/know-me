<?php

namespace App\Http\Controllers;

use App\answer;
use App\question;
use App\User;
use Illuminate\Http\Request;
use Question as GlobalQuestion;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function user($user)
    {
        $questions=question::where('user_id',$user)->get();
        $user=User::findorfail($user);
        $answer=answer::where('author_id',$user->id)->where('friend_id',auth()->user()->id)->first();
        if(!$answer){
            return view('question.publicquestion',compact(['questions','user']));
        }
        else
        {
            return view('question.result',compact('answer'));
        }
    }
    public function answer(Request $request)
    {
        $questions=question::where('user_id',$request->user_id)->get();
        $answer=new answer();
        $answer->author_id=$request->user_id;
        $answer->friend_id=auth()->user()->id;
        $answer->result=GlobalQuestion::CorrectAnswer($questions,$request->except('_token'));
        $answer->save();
        return view('question.result',compact('answer'));
    }
    public function answers()
    {
        $answers= auth()->user()->answers()->get();
        return view('question.answer',compact('answers'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Answer;

class AnswersController extends Controller
{
    public function index()
    {
        
        $answer = Answer::all();
        

        return response()->json($answer);
    }
 
    public function show(Answer $answer)
    {
        return $question;
    }
 
    public function store(Request $request)
    {
        $this->validate($request, [
            'true_answer' => 'required|max:30',
            'true_answer1' => 'required|max:30',
            'wrong_answer' => 'required|max:30',
            'wrong_answer1' => 'required|max:30',
            'wrong_answer2' => 'required|max:30'
        ]);
        $answer = Answer::create($request->all());
 
        return response()->json($answer, 201);
    }
 
    public function update(Request $request, Answer $answer)
    {
        $answer->update($request->all());
 
        return response()->json($answer, 200);
    }
 
    public function delete(Answer $answer)
    {
        $answer->delete();
 
        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;


class QuestionsController extends Controller
{
    public function index()
    {
        
        $question = Question::all();
        

        return response()->json($question);
    }
 
    public function show(Question $question)
    {
        return $question;
    }
 
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:30',
            'question' => 'required|max:100',
        ]);
        $question = Question::create($request->all());
 
        return response()->json($question, 201);
    }
 
    public function update(Request $request, Question $question)
    {
        $question->update($request->all());
 
        return response()->json($question, 200);
    }
 
    public function delete(Question $question)
    {
        $question->delete();
 
        return response()->json(null, 204);
    }
}

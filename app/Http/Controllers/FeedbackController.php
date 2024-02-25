<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback; 

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback');
    }

    public function connect(Request $request)
    {
        // require inbult function
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'feedback' => 'required',
        ]);
          
        // object create of model name 
        // ffetch data from user
        $feedback = new Feedback();      
        $feedback->name = $request->input('name');
        $feedback->title = $request->input('title');
        $feedback->feedback = $request->input('feedback');
        $feedback->save();

        return redirect('/set'); 
    }

    public function show()
    {

        // get all the data from feedbac table and store in feedbac varialble
        $feedback = Feedback::all();    
        return view('formview', compact('feedback'));   
        //  compact function conert into arrayy
    }
   
    
    public function delete($ID){
        feedback::find($ID)->delete();
        return redirect()->back();
    }
     
    public function edit($ID){
       $feedbacks = feedback::find($ID);
        return view('edit' , compact('feedbacks'));
       
    }
  
    public function updatefeed(Request $req , $ID){
        $feedback = Feedback::find($ID);      
        $feedback->name = $req->input('name');
        $feedback->title = $req->input('title');
        $feedback->feedback = $req->input('feedback');
        $feedback->update();

        return redirect('/set'); 
    }
     
   

}


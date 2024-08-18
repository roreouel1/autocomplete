<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{

    public function index(){

     $subs = Subject::orderBy('name','asc')->get();
      return view('subjects.list',compact('subs'));
    }

    
    public function create(){
        return view('subjects.form');
    }


    public function store(Request $request){
        $validated= $request->validate([
            'name'=>'required'
          ]
           ,[
            'name.required'=>' Please add subject'
           ]);


           $sub = new Subject;
           $sub->name = $validated['name'];
           $sub->st = $request->st;

           $sub->save();

           toastr()->success('Subject has been added successfully', 'Congrats');
           return back();

    }

    public function show(){
        //
    }
    
    public function destroy($id){

       $sub = Subject::findorfail($id);
       $sub->delete();

       toastr()->success('Subject has been deleted successfully', 'Congrats');
       return back();
    }

}

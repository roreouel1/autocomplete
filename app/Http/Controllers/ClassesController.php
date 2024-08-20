<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;


class ClassesController extends Controller
{
    
    public function index(){

        $classes = Classes::orderBy('name','asc')->get();
         return view('classes.list',compact('classes'));
       }
   
       
       public function create(){
           return view('classes.form');
       }
   
   
       public function store(Request $request){
           $validated= $request->validate([
               'name'=>'required'
             ]
              ,[
               'name.required'=>' Please add class'
              ]);
   
   
              $sub = new Classes;
              $sub->name = $validated['name'];
              $sub->st = $request->st;
   
              $sub->save();
   
              toastr()->success('Class has been added successfully', 'Congrats');
              return back();
   
       }
   
       public function show(){
           //
       }
       
       public function destroy($id){
   
          $sub = Classes::findorfail($id);
          $sub->delete();
   
          toastr()->success('Class has been deleted successfully', 'Congrats');
          return back();
       }
   
   }
   
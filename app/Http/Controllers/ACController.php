<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use Illuminate\Http\Request;



class ACController extends Controller
{

   public function index(){
     return view('form');
   }

   


   public function store(Request $request){
   //
    }



   
   //delete record
   public function destroy($clss){

    //
   }



   public function show(){
    //
   }


   // The autocomplete code 
   public function autoComplete(Request $request)
{

    $query =$request->get('search', '');  
    $datas= FormData::orderby('name','asc')
                                           ->Where('name','LIKE',$query. '%') 
                                           ->limit(10)->get();
    $response=array();
     foreach ($datas as $data) {
       
        $response[]=array('value'=>$data->name,'pid'=>$data->pid,'loc'=>$data->loc,'oc'=>$data->oc,'age'=>$data->age,'dob'=>$data->dob);
    }
    if(count($response))
          
    echo json_encode($response);

   else
   return ['value'=>'No Result Found'];
    }
} 



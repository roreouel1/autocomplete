<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\Timetable;
use App\Models\Classes;
use App\Models\Times;

use Auth;
use Barryvdh\DomPDF\Facade\Pdf;


class TimetableController extends Controller
{

    protected $sender;

    public function __construct(){
    
        $this->sender = [];
    }

   public function index(){

    $data = Timetable::select('clss')
    ->distinct()
    ->get();

   return view('timetable.list_tt',compact('data'));
   }

   
   //pdf data populator
   public function edit($clss)
   {

       $timetable = Timetable::
             orderBy('day')
           ->orderBy('timeslot')
           ->get()
           ->groupBy('day');

       $times = Times::all();
       $this->sender = [
           'title' => 'Sample Timetable',
           'timetable' => $timetable,
           'times' => $times,
       ];

       // Pass the 'clss' parameter to the generatePDF method
       return $this->generatePDF();
   }

   //pdf generator
   public function generatePDF()
   {      
       $pdf = PDF::loadView('print_sheet.tt_view', $this->sender);
       $pdf->setPaper('A4', 'landscape');

       return $pdf->stream('timetable.pdf');
   }
   public function create(){
    $times = Times::all();
    $classes = Classes::all();
    return view('timetable.generator',compact('times','classes'));
   }

   public function store(Request $request){


    $class = $request->input('clss');

    $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];

    foreach ($days as $dayIndex => $day) {
        for ($slot = 1; $slot <= 7; $slot++) {
            $timeSlot = "r" . ($dayIndex + 1) . "c" . $slot;
            $subject = $request->input($timeSlot);

            if ($subject) {
                Timetable::insert([
                    'day' => $day,
                    'timeslot' => $timeSlot,
                    'subject' => $subject,
                ]);
            }
        }
    }

    return redirect()->back()->with('success', 'Timetable saved successfully!');
   }
   
   //delete record
   public function destroy($clss){


 // Delete records matching both $clss and $scid
 $deleteCount = Timetable::where('clss', $clss)
                          ->delete();

 if ($deleteCount > 0) {
     toastr()->success('Timetable was deleted successfully!', 'Success');
 } else {
     toastr()->error('No records found to delete.', 'Error');
 }

 return back();
   }



   public function show(){
    //
   }

   public function display(){

    $data =Timetable::select('clss','scid')
    ->distinct()
    ->get();

   return view('timetable.list_tt',compact('data'));
   }

   public function autoComplete(Request $request)
{

    $query =$request->get('search', '');  
    $students= Subject::orderby('name','asc')->select('name') 
                                                                     ->Where('name',  'LIKE',$query. '%') 
                                                                     ->limit(10)->get();


    $response=array();
     foreach ($students as $student) {
       
        $response[]=array('value'=>$student->name);
    }
    if(count($response))
          
    echo json_encode($response);

   else
   return ['value'=>'No Result Found'];
    }
} 



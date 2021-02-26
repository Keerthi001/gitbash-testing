<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Excel;
class ExportExcelController extends Controller
{
    //
    function index()
    {
      $active_class = 'results';
         $data['active_class']       = 'quiz results';
         $records = DB::table('users')
                   ->join('quizresults','quizresults.user_id', '=', 'users.id')
                   ->select(['quizresults.slug','quizresults.marks_obtained','quizresults.subject_title','quizresults.subject_analysis','quizresults.percentage','quizresults.exam_status','quizresults.created_at','users.username','users.email','users.phone' ])
                   ->get();
                   return view('admin/quizresults')->with("records", $records, $data, $active_class);
    }

    function excel()
    {
      $records = DB::table('users')
                ->join('quizresults','quizresults.user_id', '=', 'users.id')
                ->select(['quizresults.slug','quizresults.marks_obtained','quizresults.subject_title','quizresults.subject_analysis','quizresults.percentage','quizresults.exam_status','quizresults.created_at','users.username','users.email','users.phone' ])
                ->get();
     $customer_array[] = array('User Name', 'Email', 'Marks Obtained', 'Percentage', 'Exam Status', 'Subject Title');
     foreach($records as $record)
     {
      $customer_array[] = array(
       'User Name'  => $record->username,
       'Email'   => $record->email,
       'Marks Obtained'    => $record->marks_obtained,
       'Percentage'  => $record->percentage,
       'Exam Status'   => $record->exam_status,
       'Subject Title'   => $record->subject_title
      );
     }
     Excel::create('Customer Data', function($excel) use ($customer_array){
      $excel->setTitle('Customer Data');
      $excel->sheet('Customer Data', function($sheet) use ($customer_array){
       $sheet->fromArray($customer_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }
}

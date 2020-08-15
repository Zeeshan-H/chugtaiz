<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ApiModel;
use DB;

class DisplayController extends Controller
{
    //
    public function getAllStudents() {

        // $data = DB::table('students')->join('studentdetails', 'memid', '=', 'id');
        $students = DB::table('students')
        ->select('students.id','students.fname','studentdetails.stdAddress')
        ->join('studentdetails','studentdetails.memid','=','students.id')
        ->get();
        // $students = ApiModel::get()->toJson(JSON_PRETTY_PRINT);
         return response($students, 200);

    }

    public function getstudent($id) {

        $students = DB::table('students')
        ->select('students.id','students.fname','studentdetails.stdAddress')
        ->join('studentdetails','studentdetails.memid','=','students.id')
        ->where('students.id', '=', $id)
        ->get();

        if($students == "[]") 
        return response(0, 200); 
        else
        return response($students, 200);


    }
}

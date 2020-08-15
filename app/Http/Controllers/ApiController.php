<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ApiModel;
use App\DetailsModel;

class ApiController extends Controller
{
    //

    public function create(Request $request) {

        $students = new ApiModel();

        $details = new DetailsModel();

        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');

        $details->stdAddress = $request->input('stdAddress');
        $details->memid = $request->input('memid');

        $students->save();

        $details->save();

        $result = array($students, $details);

        return response()->json($result);

    }


}

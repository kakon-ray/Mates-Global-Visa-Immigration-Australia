<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admissionform;

class AdmissionformController extends Controller
{
    public function create(Request $request){

        $request->validate([
            'admission_name' => 'required|regex:/^[a-z A-Z]+$/u|max:25|min:3',
            'admission_phone' => 'required|numeric',
            'admission_from_country' => 'required',
            'admission_study_country' => 'required',
            'admission_qualification' => 'required',
            'admision_course' => 'required',
        ]);


        $newvariable = new Admissionform;
        $newvariable ->admission_name = $request->admission_name ;
        $newvariable ->admission_phone = $request->admission_phone ;
        $newvariable ->admission_email = $request->admission_email ;
        $newvariable ->admission_from_country = $request->admission_from_country ;
        $newvariable ->admission_study_country = $request->admission_study_country ;
        $newvariable ->admission_qualification = $request->admission_qualification ;
        $newvariable ->admision_course = $request->admision_course ;
        $newvariable ->save();
        return redirect()->route('educationadmission')->with('status', 'Application submitted successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Events\NewStudentHasRegistered;
use Illuminate\Http\Request;

use App\Miseven;

class MisevenController extends Controller
{
    public function index() {
        $students = Miseven::paginate(100);
        return view('layouts.studentApplications.index', compact('students'));
    }
    public function create (){
        return view('layouts.studentApplications.create');
    }

    public function store (Request $mi){

        $mi->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:40|min:3',
            'email' => 'required|max:40',
            'phone_number' => 'required|digits_between:6,16',
            'age' => 'required|numeric|max:55|min:19',
            'marital_status' => 'required|numeric',
            'facebook' => 'nullable|max:40|alpha_num',
            'nationality' => 'required|max:40',
            'experience_year' => 'required|numeric',

            'university' => 'required|regex:/^[a-z A-Z]+$/u|max:40',
            'certificate' => 'required|max:40',
            'specialized' => 'nullable|max:40',
            'passing_year' => 'required|numeric',

            'company_one' => 'nullable|max:40',
            'position_one' => 'nullable|max:40',
            'experience_one' => 'nullable|numeric',
            'company_two' => 'nullable|max:40',
            'position_two' => 'nullable|max:40',
            'experience_two' => 'nullable|numeric',
            'company_three' => 'nullable|max:40',
            'position_three' => 'nullable|max:40',
            'experience_three' => 'nullable|numeric',

            'ielts' => 'nullable',
            'ielts_reading' => 'nullable|numeric',
            'ielts_speaking' => 'nullable|numeric',
            'ielts_writing' => 'nullable|numeric',
            'ielts_listening' => 'nullable|numeric',
            'ielts_overall_score' => 'nullable|numeric',
            'pte' => 'nullable',
            'pte_reading' => 'nullable|numeric',
            'pte_speaking' => 'nullable|numeric',
            'pte_writing' => 'nullable|numeric',
            'pte_listening' => 'nullable|numeric',
            'pte_overall_score' => 'nullable',

            'mi_day' => 'nullable',
            'mi_time' => 'nullable',

        ]);


        $miveriable = new Miseven();
        $miveriable->name = $mi->name ;
        $miveriable->email = $mi->email;
        $miveriable->phone_number = $mi->phone_number;
        $miveriable->age = $mi->age;
        $miveriable->marital_status = $mi->marital_status;
        $miveriable->facebook = $mi->facebook;
        $miveriable->nationality = $mi->nationality;
        $miveriable->experience_year = $mi->experience_year;

        $miveriable->university = $mi->university;
        $miveriable->certificate = $mi->certificate;
        $miveriable->specialized = $mi->specialized;
        $miveriable->passing_year = $mi->passing_year;

        $miveriable->company_one = $mi->company_one;
        $miveriable->position_one = $mi->position_one;
        $miveriable->experience_one = $mi->experience_one;
        $miveriable->company_two = $mi->company_two;
        $miveriable->position_two = $mi->position_two;
        $miveriable->experience_two = $mi->experience_two;
        $miveriable->company_three = $mi->company_three;
        $miveriable->position_three = $mi->position_three;
        $miveriable->experience_three = $mi->experience_three;

        $miveriable->ielts = $mi->ielts;
        $miveriable->pte = $mi->pte;
        $miveriable->ielts_reading = $mi->ielts_reading;
        $miveriable->ielts_speaking = $mi->ielts_speaking;
        $miveriable->ielts_writing = $mi->ielts_writing;
        $miveriable->ielts_listening = $mi->ielts_listening;
        $miveriable->ielts_overall_score = $mi->ielts_overall_score;
        $miveriable->pte_reading = $mi->pte_reading;
        $miveriable->pte_speaking = $mi->pte_speaking;
        $miveriable->pte_writing = $mi->pte_writing;
        $miveriable->pte_listening = $mi->pte_listening;
        $miveriable->pte_overall_score = $mi->pte_overall_score;

        $miveriable->mi_day = $mi->mi_day;
        $miveriable->mi_time = $mi->mi_time;
        $miveriable->save();

        // Event fire
        event(new NewStudentHasRegistered($miveriable));


        return redirect()->route('index')->with('status', 'Application submitted successfully!');
    }
}

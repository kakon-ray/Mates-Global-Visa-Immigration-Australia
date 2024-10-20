@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h3 class="text-capitalize">Ielts Student list</h3>
                <table class="table table-sm  table-bordered table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Age</th>
                        <th scope="col">Marital status</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">Experience year</th>
                        <th scope="col">University</th>
                        <th scope="col">Certificate</th>
                        <th scope="col">Specialized</th>
                        <th scope="col">Passing year</th>
                        <th scope="col">Company one</th>
                        <th scope="col">Position one</th>
                        <th scope="col">Experience one</th>
                        <th scope="col">Company two</th>
                        <th scope="col">Position two</th>
                        <th scope="col">Experience two</th>
                        <th scope="col">Company three</th>
                        <th scope="col">Position three</th>
                        <th scope="col">Experience three</th>

                        <th scope="col">IELTS</th>
                        <th scope="col">IELTS Reading</th>
                        <th scope="col">IELTS Speaking</th>
                        <th scope="col">IELTS Writing</th>
                        <th scope="col">IELTS Listening</th>
                        <th scope="col">IELTS Overall Score</th>

                        <th scope="col">PTE</th>
                        <th scope="col">PTE Reading</th>
                        <th scope="col">PTE Seaking</th>
                        <th scope="col">PTE Writing</th>
                        <th scope="col">PTE Listening</th>
                        <th scope="col">PTE Overall_score</th>
                        <th scope="col">day</th>
                        <th scope="col">Time</th>
                        <th scope="col">Registration date</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{$student->id}}</th>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->phone_number}}</td>
                            <td>{{$student->age}}</td>
                            <td>{{$student->marital_status}}</td>
                            <td>{{$student->facebook}}</td>
                            <td>{{$student->nationality}}</td>
                            <td>{{$student->experience_year}}</td>
                            <td>{{$student->university}}</td>
                            <td>{{$student->certificate}}</td>
                            <td>{{$student->specializedame}}</td>
                            <td>{{$student->passing_year}}</td>
                            <td>{{$student->company_one}}</td>
                            <td>{{$student->position_one}}</td>
                            <td>{{$student->experience_one}}</td>
                            <td>{{$student->company_two}}</td>
                            <td>{{$student->position_two}}</td>
                            <td>{{$student->experience_two}}</td>
                            <td>{{$student->company_three}}</td>
                            <td>{{$student->position_three}}</td>
                            <td>{{$student->experience_three}}3</td>

                            <td>{{$student->ielts}}</td>
                            <td>{{$student->ielts_reading}}</td>
                            <td>{{$student->ielts_speaking}}</td>
                            <td>{{$student->ielts_writing}}</td>
                            <td>{{$student->ielts_listening}}</td>
                            <td>{{$student->ielts_overall_score}}</td>

                            <td>{{$student->pte}}</td>
                            <td>{{$student->pte_reading}}</td>
                            <td>{{$student->pte_speaking}}</td>
                            <td>{{$student->pte_writing}}</td>
                            <td>{{$student->pte_listening}}</td>
                            <td>{{$student->pte_overall_score}}</td>
                            <td>{{$student->mi_day}}</td>
                            <td>{{$student->mi_time}}</td>
                            <td>{{$student->updated_at}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

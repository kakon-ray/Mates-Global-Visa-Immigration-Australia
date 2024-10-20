@extends('layouts.master')
@section ('page_meta')
<meta name="description" content="Winfred Services" />
@endsection
@section ('title')
<title>Welcome to Global Connex</title>
@endsection
@section('content')
<section>
<div class="breadcrumbs-title bg-img-4 parallax overlay dark-5 blank-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-menu ptb-about">
                        <h1 class="l-height">IELTS for Beginner</h1>
                        <h2 class="l-height" style="color: #fff;">REGISTRATION FORM</h2>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
  </section>

  <div class="mi-registration">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                <div class="alert alert-success">
                   {{ session('status') }}
                </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li class="p-1" style="list-style: circle;">{{ $error }}</li>
                        @endforeach
                        </ul>
                  </div>
                @endif
                <form action="{{ route('mi7.store') }}" method="post">
                    @csrf
                <div class="mi-block">
                    <h2>Personal details:</h2>
                    <hr class="mi-block-hr">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name: <span style="color:#bf1e1e">*</span></label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">E-mail Address: <span style="color:#bf1e1e">*</span></label>
                                    <input type="email" class="form-control" name="email" value="{{old('email')}}" required>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contact Number: <span style="color:#bf1e1e">*</span></label>
                                    <input type="text" class="form-control" name="phone_number" value="{{old('phone_number')}}" required>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Age: <span style="color:#bf1e1e">*</span></label>
                                    <input type="text" class="form-control" name="age" value="{{old('age')}}" required>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Marital Status: <span style="color:#bf1e1e">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="inlineRadio1" name="marital_status" checked value="1" {{ old('marital_status')=="1" ? 'checked='.'"checked"' : '' }}>
                                      <label class="form-check-label" for="inlineRadio1">Single</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="inlineRadio2" name="marital_status" value="1" {{ old('marital_status')=="1" ? 'checked='.'"checked"' : '' }}>
                                      <label class="form-check-label" for="inlineRadio2">Married</label>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Facebook ID: </label>
                                    <input type="text" class="form-control" name="facebook" value="{{old('facebook')}}" placeholder="Facebook ID">
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your location:<span style="color:#bf1e1e">*</span></label>
                                    <select class="form-control" name="nationality">
                                        <option value="Singapore">Singapore</option>
                                        <option value="Other">Other</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="China">China</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-leste">Timor-leste</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">VietNam</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">How long have you been in this country? (আপনি এখানে কতদিন যাবৎ আছেন?) <span style="color:#bf1e1e">*</span></label>
                                    <select class="form-control" name="experience_year">
                                        <option selected value="1" {{ old('experience_year') == 1 ? 'selected' : '' }}>1 Year</option>
                                        <option value="2" {{ old('experience_year') == 2 ? 'selected' : '' }}>2 Years</option>
                                        <option value="3" {{ old('experience_year') == 3 ? 'selected' : '' }}>3 Years</option>
                                        <option value="4" {{ old('experience_year') == 4 ? 'selected' : '' }}>4 Years</option>
                                        <option value="5" {{ old('experience_year') == 5 ? 'selected' : '' }}>5 Years</option>
                                        <option value="6" {{ old('experience_year') == 6 ? 'selected' : '' }}>6 Years</option>
                                        <option value="7" {{ old('experience_year') == 7 ? 'selected' : '' }}>7 Years</option>
                                        <option value="8" {{ old('experience_year') == 8 ? 'selected' : '' }}>8 Years</option>
                                        <option value="9" {{ old('experience_year') == 9 ? 'selected' : '' }}>9 Years</option>
                                        <option value="10" {{ old('experience_year') == 10 ? 'selected' : '' }}>10 Years</option>
                                        <option value="11" {{ old('experience_year') == 11 ? 'selected' : '' }}>11 Years</option>
                                        <option value="12" {{ old('experience_year') == 12 ? 'selected' : '' }}>12 Years</option>
                                        <option value="13" {{ old('experience_year') == 13 ? 'selected' : '' }}>13 Years</option>
                                        <option value="14" {{ old('experience_year') == 14 ? 'selected' : '' }}>14 Years</option>
                                        <option value="15" {{ old('experience_year') == 15 ? 'selected' : '' }}>15 Years</option>
                                        <option value="16" {{ old('experience_year') == 16 ? 'selected' : '' }}>16 Years</option>
                                        <option value="17" {{ old('experience_year') == 17 ? 'selected' : '' }}>17 Years</option>
                                        <option value="18" {{ old('experience_year') == 18 ? 'selected' : '' }}>18 Years</option>
                                        <option value="19" {{ old('experience_year') == 19 ? 'selected' : '' }}>19 Years</option>
                                        <option value="20" {{ old('experience_year') == 20 ? 'selected' : '' }}>20 Years</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                </div>
                <div class="mi-block">
                    <h2>Education History:</h2>
                    <hr class="mi-block-hr">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">University / Institute Name (শিক্ষা প্রতিষ্ঠানের নাম): <span style="color:#bf1e1e">*</span></label>
                                    <input type="text" class="form-control" name="university" value="{{old('university')}}" placeholder="University / Institute Name" required>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name of Certificate /Degree: <span style="color:#bf1e1e">*</span></label>
                                    <input type="text" class="form-control" name="certificate" value="{{old('certificate')}}" placeholder="Name of Certificate /Degree" required>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Specialized:</label>
                                    <input type="text" class="form-control" name="specialized" value="{{old('specialized')}}">
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Passing Year <span style="color:#bf1e1e">*</span></label>
                                    <select class="form-control" name="passing_year" required>
                                        <option selected disabled>Year</option>
                                        <option value="1990" {{ old('passing_year') == 1990 ? 'selected' : '' }}>1990</option>
                                        <option value="1991" {{ old('passing_year') == 1991 ? 'selected' : '' }}>1991</option>
                                        <option value="1992" {{ old('passing_year') == 1992 ? 'selected' : '' }}>1992</option>
                                        <option value="1993" {{ old('passing_year') == 1993 ? 'selected' : '' }}>1993</option>
                                        <option value="1994" {{ old('passing_year') == 1994 ? 'selected' : '' }}>1994</option>
                                        <option value="1995" {{ old('passing_year') == 1995 ? 'selected' : '' }}>1995</option>
                                        <option value="1996" {{ old('passing_year') == 1996 ? 'selected' : '' }}>1996</option>
                                        <option value="1997" {{ old('passing_year') == 1997 ? 'selected' : '' }}>1997</option>
                                        <option value="1998" {{ old('passing_year') == 1998 ? 'selected' : '' }}>1998</option>
                                        <option value="1999" {{ old('passing_year') == 1999 ? 'selected' : '' }}>1999</option>
                                        <option value="2000" {{ old('passing_year') == 2000 ? 'selected' : '' }}>2000</option>
                                        <option value="2001" {{ old('passing_year') == 2001 ? 'selected' : '' }}>2001</option>
                                        <option value="2002" {{ old('passing_year') == 2002 ? 'selected' : '' }}>2002</option>
                                        <option value="2003" {{ old('passing_year') == 2003 ? 'selected' : '' }}>2003</option>
                                        <option value="2004" {{ old('passing_year') == 2004 ? 'selected' : '' }}>2004</option>
                                        <option value="2005" {{ old('passing_year') == 2005 ? 'selected' : '' }}>2005</option>
                                        <option value="2006" {{ old('passing_year') == 2006 ? 'selected' : '' }}>2006</option>
                                        <option value="2007" {{ old('passing_year') == 2007 ? 'selected' : '' }}>2007</option>
                                        <option value="2008" {{ old('passing_year') == 2008 ? 'selected' : '' }}>2008</option>
                                        <option value="2009" {{ old('passing_year') == 2009 ? 'selected' : '' }}>2009</option>
                                        <option value="2010" {{ old('passing_year') == 2010 ? 'selected' : '' }}>2010</option>
                                        <option value="2011" {{ old('passing_year') == 2011 ? 'selected' : '' }}>2011</option>
                                        <option value="2012" {{ old('passing_year') == 2012 ? 'selected' : '' }}>2012</option>
                                        <option value="2013" {{ old('passing_year') == 2013 ? 'selected' : '' }}>2013</option>
                                        <option value="2014" {{ old('passing_year') == 2014 ? 'selected' : '' }}>2014</option>
                                        <option value="2015" {{ old('passing_year') == 2015 ? 'selected' : '' }}>2015</option>
                                        <option value="2016" {{ old('passing_year') == 2016 ? 'selected' : '' }}>2016</option>
                                        <option value="2017" {{ old('passing_year') == 2017 ? 'selected' : '' }}>2017</option>
                                        <option value="2018" {{ old('passing_year') == 2018 ? 'selected' : '' }}>2018</option>
                                        <option value="2019" {{ old('passing_year') == 2019 ? 'selected' : '' }}>2019</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                </div>

                <div class="mi-block">
                  <h2>Employment History:</h2>
                  <hr class="mi-block-hr">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">1. Company Name <span style="color:#bf1e1e">*</span></label>
                                  <input type="text" class="form-control" name="company_one" value="{{old('company_one')}}" placeholder="Company Name" required>
                                </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Position Name <span style="color:#bf1e1e">*</span></label>
                                  <input type="text" class="form-control" name="position_one" value="{{old('position_one')}}" placeholder="Position Name" required>
                                </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Experience<span style="color:#bf1e1e">*</span></label>
                                  <select class="form-control" name="experience_one">
                                    <option selected disabled>Year</option>
                                    <option value="1" {{ old('experience_one') == 1 ? 'selected' : '' }}>1 Year</option>
                                    <option value="2" {{ old('experience_one') == 2 ? 'selected' : '' }}>2 Years</option>
                                    <option value="3" {{ old('experience_one') == 3 ? 'selected' : '' }}>3 Years</option>
                                    <option value="4" {{ old('experience_one') == 4 ? 'selected' : '' }}>4 Years</option>
                                    <option value="5" {{ old('experience_one') == 5 ? 'selected' : '' }}>5 Years</option>
                                    <option value="6" {{ old('experience_one') == 6 ? 'selected' : '' }}>6 Years</option>
                                    <option value="7" {{ old('experience_one') == 7 ? 'selected' : '' }}>7 Years</option>
                                    <option value="8" {{ old('experience_one') == 8 ? 'selected' : '' }}>8 Years</option>
                                    <option value="9" {{ old('experience_one') == 9 ? 'selected' : '' }}>9 Years</option>
                                    <option value="10" {{ old('experience_one') == 10 ? 'selected' : '' }}>10 Years</option>
                                  </select>
                                </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">2. Company Name</label>
                                <input type="text" class="form-control" name="company_two" value="{{old('company_two')}}">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Position Name</label>
                                <input type="text" class="form-control" name="position_two" value="{{old('position_two')}}">
                              </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Experience</label>
                                <select class="form-control" name="experience_two">
                                <option selected disabled>Year</option>
                                    <option value="1" {{ old('experience_two') == 1 ? 'selected' : '' }}>1 Year</option>
                                    <option value="2" {{ old('experience_two') == 2 ? 'selected' : '' }}>2 Years</option>
                                    <option value="3" {{ old('experience_two') == 3 ? 'selected' : '' }}>3 Years</option>
                                    <option value="4" {{ old('experience_two') == 4 ? 'selected' : '' }}>4 Years</option>
                                    <option value="5" {{ old('experience_two') == 5 ? 'selected' : '' }}>5 Years</option>
                                    <option value="6" {{ old('experience_two') == 6 ? 'selected' : '' }}>6 Years</option>
                                    <option value="7" {{ old('experience_two') == 7 ? 'selected' : '' }}>7 Years</option>
                                    <option value="8" {{ old('experience_two') == 8 ? 'selected' : '' }}>8 Years</option>
                                    <option value="9" {{ old('experience_two') == 9 ? 'selected' : '' }}>9 Years</option>
                                    <option value="10" {{ old('experience_two') == 10 ? 'selected' : '' }}>10 Years</option>
                                </select>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="exampleInputEmail1">3. Company Name:</label>
                              <input type="text" class="form-control" name="company_three" value="{{old('company_three')}}">
                            </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="exampleInputEmail1">Position Name:</label>
                              <input type="text" class="form-control" name="position_three" value="{{old('position_three')}}">
                            </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group">
                              <label for="exampleInputEmail1">Experience</label>
                              <select class="form-control" name="experience_three">
                              <option selected disabled>Year</option>
                                    <option value="2" {{ old('experience_three') == 2 ? 'selected' : '' }}>2 Years</option>
                                    <option value="1" {{ old('experience_three') == 1 ? 'selected' : '' }}>1 Year</option>
                                    <option value="3" {{ old('experience_three') == 3 ? 'selected' : '' }}>3 Years</option>
                                    <option value="4" {{ old('experience_three') == 4 ? 'selected' : '' }}>4 Years</option>
                                    <option value="5" {{ old('experience_three') == 5 ? 'selected' : '' }}>5 Years</option>
                                    <option value="6" {{ old('experience_three') == 6 ? 'selected' : '' }}>6 Years</option>
                                    <option value="7" {{ old('experience_three') == 7 ? 'selected' : '' }}>7 Years</option>
                                    <option value="8" {{ old('experience_three') == 8 ? 'selected' : '' }}>8 Years</option>
                                    <option value="9" {{ old('experience_three') == 9 ? 'selected' : '' }}>9 Years</option>
                                    <option value="10" {{ old('experience_three') == 10 ? 'selected' : '' }}>10 Years</option>
                              </select>
                            </div>
                      </div>
                  </div>
              </div>


                <div class="mi-block">
                    <h2>English Efficiency:</h2>
                    <hr class="mi-block-hr">

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-check  form-check-inline ielts-padd">
                                      <input class="form-check-input ielts-width" type="checkbox" name="ielts" value="1" {{ old('ielts') == 1 ? 'checked' : '' }}>
                                      <label class="form-check-label ielts-font" for="inlineRadio1">IELTS</label>
                                    </div><br>
                                    <div class="form-check form-check-inline pte-padd">
                                      <input class="form-check-input ielts-width" type="checkbox" name="pte" value="1" {{ old('pte') == 1 ? 'checked' : '' }}>
                                      <label class="form-check-label ielts-font">PTE</label>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Reading</label>
                                    <select class="form-control" name="ielts_reading">
                                      <option selected disabled>Score</option>
                                      <option value="45" {{ old('ielts_reading') == 45 ? 'selected' : '' }}>4.5</option>
                                      <option value="50" {{ old('ielts_reading') == 50 ? 'selected' : '' }}>5.0</option>
                                      <option value="55" {{ old('ielts_reading') == 55 ? 'selected' : '' }}>5.5</option>
                                      <option value="60" {{ old('ielts_reading') == 60 ? 'selected' : '' }}>6.0</option>
                                      <option value="65" {{ old('ielts_reading') == 65 ? 'selected' : '' }}>6.5</option>
                                      <option value="70" {{ old('ielts_reading') == 70 ? 'selected' : '' }}>7.0</option>
                                      <option value="75" {{ old('ielts_reading') == 75 ? 'selected' : '' }}>7.5</option>
                                      <option value="80" {{ old('ielts_reading') == 80 ? 'selected' : '' }}>8.0</option>
                                      <option value="85" {{ old('ielts_reading') == 85 ? 'selected' : '' }}>8.5</option>
                                      <option value="90" {{ old('ielts_reading') == 90 ? 'selected' : '' }}>9</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">Reading</label> -->
                                    <select class="form-control" name="pte_reading">
                                        <option selected disabled>Score</option>
                                        <option value="30" {{ old('pte_reading') == 30 ? 'selected' : '' }}>30</option>
                                        <option value="36" {{ old('pte_reading') == 36 ? 'selected' : '' }}>36</option>
                                        <option value="42" {{ old('pte_reading') == 42 ? 'selected' : '' }}>42</option>
                                        <option value="50" {{ old('pte_reading') == 50 ? 'selected' : '' }}>50</option>
                                        <option value="58" {{ old('pte_reading') == 58 ? 'selected' : '' }}>58</option>
                                        <option value="65" {{ old('pte_reading') == 65 ? 'selected' : '' }}>65</option>
                                        <option value="73" {{ old('pte_reading') == 73 ? 'selected' : '' }}>73</option>
                                        <option value="79" {{ old('pte_reading') == 79 ? 'selected' : '' }}>79</option>
                                        <option value="83" {{ old('pte_reading') == 83 ? 'selected' : '' }}>83</option>
                                        <option value="86" {{ old('pte_reading') == 86 ? 'selected' : '' }}>86</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-md-2"><div class="form-group">
                                <label for="exampleInputEmail1">Speaking</label>
                                <select class="form-control" name="ielts_speaking">
                                  <option selected disabled>Score</option>
                                  <option value="45" {{ old('ielts_speaking') == 45 ? 'selected' : '' }}>4.5</option>
                                  <option value="50" {{ old('ielts_speaking') == 50 ? 'selected' : '' }}>5.0</option>
                                  <option value="55" {{ old('ielts_speaking') == 55 ? 'selected' : '' }}>5.5</option>
                                  <option value="60" {{ old('ielts_speaking') == 60 ? 'selected' : '' }}>6.0</option>
                                  <option value="65" {{ old('ielts_speaking') == 65 ? 'selected' : '' }}>6.5</option>
                                  <option value="70" {{ old('ielts_speaking') == 70 ? 'selected' : '' }}>7.0</option>
                                  <option value="75" {{ old('ielts_speaking') == 75 ? 'selected' : '' }}>7.5</option>
                                  <option value="80" {{ old('ielts_speaking') == 80 ? 'selected' : '' }}>8.0</option>
                                  <option value="85" {{ old('ielts_speaking') == 85 ? 'selected' : '' }}>8.5</option>
                                  <option value="90" {{ old('ielts_speaking') == 90 ? 'selected' : '' }}>9</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Speaking</label> -->
                                <select class="form-control" name="pte_speaking">
                                    <option selected disabled>Score</option>
                                    <option value="30" {{ old('pte_speaking') == 30 ? 'selected' : '' }}>30</option>
                                    <option value="36" {{ old('pte_speaking') == 36 ? 'selected' : '' }}>36</option>
                                    <option value="42" {{ old('pte_speaking') == 42 ? 'selected' : '' }}>42</option>
                                    <option value="50" {{ old('pte_speaking') == 50 ? 'selected' : '' }}>50</option>
                                    <option value="58" {{ old('pte_speaking') == 58 ? 'selected' : '' }}>58</option>
                                    <option value="65" {{ old('pte_speaking') == 65 ? 'selected' : '' }}>65</option>
                                    <option value="73" {{ old('pte_speaking') == 73 ? 'selected' : '' }}>73</option>
                                    <option value="79" {{ old('pte_speaking') == 79 ? 'selected' : '' }}>79</option>
                                    <option value="83" {{ old('pte_speaking') == 83 ? 'selected' : '' }}>83</option>
                                    <option value="86" {{ old('pte_speaking') == 86 ? 'selected' : '' }}>86</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Writing</label>
                                    <select class="form-control" name="ielts_writing">
                                      <option selected disabled>Score</option>
                                      <option value="45" {{ old('ielts_writing') == 45 ? 'selected' : '' }}>4.5</option>
                                      <option value="50" {{ old('ielts_writing') == 50 ? 'selected' : '' }}>5.0</option>
                                      <option value="55" {{ old('ielts_writing') == 55 ? 'selected' : '' }}>5.5</option>
                                      <option value="60" {{ old('ielts_writing') == 60 ? 'selected' : '' }}>6.0</option>
                                      <option value="65" {{ old('ielts_writing') == 65 ? 'selected' : '' }}>6.5</option>
                                      <option value="70" {{ old('ielts_writing') == 70 ? 'selected' : '' }}>7.0</option>
                                      <option value="75" {{ old('ielts_writing') == 75 ? 'selected' : '' }}>7.5</option>
                                      <option value="80" {{ old('ielts_writing') == 80 ? 'selected' : '' }}>8.0</option>
                                      <option value="85" {{ old('ielts_writing') == 85 ? 'selected' : '' }}>8.5</option>
                                      <option value="90" {{ old('ielts_writing') == 90 ? 'selected' : '' }}>9</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <!--  <label for="exampleInputEmail1">Writing</label> -->
                                    <select class="form-control" name="pte_writing">
                                        <option selected disabled>Score</option>
                                        <option value="30" {{ old('pte_writing') == 30 ? 'selected' : '' }}>30</option>
                                        <option value="36" {{ old('pte_writing') == 36 ? 'selected' : '' }}>36</option>
                                        <option value="42" {{ old('pte_writing') == 42 ? 'selected' : '' }}>42</option>
                                        <option value="50" {{ old('pte_writing') == 50 ? 'selected' : '' }}>50</option>
                                        <option value="58" {{ old('pte_writing') == 58 ? 'selected' : '' }}>58</option>
                                        <option value="65" {{ old('pte_writing') == 65 ? 'selected' : '' }}>65</option>
                                        <option value="73" {{ old('pte_writing') == 73 ? 'selected' : '' }}>73</option>
                                        <option value="79" {{ old('pte_writing') == 79 ? 'selected' : '' }}>79</option>
                                        <option value="83" {{ old('pte_writing') == 83 ? 'selected' : '' }}>83</option>
                                        <option value="86" {{ old('pte_writing') == 86 ? 'selected' : '' }}>86</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Listening</label>
                                    <select class="form-control" name="ielts_listening">
                                      <option selected disabled>Score</option>
                                      <option value="45" {{ old('ielts_listening') == 45 ? 'selected' : '' }}>4.5</option>
                                      <option value="50" {{ old('ielts_listening') == 50 ? 'selected' : '' }}>5.0</option>
                                      <option value="55" {{ old('ielts_listening') == 55 ? 'selected' : '' }}>5.5</option>
                                      <option value="60" {{ old('ielts_listening') == 60 ? 'selected' : '' }}>6.0</option>
                                      <option value="65" {{ old('ielts_listening') == 65 ? 'selected' : '' }}>6.5</option>
                                      <option value="70" {{ old('ielts_listening') == 70 ? 'selected' : '' }}>7.0</option>
                                      <option value="75" {{ old('ielts_listening') == 75 ? 'selected' : '' }}>7.5</option>
                                      <option value="80" {{ old('ielts_listening') == 80 ? 'selected' : '' }}>8.0</option>
                                      <option value="85" {{ old('ielts_listening') == 85 ? 'selected' : '' }}>8.5</option>
                                      <option value="90" {{ old('ielts_listening') == 90 ? 'selected' : '' }}>9</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <!--  <label for="exampleInputEmail1">Writing</label> -->
                                    <select class="form-control" name="pte_listening">
                                        <option selected disabled>Score</option>
                                        <option value="30" {{ old('pte_listening') == 30 ? 'selected' : '' }}>30</option>
                                        <option value="36" {{ old('pte_listening') == 36 ? 'selected' : '' }}>36</option>
                                        <option value="42" {{ old('pte_listening') == 42 ? 'selected' : '' }}>42</option>
                                        <option value="50" {{ old('pte_listening') == 50 ? 'selected' : '' }}>50</option>
                                        <option value="58" {{ old('pte_listening') == 58 ? 'selected' : '' }}>58</option>
                                        <option value="65" {{ old('pte_listening') == 65 ? 'selected' : '' }}>65</option>
                                        <option value="73" {{ old('pte_listening') == 73 ? 'selected' : '' }}>73</option>
                                        <option value="79" {{ old('pte_listening') == 79 ? 'selected' : '' }}>79</option>
                                        <option value="83" {{ old('pte_listening') == 83 ? 'selected' : '' }}>83</option>
                                        <option value="86" {{ old('pte_listening') == 86 ? 'selected' : '' }}>86</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Overall Score</label>
                                    <select class="form-control" name="ielts_overall_score">
                                      <option selected disabled>Score</option>
                                      <option value="45" {{ old('ielts_overall_score') == 45 ? 'selected' : '' }}>4.5</option>
                                      <option value="50" {{ old('ielts_overall_score') == 50 ? 'selected' : '' }}>5.0</option>
                                      <option value="55" {{ old('ielts_overall_score') == 55 ? 'selected' : '' }}>5.5</option>
                                      <option value="60" {{ old('ielts_overall_score') == 60 ? 'selected' : '' }}>6.0</option>
                                      <option value="65" {{ old('ielts_overall_score') == 65 ? 'selected' : '' }}>6.5</option>
                                      <option value="70" {{ old('ielts_overall_score') == 70 ? 'selected' : '' }}>7.0</option>
                                      <option value="75" {{ old('ielts_overall_score') == 75 ? 'selected' : '' }}>7.5</option>
                                      <option value="80" {{ old('ielts_overall_score') == 80 ? 'selected' : '' }}>8.0</option>
                                      <option value="85" {{ old('ielts_overall_score') == 85 ? 'selected' : '' }}>8.5</option>
                                      <option value="90" {{ old('ielts_overall_score') == 90 ? 'selected' : '' }}>9</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <!--  <label for="exampleFormControlSelect1">Overall Score</label> -->
                                     <select class="form-control" name="pte_overall_score">
                                        <option selected disabled>Score</option>
                                        <option value="30" {{ old('pte_overall_score') == 30 ? 'selected' : '' }}>30</option>
                                        <option value="36" {{ old('pte_overall_score') == 36 ? 'selected' : '' }}>36</option>
                                        <option value="42" {{ old('pte_overall_score') == 42 ? 'selected' : '' }}>42</option>
                                        <option value="50" {{ old('pte_overall_score') == 50 ? 'selected' : '' }}>50</option>
                                        <option value="58" {{ old('pte_overall_score') == 58 ? 'selected' : '' }}>58</option>
                                        <option value="65" {{ old('pte_overall_score') == 65 ? 'selected' : '' }}>65</option>
                                        <option value="73" {{ old('pte_overall_score') == 73 ? 'selected' : '' }}>73</option>
                                        <option value="79" {{ old('pte_overall_score') == 79 ? 'selected' : '' }}>79</option>
                                        <option value="83" {{ old('pte_overall_score') == 83 ? 'selected' : '' }}>83</option>
                                        <option value="86" {{ old('pte_overall_score') == 86 ? 'selected' : '' }}>86</option>
                                     </select>
                                   </div>
                            </div>
                        </div>
                </div>

                <div class="mi-block">
                    <h2>Choose Event: </h2>
                    <hr class="mi-block-hr">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Day</label>
                                    <select class="form-control" name="mi_day">
                                        <option selected disabled>Day</option>
                                        <option value="Sunday" {{ old('mi_day') == "Sunday" ? 'selected' : '' }}>Sunday</option>
                                        <option value="Monday" {{ old('mi_day') == "Monday" ? 'selected' : '' }}>Monday</option>
                                        <option value="Tuesday" {{ old('mi_day') == "Tuesday" ? 'selected' : '' }}>Tuesday</option>
                                        <option value="Wednesday" {{ old('mi_day') == "Wednesday" ? 'selected' : '' }}>Wednesday</option>
                                        <option value="Thursday" {{ old('mi_day') == "Thursday" ? 'selected' : '' }}>Thursday</option>
                                        <option value="Friday" {{ old('mi_day') == "Friday" ? 'selected' : '' }}>Friday</option>
                                        <option value="Saturday" {{ old('mi_day') == "Saturday" ? 'selected' : '' }}>Saturday</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Time</label>
                                <select class="form-control" name="mi_time">
                                        <option selected disabled>Choose time</option>
                                        <option value="6am to 8am" {{ old('mi_time') == "6am to 8am" ? 'selected' : '' }}>6am to 8am</option>
                                        <option value="7am to 9am" {{ old('mi_time') == "7am to 9am" ? 'selected' : '' }}>7am to 9am</option>
                                        <option value="8am to 10am" {{ old('mi_time') == "8am to 10am" ? 'selected' : '' }}>8am to 10am</option>
                                        <option value="9am to 11am" {{ old('mi_time') == "9am to 11am" ? 'selected' : '' }}>9am to 11am</option>
                                        <option value="10am to 12am" {{ old('mi_time') == "10am to 12am" ? 'selected' : '' }}>10am to 12am</option>
                                        <option value="11am to 1pm" {{ old('mi_time') == "11am to 1pm" ? 'selected' : '' }}>11am to 1pm</option>
                                        <option value="12pm to 2pm" {{ old('mi_time') == "12pm to 2pm" ? 'selected' : '' }}>12pm to 2pm</option>
                                        <option value="1pm to 3pm" {{ old('mi_time') == "1pm to 3pm" ? 'selected' : '' }}>1pm to 3pm</option>
                                        <option value="2pm to 4pm" {{ old('mi_time') == "2pm to 4pm" ? 'selected' : '' }}>2pm to 4pm</option>
                                        <option value="3pm to 5pm" {{ old('mi_time') == "3pm to 5pm" ? 'selected' : '' }}>3pm to 5pm</option>
                                        <option value="4pm to 6pm" {{ old('mi_time') == "4pm to 6pm" ? 'selected' : '' }}>4pm to 6pm</option>
                                        <option value="5pm to 7pm" {{ old('mi_time') == "5pm to 7pm" ? 'selected' : '' }}>5pm to 7pm</option>
                                        <option value="6pm to 8pm" {{ old('mi_time') == "6pm to 8pm" ? 'selected' : '' }}>6pm to 8pm</option>
                                        <option value="7pm to 9pm" {{ old('mi_time') == "7pm to 9pm" ? 'selected' : '' }}>7pm to 9pm</option>
                                        <option value="8pm to 10pm" {{ old('mi_time') == "8pm to 10pm" ? 'selected' : '' }}>8pm to 10pm</option>
                                        <option value="9pm to 11pm" {{ old('mi_time') == "9pm to 11pm" ? 'selected' : '' }}>9pm to 11pm</option>
                                        <option value="10pm to 12am" {{ old('mi_time') == "10pm to 12am" ? 'selected' : '' }}>10pm to 12am</option>
                                        <option value="11pm to 1am" {{ old('mi_time') == "11pm to 1am" ? 'selected' : '' }}>11pm to 1am</option>
                                    </select>
                              </div>
                            </div>
                        </div>
                </div>
               <!--  <div class="mi-block">
                    <h2>Choose Event: <span style="color:#bf1e1e">*</span></h2>
                    <hr class="mi-block-hr">
                        <h4>Every Sunday</h4>
                        <h6>Form 5th January, 2020</h6>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Choose Event:</label><br>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="choose_event" id="inlineRadio1" value="6-8">
                              <label class="form-check-label" for="inlineRadio1">6:00pm to 7:00pm</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="choose_event" id="inlineRadio2" value="8-10" disabled>
                              <label class="form-check-label" for="inlineRadio2">7:00pm to 8:00pm</label>
                            </div>
                          </div>

                </div> -->
                <button type="submit" class="mi7-button btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
      </div>
</div>

    @endsection

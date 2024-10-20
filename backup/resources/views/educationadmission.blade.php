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
                        <h1 class="l-height">STUDENT AND MIGRATION SERVICES</h1>
                        <ul class="clearfix">
                            <li><a href="index.html">Home</a> <i class="fa fa-angle-right"></i>
                            <li>EDUCATION ADMISSION</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
  </section>
  <section class="course-details section-padding white-bg">
            <div class="container">
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
            <div class="education-admission">
           <h3>EDUCATION ADMISSION</h3> 
           <p>Tertiary education includes diplomas, undergraduate and graduate certificates. There are many courses available to enrol here. Global Connex has prominent links to many of the topmost Universities and colleges in Australia, New Zealand and Canada to allow you to enrol with ease and study the course you desire.</p>
            </div>
                <div class="row">
                    <div class="col-12 col-sm-12 mobi-mb-50">
                        <div class="single-course mr-minus-30">
                   
       
<ul class="nav nav-tabs padd-n40">
    <li><a href="#accommodition" data-toggle="tab">Australia</a></li>
    <li><a href="#jobs" data-toggle="tab">New Zealand</a></li>
    <li><a href="#migration" data-toggle="tab">Canada</a></li>

</ul>
<!-- Nav tabs End -->
<div class="tab-content padd-n40">
    <div class="tab-pane active" id="accommodition">
        <div class="des-title mb-25">
            <h5>Australia</h5>
        </div>
        <p class="mb-25">Australia is a great country to consider when thinking about studying overseas, its multicultural and energetic environment allows for an environment where you can study and travel freely. Australian Universities/colleges are reputed and known for their excellence in all areas of education and training. Institutions deliver practical and career-orientated training so students can be confident they have the are experienced in teaching classes to students from many countries. Australia offers more job facilities in multiple disciplines and offer work permits to international students like none other.</p>
        <h4>Lifestyle</h4>
        <p class="mb-25">Australia is a culturally diverse country with many sights to see and places to visit. Along with studying students have the opportunity to travel around the country during holidays. The lifestyle here is very comfortable, Universities and accommodations usually are close to grocery stores, banks, entertainment venues, workplaces and other important routine destinations. Australia’s metro cities also offer plenty of public transportation via trains, buses, trams and ferries.</p>
        <h4>Living cost</h4>
        <p class="mb-25">You can find yourself paying 150-350 per week for a room depending on the location, facilities and type of accommodation.</p>
        <h4>Work opportunities</h4>
        <p class="mb-25">Students can work casual and part time while studying at University/Collage. There are jobs available in different fields where students can choose work according to the work and convenience.</p>
        <h4>Estimated fees</h4>
        <p>Undergraduate degree: Around AU$30,000</p>
        <p class="mb-25">Postgraduate degree: Around AU$32,000</p>
        <div class="education-admission-table">
        <p class="mb-25">Please fill the following table so we can find the course suitable for you :</p>
        <div class="container">
    <div class="row">
        <div class="col-md-8">
           <form action="{{ route('admission.create') }}" method="post">
              @csrf
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" class="form-control" name="admission_name" value="{{old('admission_name')}}" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" class="form-control" name="admission_phone" value="{{old('admission_phone')}}" placeholder="Enter Contact Number">
                  </div>
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="admission_email" value="{{old('admission_email')}}" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <label>Which country are you from?</label>
                    <select class="form-control" name="admission_from_country">
                                        <option value="disabled selected hidden">Which country are you from?</option>
                                        <option value="Åland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Which country would you like to study in?</label>
                    <select class="form-control" name="admission_study_country">
                                        <option value="disabled selected hidden">Which country would you like to study in?</option>
                                        <option value="Åland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">What do you want to do?</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="admission_qualification" value="Diploma">
                        <label class="form-check-label" for="inlineRadio1">Diploma</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="admission_qualification" value="Bachelors">
                        <label class="form-check-label" for="inlineRadio2">Bachelors</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="admission_qualification" value="Masters">
                        <label class="form-check-label" for="inlineRadio2">Masters</label>
                      </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Name of the Courses?</label>
                    <input type="text" class="form-control" name="admision_course" value="{{old('admision_course')}}" placeholder="Name of the Courses?">
                  </div>
                <button type="submit" class="mi7-button btn btn-primary">Submit</button>
              </form>
  </div>
  <div class="col-md-4"></div>
  </div>

  </div>
  </div>
  </div>
  <!-- /.Description End -->
              <div class="tab-pane fade" id="jobs">
              <div class="des-title mb-25">
                  <h5>New Zealand</h5>
              </div>
              <p class="mb-25">New Zealand is one of the safest and most beautiful countries in the world. 
                  They have excellent study opportunities and has gradually become one of the most attractive destinations for international students, due to its low cost of living and exclusive facilities. New Zealand Universities and colleges have minimal entry requirements, so it is easy to get admission and there is less competition.
                  </p>
              <h4>Lifestyle</h4>
              <p class="mb-25">New Zealand has a great environment. Most of the cities and towns are relatively small and with a total population of only 4.6 million it is breathable and uncrowded. Universities and accommodations are nearby to transport, shopping centres, beaches, parks, walking trails and more. There’s something for everyone in New Zealand, while studying students have the opportunity to enjoy outdoor extreme activities like bungy jumping or skydiving or jet boating or get closer to nature by hiking or cycling or trekking. </p>
              <h4>Living cost</h4>
              <p class="mb-25">You can find yourself paying 120-300 per week for a room depending on the location, facilities and type of accommodation.</p>
              <h4>Work opportunities</h4>
              <p class="mb-25">Students can work casual and part time while studying at University/Collage. There are jobs available in different fields where students can choose work according to the work and convenience.</p>
              <h4>Estimated fees</h4>
              <p>Undergraduate degree: NZ$20,000 to NZ$40,000</p>
              <p class="mb-25">Postgraduate degree: NZ$32,000 to NZ$47,000</p>
              <div class="education-admission-table">
              <p class="mb-25">Please fill the following table so we can find the course suitable for you :</p>
              <div class="container">
      <div class="row">
          <div class="col-md-8">
            <form action="{{ route('admission.create') }}" method="post">
              @csrf
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" class="form-control" name="admission_name" value="{{old('admission_name')}}" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" class="form-control" name="admission_phone" value="{{old('admission_phone')}}" placeholder="Enter Contact Number">
                  </div>
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="admission_email" value="{{old('admission_email')}}" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <label>Which country are you from?</label>
                    <select class="form-control" name="admission_from_country">
                                        <option value="disabled selected hidden">Which country are you from?</option>
                                        <option value="Åland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Which country would you like to study in?</label>
                    <select class="form-control" name="admission_study_country">
                                        <option value="disabled selected hidden">Which country would you like to study in?</option>
                                        <option value="Åland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">What do you want to do?</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="admission_qualification" value="Diploma">
                        <label class="form-check-label" for="inlineRadio1">Diploma</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="admission_qualification" value="Bachelors">
                        <label class="form-check-label" for="inlineRadio2">Bachelors</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="admission_qualification" value="Masters">
                        <label class="form-check-label" for="inlineRadio2">Masters</label>
                      </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Name of the Courses?</label>
                    <input type="text" class="form-control" name="admision_course" value="{{old('admision_course')}}" placeholder="Name of the Courses?">
                  </div>
                <button type="submit" class="mi7-button btn btn-primary">Submit</button>
              </form>
          </div>
          <div class="col-md-4"></div>
      </div>
      
  </div>
  </div>


    </div>
    <!-- /.Curriculum End -->
    <div class="tab-pane fade" id="migration">
      <div class="des-title mb-25">
        <h5>Canada</h5>
    </div>
              <p class="mb-25">Studying in Canada has its benefits, one of which is the chance to get points for permanent residency if you have graduated from a Canadian University. A Canadian degree, diploma or certificate is recognized as being equivalent to those obtained from the United States or Commonwealth countries. Canada’s higher education institutions are diverse welcoming students from all countries. Students will gain a high-quality education that will benefit their careers over the long term.</p>
              <h4>Lifestyle</h4>
              <p class="mb-25">Canada is ranked as one of the best countries to live in for students. Due to its access to education, facilities and high life expectancy. Canada is a beautiful country to explore, depending on which part of the country you’re in, you could have endless places to go to occupy your time when you’re not studying.</p>
              <h4>Living cost</h4>
              <p class="mb-25">You can find yourself paying 75-1,000 per week for a room depending on the location, facilities and type of accommodation.</p>
              <h4>Work opportunities</h4>
              <p class="mb-25">Students can work casual and part time while studying at University/Collage. There are jobs available in different fields where students can choose work according to the work and convenience.</p>
              <h4>Estimated fees</h4>
              <p>Undergraduate degree: $24,000 to $28,000</p>
              <p class="mb-25">Postgraduate degree: Around AU$22,000</p>
              <div class="education-admission-table">
              <p class="mb-25">Please fill the following table so we can find the course suitable for you :</p>
  <div class="container">
      <div class="row">
          <div class="col-md-8">
            <form action="{{ route('admission.create') }}" method="post">
              @csrf
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" class="form-control" name="admission_name" value="{{old('admission_name')}}" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" class="form-control" name="admission_phone" value="{{old('admission_phone')}}" placeholder="Enter Contact Number">
                  </div>
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="admission_email" value="{{old('admission_email')}}" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <label>Which country are you from?</label>
                    <select class="form-control" name="admission_from_country">
                                        <option value="disabled selected hidden">Which country are you from?</option>
                                        <option value="Åland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Which country would you like to study in?</label>
                    <select class="form-control" name="admission_study_country">
                                        <option value="disabled selected hidden">Which country would you like to study in?</option>
                                        <option value="Åland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">What do you want to do?</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="admission_qualification" value="Diploma">
                        <label class="form-check-label" for="inlineRadio1">Diploma</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="admission_qualification" value="Bachelors">
                        <label class="form-check-label" for="inlineRadio2">Bachelors</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="admission_qualification" value="Masters">
                        <label class="form-check-label" for="inlineRadio2">Masters</label>
                      </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Name of the Courses?</label>
                    <input type="text" class="form-control" name="admision_course" value="{{old('admision_course')}}" placeholder="Name of the Courses?">
                  </div>
                <button type="submit" class="mi7-button mi7-button btn btn-primary">Submit</button>
              </form>
          </div>
          <div class="col-md-4"></div>
      </div>
      
                 </div>
                </div>
               </div>
              </div>
            </div>
         </div>
       </div>
     </div>
</section>
    @endsection
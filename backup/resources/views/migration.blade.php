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
                            <li>MIGRATION</li>
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
           <h3>MIGRATION</h3> 
           <hr class="mi-block-hr">
           <p>People migrate to look for a better lifestyle and create a better future for themselves. Many countries offer great opportunities to migrants more specifically Australia, New Zealand, Canada. Our team at Global Connex can assist in migrating to these countries.</p>
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
                                    <p class="mb-25">Australia is known for its immigration programs that are simple & effective and does not impose much restrictions on the immigrant. The country offers unrestricted work rights to skilled workers and to their spouses. </p>
                                    <h4>Skilled Migration:</h4>
                                    <p><u>General skilled migration</u> is for skilled workers who do not have an employer sponsoring them.</p>
                                    <p class="mb-25"><u>Employer nomination</u> is for those who have an employer willing to sponsor them in Australia.</p>
                                    <h4>Business Migration:</h4>
                                    <p><u>Business skills migration</u>, encourages successful businesspeople to settle in Australia and develop new business opportunities</p>
                                    <p class="mb-25"><u>Distinguished talent</u> is a small category for people with special or unique talents that are of benefit to Australia.</p>
                                    <h4>Investment Migration :</h4>
                                    <p class="mb-25">This visa is for people who undertake business and investment activities in Australia. It allows you to stay in Australia indefinitely.</p>
                                    <h4>Family Stream :</h4>
                                    <p><u>Partner</u>, which includes spouses, de facto partners and fiancés</p>
                                    <p><u>Child</u>, including the dependent child or stepchild of the sponsor, a child adopted from overseas, and orphan relatives (a child under the age of 18, not married or in a de facto relationship, who cannot be cared for by his or her parents)</p>
                                    <p class="mb-25"><u>Parent, and other Family</u> including aged dependent relative, remaining relative and carer categories.</p>
                                    <div class="education-admission-table">
                                    <p>Please fill the following table for assistance with migration :</p>
                                    <div class="container padd-n40">
                                <div class="row">
                                    <div class="col-md-8">
                                        
          <form action="{{ route('migration.create') }}" method="post">
              @csrf
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" class="form-control" name="migration_name" value="{{old('migration_name')}}" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" class="form-control" name="migration_phone" value="{{old('migration_phone')}}" placeholder="Enter Contact Number">
                  </div>
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="migration_email" value="{{old('migration_email')}}" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <label>Which country are you from?</label>
                    <select class="form-control" name="migration_from_country">
                                        <option value="disabled selected hidden">Which country are you from?</option>
                                        <option value="Åland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Which country do you want to migrate to?</label>
                    <select class="form-control" name="migration_migrate_country">
                                        <option value="disabled selected hidden">Which country do you want to migrate to?</option>
                                        <option value="Åland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Which Visa?</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="migration_visa" value="Work visa">
                        <label class="form-check-label" for="inlineRadio1">Work visa</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="migration_visa" value="Business Visa">
                        <label class="form-check-label" for="inlineRadio2">Business Visa</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="migration_visa" value="Other">
                        <label class="form-check-label">Other</label>
                      </div>
                  </div>
                  
                  <div class="form-group">
                    <label>If Other, then please specify</label>
                    <input type="text" class="form-control" name="other_visa" value="{{old('other_visa')}}" placeholder="If Other, then please specify">
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
                                    <p class="mb-25">New Zealand is one of the most beautiful countries in the world in terms of natural scenery. They hold many sites to see including rainforests, mountains, plains and a variety of beaches. It is a great country to migrate to with a diverse environment and friendly atmosphere. They offer great benefits to residents, and endless opportunities to become permanent.</p>
                                        <h4>Work Visas</h4>
                                        <p><u>Residence from Work Visa:</u>  a temporary visa scheme which allows visa holders to apply for legal permanent residence in New Zealand after a period of 2 years. </p>
                                        <p class="mb-25"><u>Skilled Migrant Category:</u>designed to attract highly skilled migrants to New Zealand.</p>
                                        <h4>Family Visas</h4>
                                        <p><u>Partner</u>, which includes spouses, de facto partners and fiancés</p>
                                        <p><u>Child</u>, including the dependent child or stepchild of the sponsor, a child adopted from overseas, and orphan relatives (a child under the age of 18, not married or in a de facto relationship, who cannot be cared for by his or her parents)</p>
                                        <p class="mb-25"><u>Parent, and other Family</u>, including aged dependent relative, remaining relative and carer categories.</p>
                                        
                                        <div class="education-admission-table">
                                        <p class="mb-25">Please fill the following table for assistance with migration :</p>
                                        <form action="{{ route('migration.create') }}" method="post">
                                          @csrf
                                            <div class="form-group">
                                              <label>Full Name</label>
                                              <input type="text" class="form-control" name="migration_name" value="{{old('migration_name')}}" placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input type="text" class="form-control" name="migration_phone" value="{{old('migration_phone')}}" placeholder="Enter Contact Number">
                                              </div>
                                              <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control" name="migration_email" value="{{old('migration_email')}}" placeholder="Email Address">
                                              </div>
                                              <div class="form-group">
                                                <label>Which country are you from?</label>
                                                <select class="form-control" name="migration_from_country">
                                                                    <option value="disabled selected hidden">Which country are you from?</option>
                                                                    <option value="Åland Islands">Aland Islands</option>
                                                                    <option value="Albania">Albania</option>
                                                                    <option value="Algeria">Algeria</option>
                                                                </select>
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Which country do you want to migrate to?</label>
                                                <select class="form-control" name="migration_migrate_country">
                                                                    <option value="disabled selected hidden">Which country do you want to migrate to?</option>
                                                                    <option value="Åland Islands">Aland Islands</option>
                                                                    <option value="Albania">Albania</option>
                                                                    <option value="Algeria">Algeria</option>
                                                                </select>
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Which Visa?</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="migration_visa" value="Work visa">
                                                    <label class="form-check-label" for="inlineRadio1">Work visa</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="migration_visa" value="Business Visa">
                                                    <label class="form-check-label" for="inlineRadio2">Business Visa</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="migration_visa" value="Other">
                                                    <label class="form-check-label">Other</label>
                                                  </div>
                                              </div>
                                              
                                              <div class="form-group">
                                                <label>If Other, then please specify</label>
                                                <input type="text" class="form-control" name="other_visa" value="{{old('other_visa')}}" placeholder="If Other, then please specify">
                                              </div>
                                            <button type="submit" class="mi7-button btn btn-primary">Submit</button>
                                          </form>
                                        </div>
                                    
                                    
                                </div>
                                <!-- /.Curriculum End -->
                                <div class="tab-pane fade" id="migration">
                                     <div class="des-title mb-25">
                                        <h5>Canada</h5>
                                    </div>
                                    <p class="mb-25">Benefits of Canada immigration include enhancing one’s standard of living. The country is known to be immigrant friendly and hold many residents from foreign countries. The diversity in Canada makes settling easier for immigrants to settle.</p>
                                    <p class="mb-25">Another benefit is that Canada provides state-funded healthcare facilities that enable people from different backgrounds to have access to quality healthcare without worrying about paying heavy fees.</p>
                                    <h4>Family sponsorship</h4>
                                    <p><u>Partner</u>, which includes spouses, de facto partners and fiancés</p>
                                        <p><u>Child</u>, including the dependent child or stepchild of the sponsor, a child adopted from overseas, and orphan relatives (a child under the age of 18, not married or in a de facto relationship, who cannot be cared for by his or her parents)</p>
                                        <p class="mb-25"><u>Parent, and other Family</u>, including aged dependent relative, remaining relative and carer categories.</p>
                                    <h4>Business visas</h4>
                                    <p><u>Express entry- skilled worker visa</u></p>
                                    <p class="mb-25">The Federal Skilled Worker (FSW) program is for people who are selected to immigrate to Canada because of their work experience and skills.</p>
                                    <div class="education-admission-table">
                                    <p class="mb-25">Please fill the following table for assistance with migration :</p>
                                    <form action="{{ route('migration.create') }}" method="post">
                                      @csrf
                                        <div class="form-group">
                                          <label>Full Name</label>
                                          <input type="text" class="form-control" name="migration_name" value="{{old('migration_name')}}" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" class="form-control" name="migration_phone" value="{{old('migration_phone')}}" placeholder="Enter Contact Number">
                                          </div>
                                          <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" class="form-control" name="migration_email" value="{{old('migration_email')}}" placeholder="Email Address">
                                          </div>
                                          <div class="form-group">
                                            <label>Which country are you from?</label>
                                            <select class="form-control" name="migration_from_country">
                                                                <option value="disabled selected hidden">Which country are you from?</option>
                                                                <option value="Åland Islands">Aland Islands</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Which country do you want to migrate to?</label>
                                            <select class="form-control" name="migration_migrate_country">
                                                                <option value="disabled selected hidden">Which country do you want to migrate to?</option>
                                                                <option value="Åland Islands">Aland Islands</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Which Visa?</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="migration_visa" value="Work visa">
                                                <label class="form-check-label" for="inlineRadio1">Work visa</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="migration_visa" value="Business Visa">
                                                <label class="form-check-label" for="inlineRadio2">Business Visa</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="migration_visa" value="Other">
                                                <label class="form-check-label">Other</label>
                                              </div>
                                          </div>
                                          
                                          <div class="form-group">
                                            <label>If Other, then please specify</label>
                                            <input type="text" class="form-control" name="other_visa" value="{{old('other_visa')}}" placeholder="If Other, then please specify">
                                          </div>
                                        <button type="submit" class="mi7-button btn btn-primary">Submit</button>
                                      </form>
                                    </div>
                                </div>
                                <!-- /.Instructor End -->
                                
                                <!-- /.Reviews End -->
                            </div>
                            <!-- /.Tab panes End -->
                        </div>
                        
                        <!-- /.row -->
                    </div>
                    
                    <!-- /.Sidebar End -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
    @endsection
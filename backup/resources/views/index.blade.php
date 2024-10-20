@extends('layouts.master')
@section ('page_meta')
<meta name="description" content="Winfred Services" />
@endsection
@section ('title')
<title>Welcome to Global Connex</title>
@endsection
@section('content') 
@include ('layouts.mainslider')
<section class="blog-area white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-left">
                        <div class="section-title mb-70">
                           
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog-post">
                            <div class="thumb text-center">
                                <a href="blog-details.html"><img src="{{ asset('images/ssupport.jpg') }}" alt="Thumbnail Image" /></a>
                            </div>
                            <div class="blog-content ptb-30 plr-35">
<!--
                                <div class="date-box clearfix mb-20">
                                    <h4 class="theme-color pull-left no-margin">20 <span>jun</span></h4>
                                    <div class="name-comment pl-15">
                                        <h5 class=" mb-5"><span class="theme-color">By:</span> Mark Thomas</h5>
                                        <h5 class="no-margin"><span class="theme-color">Comment:</span> 20</h5>
                                    </div>
                                </div>
-->
                                <a href="blog-details.html">
                                    <h3 class="text-capitalize">JOB ASSISSTANCE</h3>
                                </a>
                                <p>Our team at Global Connex are dedicated to assist you to find a suitable job while you stay or study in Australia, New Zealand or Canada. We have good connections to various job firms that make it easier for you to get a job as soon as possible and with ease.</p>
                                <br>
                                <a href="jobassisstance" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.Blog Post end -->
                    <div class="col-md-4">
                        <div class="blog-post">
                            <div class="thumb text-center">
                                <a href="blog-details.html"><img src="images/geducation.jpg" alt="Thumbnail Image" /></a>
                            </div>
                            <div class="blog-content ptb-30 plr-35">
<!--
                                <div class="date-box clearfix mb-20">
                                    <h4 class="theme-color pull-left no-margin">21 <span>jun</span></h4>
                                    <div class="name-comment pl-15">
                                        <h5 class=" mb-5"><span class="theme-color">By:</span> Mark Thomas</h5>
                                        <h5 class="no-margin"><span class="theme-color">Comment:</span> 22</h5>
                                    </div>
                                </div>
-->
                                <a href="blog-details.html">
                                    <h3 class="text-capitalize">SHORT COARSE</h3>
                                </a>
                                <p>A short course is a learning programme that gives a person specific training in a short amount of time. It gives students a hands-on experience within their field of interest without having to worry about long term university classes.</p>
                                <br>
                                <a href="shortcoarse" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.Blog Post end -->
                    <div class="col-md-4">
                        <div class="blog-post">
                            <div class="thumb text-center">
                                <a href="blog-details.html"><img src="images/gservice.jpg" alt="Thumbnail Image" /></a>
                            </div>
                            <div class="blog-content ptb-30 plr-35">
<!--
                                <div class="date-box clearfix mb-20">
                                    <h4 class="theme-color pull-left no-margin">10 <span>jun</span></h4>
                                    <div class="name-comment pl-15">
                                        <h5 class=" mb-5"><span class="theme-color">By:</span> Mark Thomas</h5>
                                        <h5 class="no-margin"><span class="theme-color">Comment:</span> 10</h5>
                                    </div>
                                </div>
-->
                                <a href="blog-details.html">
                                    <h3 class="text-capitalize">CAREER CONSULTANCY</h3>
                                </a>
                                <p>Career counselling is designed to help students identify their careers and what type of courses they would need in order to get into that field, career consultants give you the tools and knowledge you need to achieve your career goals.</p>
                                <br>
                                <br>
                                
                                <a href="carrerconsultancy" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.Blog Post end -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Popular Course End -->
        <!-- Sign Up Online Start -->
        <section class="signup-area ptb-70 bg-img-1 parallax overlay overlay-1">
            <div class="container">
                
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Sign Up Online End -->
        <!-- Event Section Start -->
        <section class="course-details section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 mobi-mb-50">
                        <div class="single-course mr-minus-30">
                   
       
                            <ul class="nav nav-tabs">
                                <li><a href="#accommodition" data-toggle="tab">Australia</a></li>
                                <li><a href="#jobs" data-toggle="tab">New Zealand</a></li>
                                <li><a href="#migration" data-toggle="tab">Canada</a></li>
                         
                            </ul>
                            <!-- Nav tabs End -->
                            <div class="tab-content ptb-60">
                                <div class="tab-pane active" id="accommodition">
                                    <div class="des-title mb-25">
                                        <h5 class="mb-5">Australia</h5>
                                    </div>
                                    <p class="mb-25">Australia is known for its immigration programs that are simple & effective and does not impose much restrictions on the immigrant. The country offers unrestricted work rights to skilled workers and to their spouses.</p>
                                    <a href="migration" class="btn" >Read more</a>
                                </div>
                                <!-- /.Description End -->
                                <div class="tab-pane fade" id="jobs">
                                    <div class="des-title mb-25">
                                        <h5 class="mb-5">New Zealand</h5>
                                    </div>
                                    <p class="mb-35">After chasing and crossing all the formalities, the next big hurdle to achieve is to secure the right job for meeting the living expenses or to get work exposure in host country. Students without international experience find it difficult...</p>
                                    <a href="migration" class="btn">Read more</a>
                                    
                                    
                                </div>
                                <!-- /.Curriculum End -->
                                <div class="tab-pane fade" id="migration">
                                     <div class="des-title mb-25">
                                        <h5 class="mb-5">Canada</h5>
                                    </div>
                                    <p class="mb-35">Benefits of Canada immigration include enhancing one’s standard of living. The country is known to be immigrant friendly and hold many residents from foreign countries. The diversity in Canada makes settling easier for immigrants to settle.</p>
                                    
                                    <a href="migration" class="btn">Read more</a>
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
        
        
        <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">GLOBAL SETTLEMENT SERVICES</h2>
                            <p>We assist student and new migrants to settle in the new country like Australia, Canada and New Zealand with the job assistance, accommodation and career development services. We have a global experience to manage our clients in different countries and we are always with our clients ready to adhere to their immediate needs. </p>
                            
                            <hr class="line">
                            <br>
                            <a href="jobassisstance" class="btn">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        <!-- Event Section End -->
        <!-- Fun Facts Start -->
       
@endsection
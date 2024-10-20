@extends('layouts.master')
@section ('page_meta')
<meta name="description" content="Winfred Services" />
@endsection
@section ('title')
<title>Welcome to Global Connex</title>
@endsection
@section('content') 
<div class="breadcrumbs-title bg-img-4 parallax overlay dark-5 blank-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-menu ptb-about">
                        <h1 class="l-height">CONTACT US</h1>
                        <ul class="clearfix">
                            <li><a href="index">Home</a> <i class="fa fa-angle-right"></i>
                            <li>CONTACT US</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
<section>
    <div class="page-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="about-details">
                            <div class="container">
                                  
                                <div class="row">
                                    <div class="col-md-6">
                                    @if (session('status'))
                                    <div class="alert alert-success">
                                       {{ session('status') }}
                                    </div>
                                  @endif
                                  @if ($errors->any())
                                      <div class="alert alert-danger">
                                         <ul>
                                  @foreach ($errors->all() as $error)
                                             <li>{{ $error }}</li>
                                  @endforeach
                                         </ul>
                                      </div>
                                  @endif
                                        <form action="{{ route('create') }}" method="post">
                                           @csrf
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Name <span style="color:#bf1e1e">*</span></label>
                                              <input type="text" class="form-control" name="contact_name" value="{{old('contact_name')}}" placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Phone Number <span style="color:#bf1e1e">*</span></label>
                                                <input type="text" class="form-control" name="contact_phone" value="{{old('contact_phone')}}" placeholder="Enter Phone Number*">
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Email Address <span style="color:#bf1e1e">*</span></label>
                                                <input type="email" class="form-control" name="contact_email" value="{{old('contact_email')}}" placeholder="Email Address">
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Your Message</label>
                                                <textarea type="text" class="form-control" name="contact_message"  cols="30" rows="10" placeholder="Enter Your Message">{{ old('contact_message') }}</textarea>
                                              </div>
                                            <button type="submit" class="mi7-button2 btn btn-primary">Send</button>
                                          </form>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <h3>ADDRESS: </h3>
                                        <ul>
                                             <li class="mb-10">Level 34, AMP Tower ,
                                                <br /> 50 Bridge Street <br>Sydney,New South Wales ,2000, Australia </li>
                                            <li><span>Phone:</span> <a href="tel:+61282160934">(02) 8216 0934</a></li>
                                            <li><span>Email:</span> <a href="mailto:info@globalconnex.com.au">info@globalconnex.com.au</a></li>
                                        </ul>
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
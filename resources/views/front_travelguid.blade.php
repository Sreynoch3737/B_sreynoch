@extends('front_master')
@section('content')
       <!-- Navbar & Hero Start -->
   @include('partail.narvbar') 
   <!-- Navbar & Hero End -->
   @push('banner_page')
   @push('banner_page')
   <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
        <h1 class="display-3 text-white animated slideInDown">Travel Guide</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Guide</li>
            </ol>
        </nav>
    </div>
       
   @endpush
   
    <!-- About Start -->
    @include('partail.guide')
    <!-- About End -->

    
    @include('partail.process')

     @include('partail.testimonial')
@endsection

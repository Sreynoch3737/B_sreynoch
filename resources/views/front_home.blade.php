@extends('front_master')
@section('title')
welcome to cambodia
@endsection
@section('content')
    <!-- Navbar & Hero Start -->
   @include('partail.narvbar')
   <!-- Navbar & Hero End -->
   @push('banner_page')
   <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
        </ol>
    </nav>
</div>
   @endpush


   <!-- About Start -->
   @include('partail.about')
   <!-- About End -->


   <!-- Service Start -->
   @include('partail.services')
   <!-- Service End -->


   <!-- Destination Start -->
  @include('partail.distination')
   <!-- Destination Start -->


   <!-- Package Start -->
   @include('partail.package')
   <!-- Package End -->


   <!-- Booking Start -->
   @include('partail.booking')
   <!-- Booking Start -->


   <!-- Process Start -->
   @include('partail.process')
   <!-- Process Start -->


   <!-- Team Start -->
   @include('partail.guide')
   <!-- Team End -->


   <!-- Testimonial Start -->
   @include('partail.testimonial')
   <!-- Testimonial End -->
       

   <!-- Footer Start -->
   @include('partail.footer')
   <!-- Footer End -->


   
@endsection


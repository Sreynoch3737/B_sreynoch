<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
       return view('front_home');
    }
   
   public function about()
    {
       $data['title']="About Us";
       return view('front_about',$data);
    }
    public function service()
    {
       $data['title']="Service";
       return view('front_service',$data);
    }
    public function package()
    {
      $data['title']="package";
       return view('front_package',$data);
    }
    public function booking()
    {
      $data['title']="booking";
       return view('front_booking',$data);
    }
    public function distination()
    {
      $data['title']="distination";
       return view('front_distination',$data);
    }
    public function travelguide()
    {
      $data['title']="travelguide";
       return view('front_travelguid',$data);
    }
    public function testimonial()
    {
      $data['title']="testimonial";
       return view('front_testimonial',$data);
    }
   }

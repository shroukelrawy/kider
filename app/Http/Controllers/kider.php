<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kider extends Controller
{
   public function kider(){
      $title="kider";
    return view('kider',compact('title'));
   }
   public function about(){
      $title="about";
    return view('about',compact('title'));
   }
   public function class(){
      $title="classes";
    return view('class',compact('title'));
   }
   public function facility(){
      $title="facilities";
    return view('facility',compact('title'));
   }
   public function teams(){
      $title="teams";
    return view('teams',compact('title'));
   }
   public function beteacher(){
      $title="become a teacher";
    return view('beteacher',compact('title'));
   }
   public function getappoint(){
      $title="take an appointment";
    return view('getappoint',compact('title'));
   }
   public function testemon(){
      $title="testemonials";
    return view('testemon',compact('title'));
   }
   public function error(){
      $title="error";
    return view('error',compact('title'));
   }
   public function contact(){
      $title="contact us";
    return view('contact',compact('title'));
   }
}

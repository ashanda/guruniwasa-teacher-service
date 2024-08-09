@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">CLASS FEES
         </h1>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row  justify-content-center middle-hight">
      <div class="col-12">
         <div class="row justify-content-end">
            <div class="col-lg-3 text-center pb-3">
               <span
                  class=" w-100 text-uppercase font-14 text-white rounded-pill 
                  py-2 px-3 bg-success fw-500 align-items-center text-white hvr-shrink"> STUDENT COUNT 500

               </span>
            </div>
         </div>
      </div>
      <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
          
            <p class="font-20 fw-bolder text-dark text-center pt-4">GRADE 6 SCIENCE
                THEORY ENGLISH
                MEDIUM
                
            </p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-12 text-white ">
                  <a href="{{ route('web.fees.month_fees') }}"
                     class=" w-100 text-uppercase font-13 text-white rounded-pill py-2 px-3 
                     bg-info fw-500 align-items-center text-white hvr-shrink">
                     PAID STUDENT COUNT 150

                  </a>
               </div>
            </div>
         </div>
      </div>
   
      
   </div>
</div>
@endsection

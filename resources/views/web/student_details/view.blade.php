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
         <h1 class="font-36 fw-bold text-uppercase text-purple">STUDENT ANALYSING
         </h1>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="container">
      <div class="row middle-hight">
         @foreach ($body['data']['subject'] as $subject)
                <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
                    <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">


                        <p
                            class="font-20 border-2 text-uppercase fw-bold text-purple py-3 ">
                            {{ $subject['grade']['gname'] }} <br>{{ $subject['sname'] }}
                            
                        </p>
                        <div class="row justify-content-center">
                            <div class="col-lg-11 text-white ">
                                <a href="{{ route('web.student.details_view') }}"
                                    class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500 
                                    align-items-center   hvr-shrink">STUDENT COUNT {{ $subject['students']['student_count'] }}
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            

         <div class="col-12">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <div class="alert alert-primary px-1" >
                     <p class="text-center  font-13 fw-bold text-purple">
                        ACTIVE ACCOUNTS
                     </p>
                     <p class="text-center  font-13 fw-bold text-purple">
                        (Atleast for
                        1 week)
                     </p>
                     <p class="text-center  font-13 fw-bold text-purple">

                     </p>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
             <div class="alert alert-info px-1 text-center" >
                <a href="{{ route('web.student.inactive_account') }}" class="hvr-shrink">

                  <p class="text-center  font-13 fw-bold text-purple">
                    INACTIVE ACCOUNTS

                   </p>
                   <p class="text-center  font-13 fw-bold text-purple">
                    (Havent
                    logged for 1 week)
                   </p>
                </a>
                </div>
            
             </div>
             <div class="col-lg-3 col-sm-6">
                <div class="alert alert-primary px-1" >
                   <p class="text-center  font-13 fw-bold text-purple">
                    PAID ACCOUNTS
                   </p>
                   <p class="text-center  font-13 fw-bold text-purple">
                    (Payment done
                    for current month)

                   </p>
                </div>
             </div>
             <div class="col-lg-3 col-sm-6">
              
                <div class="alert alert-info text-center px-1" >
                    <a href="{{ route('web.student.non_paid') }}" class="hvr-shrink">
                    
                   <p class="text-center  font-13 fw-bold text-purple">
                    NON PAID ACCOUNTS
                   </p>
                   <p class="text-center  font-12 fw-bold text-purple">
                    (Payment n't done for current
                    month)

                   </p>
                </a>
                </div>
               
             </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@endsection

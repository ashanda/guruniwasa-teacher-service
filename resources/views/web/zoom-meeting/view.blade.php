@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp

<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">LINK ZOOM MEETING
         </h1>
         @php
         $currentDateTime = Carbon::now('Asia/Colombo');
         @endphp
         <p class="font-20 fw-500 text-purple">{{ $currentDateTime->format('d.m.Y | l | h.i A') }}
         </p>
      </div>



   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight justify-content-center">
      @foreach ($body['data']['current_lessons'] as $zoomMeeting)
      <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
            <i class="fa-solid fa-circle-info fs-1 text-purple mb-3"></i>

            <p
               class="font-20 border-2 text-uppercase fw-bold text-purple py-3 rounded-35  border border-primary text-center bg-light-blue">
               <span class="font-13">{{ $zoomMeeting['lesson_date'] }}
            </span><br>
               {{ $zoomMeeting['day_of_week'] }}
            </p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white ">
                  <a href="{{ route('web.zoom-metting.list',['id' => $zoomMeeting['id']]) }}"
                     class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">See
                  More</a>
               </div>
            </div>
         </div>
      </div>
      @endforeach

     <div class="col-12 pt-3">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
             <p class="font-14 fw-bolder text-danger">* EVERY TEACHER IS RESPONSIBLE FOR MAINTAINING ALL THE ABOVE SLOTS EACH DAY.
            </p>
            <p class="font-14 fw-bolder text-danger pb-3">මෙය සෑම දිනකම යාවත්කාලීන කිරීම ගුරුවරයා සතු වගකීමකි</p>


            <a href="{{ route('web.analysing-report')}}" class="hvr-shrink text-white gradient-background-1 py-2 px-5 justify-content-around fw-bolder rounded-35 font-14"  >
                CLASS ANALYSING REPORT

                </a>
            </div>

     </div>
   </div>
</div>
</div>
@endsection

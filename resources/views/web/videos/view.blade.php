@extends('web.layouts.app')
@section('content')
@if(session()->has('teacher_data'))
    @php
        $teacherData = session('teacher_data');
    @endphp
@else
     <script>window.location = "{{ route('web.logout') }}";</script>
@endif

@php
use Carbon\Carbon;
$currentMonth = Carbon::now('Asia/Colombo')->format('m');
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
         <h1 class="font-36 fw-bold text-uppercase text-purple">LINK YOUTUBE CLASS VIDEOS
         </h1>
         <p class="font-20 fw-500 text-purple">
            < {{ $teacherData['name'] }} >
         </p>
      </div>
   </div>
</div>


<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
    <div class="row middle-hight justify-content-center">
      @php
         $currentDateTime = Carbon::now('Asia/Colombo');
         @endphp
       @php $x = 1; @endphp
    @for ($i = 0; $i < $currentMonth; $i++)
       <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
          <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
            <h3 class="font-20 fw-bold pb-3"><i class="fa-solid fs-5 text-danger fa-circle"></i> REC
            </h3>
             <p
                class="font-20 border-2 text-uppercase fw-bold text-purple py-3 rounded-35  border border-primary text-center bg-light-blue">
                 {{ $months[$i]['english'] }}<br>
                    {{ $months[$i]['local'] }}
             </p>
             <div class="row justify-content-center pt-4">
                <div class="col-lg-10 text-white ">
                   <a href="{{ route('web.video.subject.list', ['month' => $x]) }}"
                      class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">See
                   More</a>
                </div>
             </div>
          </div>
           </div>
          @php $x++; @endphp
    @endfor
      









       
     <div class="col-12 pt-3">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
             <p class="font-14 fw-bolder text-danger">
                ⚠ All teachers must link the class video into the LMS system after one day of conducting the class
            </p>
            <p class="font-14 fw-bolder text-danger pb-3"> ⚠  සියලුම ගුරුවරුන් පන්තිය පැවැත්වූ දිනට පසු දින අදාල පන්ති වීඩියෝව අනිවාර්යයෙන්ම LMS පද්ධතියට ඇතුලත් කල යුතුය.</p>

 
            </div>

     </div>
    </div>
 </div>

</div>






 
@endsection
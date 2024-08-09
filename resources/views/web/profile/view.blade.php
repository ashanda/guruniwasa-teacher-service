@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
        <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
            <i class="fa-regular fa-circle-left hvr-icon"></i>
            BACK TO HOME
            </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center pt-lg-0 pt-3">
         <p class="font-17 fw-bolder text-purple">Hello, <span class="fst-italic">< Nadishan Chathuranga ></span>
         </p>
         <h1 class="font-36 fw-bold text-uppercase text-purple pt-lg-0 pt-1">MY PROFILE

         </h1>
      </div>
      <div class="col-lg-3 col-sm-3">

      </div>
   </div>
</div>




<div class="container-fluid pt-4 pb-5 px-lg-5 ">
    <div class="col-12">
       <div class="row justify-content-center">
          <div class="col-5">
             <div class="row align-items-center">
                <div class="col-3">
                   <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                      alt="Guru Niwasa LMS">
                </div>
                <div class="col-9">
                   <h3 class="font-20 fw-bold text-purple pb-1">ABHIMAN WITHAKSHANA</h3>
                   <h3 class="font-14 fw-bold text-purple pb-1">SCIENCE/ SCIENCE IQ
                </h3>

             </div>
          </div>
       </div>















       <div class="row justify-content-around bg-white rounded-35 px-lg-5 py-3 mt-3 border-new">
        <div class="col-lg-6 pt-3">
        <p class="font-18 fw-500 text-purple pb-2">User ID - <b>GNI 00001</b>
        </p>
        <p class="font-18 fw-500 text-purple pb-2">Name -
            <b>ABHIMAN WITHAKSHANA</b>
        </p>
        <p class="font-18 fw-500 text-purple pb-2">Grade -
             <b>- 6,7,8,9,10,11,2023 OL</b>
        </p>
        <p class="font-18 fw-500 text-purple pb-2">Subjects -

            <b>Maths</b>


        </p>

        <p class="font-18 fw-500 text-purple pb-2">Medium -
            <b>SINHALA, ENGLISH</b>
        </p>

        </div>
        <div class="col-lg-6 pt-3">

            <p class="font-18 fw-500 text-purple pb-2">Address -
                 <b>295, Nugegoda Rd, Kohuwala</b>
            </p>
            <p class="font-18 fw-500 text-purple pb-2">District -
                 <b>Colombo</b>
            </p>
            <p class="font-18 fw-500 text-purple pb-2">Town -
                <b>Kohuwala</b>
            </p>

            <p class="font-18 fw-500 text-purple pb-2">Contact No - <b>0772879970</b>
            </p>
            <p class="font-18 fw-500 text-purple pb-2">Secondary Contact No. - <b>0772879970</b>
            </p>
        </div>


      </div>
    </div>
 </div>
 </div>


@endsection

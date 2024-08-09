@extends('web.layouts.app')
@section('content')
 
<div class="container-fluid">
<div class="row align-items-center pt-2">
   <div class="col-lg-4 col-sm-4 pb-lg-0 pb-3">
      <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
      <i class="fa-regular fa-circle-left hvr-icon"></i>
      BACK TO HOME
      </a>
    
   </div>
   <div class="col-lg-4 col-sm-4 text-center">
      <h1 class="font-36 fw-bold text-uppercase text-purple">
        VIEW SLIP
      </h1>
      <p class="font-20 fw-500 text-purple">JANUARY
     </p>
   </div>
   <div class="col-lg-4 col-sm-4 pt-lg-0 pt-3">
       
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="container">
      <div class="row  justify-content-center middle-hight">
          <div class="col-lg-6">

            <img class="d-block w-100 " src="{{asset('themes/default/img/Payslip-format.webp')}}"
            alt="Guru Niwasa LMS">
          </div>
          
      </div>
   </div>
</div>
@endsection
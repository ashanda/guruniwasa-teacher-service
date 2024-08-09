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
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">INACTIVE STUDENT DETAILS
         </h1>
         <p class="font-18 fw-bold text-purple">GRADE 6 SCIENCE THEORY ENGLISH MEDIUM ABHIMAN SIR
         </p>
      </div>
      <div class="col-lg-3 text-end">
         <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="table-responsive">
         <table id="inactiveAccountTable" class="table table-striped table-hover table-bordered">
            <thead class="text-white gradient-background text-uppercase fw-light font-14">
               <tr>
                  <th>NAME</th>
                  <th>STUDENT PHOTO</th>
                  <th>PHONE NUMBER</th>
                  <th>PARENT
                     PHONE
                     NO
                  </th>
                  <th>PAYMENT
                     HISTORY
                  </th>
                  <th>ACCOUNT TYPE</th>
                  <th>Remarks</th>
                  <th>Followed By</th>
               </tr>
            </thead>
            <tbody class="font-14 align-items-center fw-500">
               <tr   >
                  <td> LITHULI VIRUDINI</td>
                  <td><img class="d-block w-50 mx-auto rounded-circle" src="/themes/default/img/place-holder.png" alt="Guru Niwasa LMS"></td>
                  <td> </td>
                  <td> </td>
                  <td> 
                  </td>
                  <td>NORMAL </td>
                  <td> Extra activities</td>
                  <td> Thilina</td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
</div>
@endsection
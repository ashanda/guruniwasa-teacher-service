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
          
         <h1 class="font-30 fw-bold text-uppercase text-purple">CLASS FEES

         </h1>
         <p class="font-20 fw-500 text-purple">GRADE 6 SCIENCE THEORY ENGLISH MEDIUM ABHIMAN SIR
            JANUARY
         </p>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3">
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="row justify-content-end">
            <div class="col-lg-3 col-sm-5 col-8 text-end pb-lg-0 pb-2">
               <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
               <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
            </div>
         </div>
         <div class="col-12">
            <div class="table-responsive  ">
                <table id="subjectFeesList" class="table table-striped table-hover table-bordered">
                   <thead class="text-white gradient-background text-uppercase fw-light font-14">
                      <th>STUDENT NAME</th>
                      <th>STUDENT ID</th>
                      <th>STUDENT DETAILS</th>
                      <th>AMOUNT</th>
                      <th>RETENTION
                        (10%)
                      </th>
                      <th>Sub Amount</th>
                      </tr>
                   </thead>
                   <tbody class="t align-items-center">
                      <tr>
                        <td>PATHUM SHANAKA</td>
                        <td>GNI 0001</td>
                        <td>  
                             <a href="http://localhost:8000/analysis-report" 
                             class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500 
                            text-center   hvr-shrink">   STUDENT DETAILS
    
                        </a></td>
                        <td>1200.00 </td>
                        <td>(120.00)</td>
                        <td>1080.00</td>
                          
                         {{-- <td><button type="button" class="btn btn-danger font-12 px-3 fw-bolder
                             rounded-pill text-uppercase mb-2">ABSENT</button></td> --}}
                      </tr>
                   </tbody>
                </table>
             </div>


             
         </div>

         <div class="row justify-content-lg-end justify-content-sm-end  justify-content-center  pt-3 text-lg-end 
         text-sm-end text-center">
            <div class="col-lg-2 col-sm-2 col-4">
              <h3 class="font-24 fw-bold text-purple">TOTAL</h3>
            </div>
            <div class="col-lg-2 col-sm-2 col-4">
        <p class="font-20 fw-bold text-dark">XXX,XXX.XX</p>
            </div>
          </div>
      </div>
   </div>
</div>
@endsection
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
         <h1 class="font-36 fw-bold text-uppercase text-purple">STUDENT VIDEOS
         </h1>
         @php
         $currentDateTime = Carbon::now('Asia/Colombo');
         @endphp
         <p class="font-20 fw-500 text-purple">{{ $currentDateTime->format('d.m.Y | l | h.i A') }}
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
     





<div class="col-12">
    <h3 class=" font-20 fw-bolder   text-purple pb-1">
        GRADE 7 SCIENCE THEORY ENGLISH MEDIUM

    </h3>
    <h3 class=" font-17 fw-bolder   text-purple pb-4">
        Grade 7 - Science - LESSON
        EXPLANATIONS BY STUDENT
    </h3>
</div>





    <div class="col-12">
        <div class="table-responsive">
            <table id="studentVideoSubjectTbl" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <tr>
                     <th>STUDENT NAME</th>
                     <th>TOPIC</th>
                  
                     <th>GOOGLE DRIVE LINK </th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr   >
                     <td class=" py-3 ">
                        <form class="row g-3 py-1">
                            <div class="col-lg-8">
                               <input type="password" class="form-control py-1 font-13 fw-500 rounded-3 border-dark"
                                  placeholder="Enter Search Student">
                            </div>
                            <div class="col-lg-4 col-5">
                               <button type="submit" class="btn btn-primary
                                    font-13 text-white bg-dark px-2 py-1 w-100 rounded-pill font-13 text-center">
                                  <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                         </form>
                    </td>
                      
                     <td> 
                        
                        <form class="row g-3 py-1">
                            <div class="col-lg-8">
                               <input type="password" class="form-control py-1 font-13 fw-500 rounded-3 border-dark"
                                  placeholder="TYPE TOPIC">
                            </div>
                            <div class="col-lg-4 col-5">
                               <button type="submit" class="btn btn-primary
                                  btn font-13 text-white bg-success px-2 py-1 w-100 rounded-pill font-13 text-center">SAVE</button>
                            </div>
                         </form>

                     </td>
                     <td>
                        <form class="row g-3 py-1">
                           <div class="col-lg-8">
                              <input type="password" class="form-control py-1 font-13 fw-500 rounded-3 border-dark"
                                 placeholder="Enter Past URL">
                           </div>
                           <div class="col-lg-4 col-5">
                              <button type="submit" class="btn btn-primary
                                 btn font-13 text-white bg-warning px-2 py-1 w-100 rounded-pill font-13 text-center">Edit</button>
                           </div>
                        </form>
                     </td>
                  </tr>
                  <tr   >
                    <td class=" py-3 ">JANIDU HESHAN
                    </td>
                     
                    <td> 
                       
                       <form class="row g-3 py-1">
                           <div class="col-lg-8">
                              <input type="password" class="form-control py-1 font-13 fw-500 rounded-3 border-dark"
                                 placeholder="TYPE TOPIC">
                           </div>
                           <div class="col-lg-4 col-5">
                              <button type="submit" class="btn btn-primary
                                 btn font-13 text-white bg-warning px-2 py-1 w-100 rounded-pill font-13 text-center">Edit</button>
                           </div>
                        </form>

                    </td>
                    <td>
                       <form class="row g-3 py-1">
                          <div class="col-lg-8">
                             <input type="password" class="form-control py-1 font-13 fw-500 rounded-3 border-dark"
                                placeholder="Enter Past URL">
                          </div>
                          <div class="col-lg-4 col-5">
                             <button type="submit" class="btn btn-primary
                                btn font-13 text-white bg-success px-2 py-1 w-100 rounded-pill font-13 text-center">Publish</button>
                          </div>
                       </form>
                    </td>
                 </tr>
               </tbody>
            </table>
         </div>
    </div>
   </div>
</div>
</div>
@endsection
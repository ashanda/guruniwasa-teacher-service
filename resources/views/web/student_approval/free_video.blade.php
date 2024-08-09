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
         <h1 class="font-30 fw-bold text-uppercase text-purple">FREE VIDEO ACCESS REQUEST


         </h1>
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
         <div class="row justify-content-between align-items-center pb-3">
            <div class="col-lg-7">
               <form action="">
                  <div class="row align-items-center">
                     <div class="col-lg-4 col-sm-4 col-6 pt-2">
                        <label class="form-label font-14 fw-bold text-purple  mb-0">Subject</label>
                        <select class="form-select fw-500 rounded-3 border-dark font-12 mb-2" aria-label="Default select example">
                           <option selected="">Select Subject</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="col-lg-4 col-sm-4 col-6 pt-2">
                        <label class="form-label font-14 fw-bold text-purple  mb-0">Grade</label>
                        <select class="form-select fw-500 rounded-3 border-dark font-12 mb-2" aria-label="Default select example">
                           <option selected=""> Select Grade</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="col-lg-4 col-sm-4 col-8 pt-lg-4 pt-sm-4 pt-1">
                        <button type="submit" class="btn hvr-shrink text-white
                           gradient-background-1 py-1 px-5 justify-content-around rounded-35 font-14 fw-500">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="row ">
            <div class="col-lg-9 col-sm-7  pb-3">
               <div class="row">
                  <div class="col-lg-3">
                     <ul class="d-flex">
                        <li>
                           <span href="{{ route('web.pending.list') }}"
                              class=" font-12 fw-bolder text-white mt-2 bg-primary py-1 px-5 rounded-3 ">  PENDING
                           </span>
                        </li>
                        <li>
                           <div class="notification">1</div>
                        </li>
                     </ul>
                  </div>
                   
               </div>
            </div>
         </div>
         <div class="col-12">







            <div class="table-responsive">
                <table id="freeVideoTable" class="table table-striped table-hover table-bordered">
                   <thead class="text-white gradient-background text-uppercase fw-light font-14">
                      <tr>
                         <th>DATE</th>
                         <th>STUDENT
                            PHOTO</th>
                         <th>NAME</th>
                         <th>DETAILS</th>
                         <th>SCHOLARSHIP
                            CATEGORY
                            </th>
                         <th>GRADE
                         </th>
                         <th>SUBJECTS </th>
                         <th>DOCUMENT</th>
                         <th>ABHIMAN SIR
                            APPROVAl</th>
                         <th>YOUR
                            APPROVAL
                         </th>
                      </tr>
                   </thead>
                   <tbody class="font-14 align-items-center fw-500">
                      <tr   >
                        <td> </td>
                         <td><img class="d-block w-50 mx-auto rounded-circle" src="/themes/default/img/place-holder.png" alt="Guru Niwasa LMS"></td>

                         <td> </td>
                         <td>
                            <span  class=" font-12 fw-500 text-white mt-2 bg-primary py-2 px-5 rounded-3 ">  VIEW
                            </span> </td>
                         <td>
                         FREE CARD
                        </td>
                         <td> </td>
                         <td> </td>
                         <td>
                            <span  class=" font-12 fw-500 text-white mt-2 bg-primary py-2 px-5 rounded-3 ">  VIEW
                            </span>
                         </td>
                         <td>
                            <span  class=" font-12 fw-500 text-white mt-2 bg-primary py-2 px-5 rounded-3 ">  APPROVED
                            </span>
                         </td>
                         <td> 
                            <p  class=" font-12 fw-500 text-white mb-2 bg-primary py-2 px-1  text-center rounded-3 ">  APPROVED
                                
                            <p   class=" font-12 fw-500 text-white text-center   bg-danger py-2 px-1 rounded-3 ">  REJECT
                         
                     </p>
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
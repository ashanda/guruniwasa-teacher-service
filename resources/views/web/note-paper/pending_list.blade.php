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
         <h1 class="font-30 fw-bold text-uppercase text-purple">STUDENT NOTES & PAPER ANSWERS

         </h1>
         <p class="font-18 fw-bold text-purple">PENDING LIST

         </p>
      </div>
      <div class="col-lg-3 col-sm-5 col-8 text-end pb-lg-0 pb-2">
        <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
        <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
     </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
       
         
         <div class="table-responsive  ">
            <table id="pendingListTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>UPLOAD DATE</th>
                  <th>STUDENT NAME</th>
                  <th>GRADE AND SUBJECT</th>
                  <th>TOPIC</th>
                  <th>DOCUMENT</th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr>
                     

                     <td>01.01.2024
                     </td>
                     <td>KAVEESHA PERERA
                     </td>
                     <td>GRADE 6 SCIENCE
                        THEORY ENGLISH
                        MEDIUM
                        
                    </td>
                    <td>UNIT 01 - IMPORTANCE OF
                        MICROORGANISMS
                    </td>

                    <td><button type="button" class="btn btn-success font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">APPROVE</button>
                        <button type="button" class="btn btn-warning font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">REJECT</button><br>
                        <a data-bs-toggle="modal" data-bs-target="#pendingView"
                         class=" w-100 text-center font-12  rounded-pill py-2 px-3 bg-primary fw-bolder
                          align-items-center text-white hvr-shrink">VIEW</a>
                    </td>


<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="pendingView" tabindex="-1" aria-labelledby="pendingView" aria-hidden="true">
   <div class="modal-dialog ">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" >Comment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form action="">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label font-14 fw-bold text-purple  mb-0">Add Comment</label>
                    <textarea class="form-control fw-500 rounded-3 border-dark" id="exampleFormControlTextarea1" rows="5"></textarea>
                    <button type="button" class="btn  font-13 text-white gradient-background-1 py-2 px-5 mt-3 ">Submit</button>
                  </div>


            </form>
         </div>
      </div>
   </div>
</div>

                  </tr>
               </tbody>
            </table>
         </div>
      
   </div>
</div>
@endsection
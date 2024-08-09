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
         <h1 class="font-30 fw-bold text-uppercase text-purple">STUDENT NOTES AND PAPER ANSWERS
         </h1>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="row justify-content-end  align-items-center">
            <div class="col-lg-9 col-sm-7  pb-3">
               <ul class="d-flex">
                  <li>
                     <a href="{{ route('web.pending.list') }}"   class="btn  font-15 text-white mt-2   gradient-background-1 py-2 px-5  ">VIEW PENDING
                     </a>
                  </li>
                  <li>
                     <div class="notification">1</div>
                  </li>
               </ul>
            </div>
            <div class="col-lg-3 col-sm-5 col-8 text-end pb-lg-0 pb-2">
               <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
               <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
            </div>
         </div>
         <div class="table-responsive  ">
            <table id="notePaperTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>GRADE AND SUBJECT</th>
                  <th>UPLOADS</th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr>
                     <td>GRADE 6 SCIENCE THEORY ENGLISH MEDIUM
                     </td>
                     <td>
                        <a href="{{  route('web.note.view') }}" 
                           class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 
                           bg-primary fw-500 align-items-center text-center  hvr-shrink">VIEW MORE
                        </a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
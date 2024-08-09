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
         <h1 class="font-36 fw-bold text-uppercase text-purple"> BIRTHDAY LIST
         </h1>
         @php
         $currentDateTime = Carbon::now('Asia/Colombo');
         @endphp
         <p class="font-20 fw-500 text-purple">{{ $currentDateTime->format('d.m.Y | l | h.i A') }}
         </p>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3">
         <div class="row justify-content-end">
            <div class="col-lg-11">
               <form action=" " method="get">
                  <input class="border border-info rounded-pill font-15 fw-500 text-dark py-2 form-control " type="search" name="searchKey" id="search" placeholder="Search" aria-label="Search" style=" outline: none;">
                  <button type="submit " class="border-0 serch-btn">
                  <i class="fa-solid fa-magnifying-glass fs-4"></i>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row justify-content-between align-items-center pb-3">
      <div class="col-lg-7">
         <form action="">
            <div class="row align-items-center">
               <div class="col-lg-4 col-sm-4 col-6 pt-2">
                  <label class="form-label font-14 fw-bold text-purple  mb-0">Students</label>
                  <select class="form-select fw-500 rounded-3 border-dark font-12 mb-2" aria-label="Default select example">
                     <option selected="">Select Students</option>
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
   <div class="row middle-hight">
      <div class="col-lg-4 col-sm-6  mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center schedule-card" style="height: 536px;">
            <div class="row align-items-center pt-2 pb-3">
               <div class="col-3">
                  <img class="d-block w-100 rounded-circle" src="/themes/default/img/place-holder.png" alt="Guru Niwasa LMS">
               </div>
               <div class="col-9 text-start">
                  <h3 class="font-18 fw-bold  text-purple">JANIDU HESHAN
                  </h3>
                  <p class="font-14 fw-500 text-dark">OFFICE MEMBER
                  </p>

                  
                  <div class=" py-2 fw-bolder text-center alert alert-warning font-13 text-cente fw-boldr rounded-pill" role="alert">
                    JANUARY 08
                  </div>
               </div>
            </div>
            <form action="">
               <p class="font-14 fw-500 text-dark text-start">NAME - <span class="fw-bolder"> JANIDU HESHAN
                  </span>
               </p>
               <p class="font-14 fw-500 text-dark text-start">DESIGNATION - <span class="fw-bolder text-dark">   TELE SALES EXCUTIVE
                  </span>
               </p>
               <p class="font-14 fw-500 text-dark text-start">PHONE NUMBER - <span class="fw-bolder text-dark">  Science Theory | English Medium |
                  Abhiman Sir
                  </span>
               </p>
               <div class="row g-3   pt-3">
                  <div class="col-3 px-lg-0">
                     <label class="col-form-label text-start font-13 fw-bold text-purple">TYPE A WISH </label>
                  </div>
                  <div class="col-9">
                     <textarea class="form-control font-14  fw-500 rounded-3 border-dark" rows="5"></textarea>
                  </div>
               </div>
               <div class="row justify-content-center pt-4">
                  <div class="col-lg-10 text-white">
                     <a href=" " class="  text-uppercase font-14 text-white rounded-pill 
                        py-2 px-5 bg-primary fw-500 align-items-center   hvr-shrink">SEND</a>
                  </div>
               </div>
            </form>
            <div class="row pt-2">
               <div class="col-lg-6 col-6">
                  <a class=" " data-bs-toggle="modal" data-bs-target="#editWish">
                     <ul class="d-flex justify-content-center font-14 text-white 
                        my-1 py-2 px-3 bg-secondary fw-500 align-items-center  rounded-pill">
                        <li><i class="fa fa-pencil"></i></li>
                        <li class="d-none tab-d-none d-sm-block ps-2"> Edit   </li>
                     </ul>
                  </a>
                  <div class="modal fade" id="editWish" data-bs-backdrop="static" 
                     tabindex="-1" aria-labelledby="editWish" aria-hidden="true" >
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                 Edit Birthday Wish
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form action="">
                                 <div class="modal-body ">
                                    <div class="row g-3   pt-3">
                                       <div class="col-3 px-lg-0">
                                          <label class="col-form-label text-start font-13 fw-bold text-purple">TYPE A WISH </label>
                                       </div>
                                       <div class="col-9">
                                          <textarea class="form-control font-14  fw-500 rounded-3 border-dark" rows="5"></textarea>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <button type="button" class="btn text-uppercase font-12 
                                       text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500   text-white ">Send</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-6">
                  <a class=" " data-bs-toggle="modal" data-bs-target="#delectWish">
                     <ul class="d-flex justify-content-center font-14 text-white 
                        my-1 py-2 px-3 bg-danger fw-500 align-items-center  rounded-pill">
                        <li><i class="fa fa-trash"></i></li>
                        <li class="d-none tab-d-none d-sm-block ps-2"> Deleted </li>
                     </ul>
                  </a>
                  <div class="modal fade" id="delectWish" data-bs-backdrop="static" 
                     tabindex="-1" aria-labelledby="delectWish" aria-hidden="true" >
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                 Remove   WISH
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form action="">
                                 <div class="modal-body ">
                                    <div class="mb-2">
                                       <p class="font-15 fw-500 text-dark pb-2">
                                          Are you sure you want to remove this WISH from the system ?
                                          This action cannot be undone.
                                       </p>
                                    </div>
                                    <div class="text-end">
                                       <button type="submit" class="btn btn-primary font-15 fw-500 ">Yes</button>
                                       <button type="button" class="btn btn-secondary font-15 fw-500 " data-bs-dismiss="modal">Close</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-12 pt-4">
         <div class="row">
            <div class="col-12">
               <p class="font-13 fw-bolder text-danger text-uppercase">
                  Will be displayed for 14 days until the birthday. Will expired after 3 days of the birthday
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
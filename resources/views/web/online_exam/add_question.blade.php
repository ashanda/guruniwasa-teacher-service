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
         <h1 class="font-36 fw-bold text-uppercase text-purple">ADD QUESTIONS
         </h1>
         <p class="font-20 fw-500 text-purple">GRADE 6 SCIENCE THEORY ENGLISH MEDIUM ABHIMAN SIR
            JANUARY - MONTHLY TEST
         </p>
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
                     <div class="col-12">
                        <label class="form-label font-14 fw-bold text-purple  mb-0">TEST TYPE </label>
                     </div>
                     <div class="col-3 pt-2">
                        <select class="form-select fw-500 rounded-3 border-dark font-12 mb-2" aria-label="Default select example">
                           <option selected="">MONTHLY TEST</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="col-3 pt-2">
                        <select class="form-select fw-500 rounded-3 border-dark font-12 mb-2" aria-label="Default select example">
                           <option selected="">TERM TEST</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="col-3 pt-2">
                        <select class="form-select fw-500 rounded-3 border-dark font-12 mb-2" aria-label="Default select example">
                           <option selected="">UNIT TEST</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="col-3  ">
                        <button type="submit" class="btn hvr-shrink text-white
                           gradient-background-1 py-1 px-5 justify-content-around rounded-35 font-14 fw-500">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-3 text-end">
               <p class="font-20 fw-bolder text-purple">TOTAL MARKS - 85</p>
            </div>
         </div>
         <div class="row justify-content-center pb-3 mb-2 border-bottom">
            <div class="col-11">
               <p class="font-15 fw-500 text-dark">01. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries ?</p>
               <a   data-bs-toggle="modal" data-bs-target="#addImage">
                  <ul class="d-flex justify-content-center font-13
                     text-white my-3 py-2 px-3 bg-success fw-500 align-items-center  rounded-pill">
                     <li><i class="fa-solid fa-upload"></i></li>
                     <li class="d-none tab-d-none d-sm-block ps-2"> Add Image </li>
                  </ul>
               </a>
               <div class="modal fade" id="addImage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                              Add Image
                           </h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <form action="">
                              <div class="modal-body ">
                                 <div class="mb-3">
                                    <input class="form-control font-14 fw-500 text-dark" type="file" id="formFileMultiple" multiple="">
                                 </div>
                              </div>
                              <button type="button" class="btn text-uppercase font-12 text-white rounded-pill py-2 px-4 bg-primary fw-500   text-white hvr-shrink ">Submit</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row align-items-center pt-2">
                  <div class="col-lg-6 pb-2">
                     <div class="row align-items-center">
                        <div class="col-10">
                           <p class="font-14 fw-bolder text-dark">
                              01. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                           </p>
                        </div>
                        <div class="col-1">
                           <i class="fa-solid fa-circle-check text-danger fs-4"></i>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 pb-2">
                     <div class="row align-items-center">
                        <div class="col-10">
                           <p class="font-14 fw-bolder text-dark">
                              02. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                           </p>
                        </div>
                        <div class="col-1">
                           <i class="fa-solid fa-circle-xmark text-danger fs-4"></i>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 pb-2">
                     <div class="row align-items-center">
                        <div class="col-10">
                           <p class="font-14 fw-bolder text-dark">
                              03. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                           </p>
                        </div>
                        <div class="col-1">
                           <i class="fa-solid fa-circle-check text-success fs-4"></i>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 pb-2">
                     <div class="row align-items-center">
                        <div class="col-10">
                           <p class="font-14 fw-bolder text-dark">
                              04. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                           </p>
                        </div>
                        <div class="col-1">
                           <i class="fa-solid fa-circle-xmark text-danger fs-4"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row align-items-center ">
                  <div class="col-10">
                     <a href="{{ route('web.online.questions')}}" class=" text-uppercase font-12 text-white rounded-pill py-2 px-5 bg-primary fw-500 align-items-center   hvr-shrink">
                     ADD MORE
                     </a>
                  </div>
                  <div class="col-2 text-center">
                     <p class="font-17 fw-bolder text-purple border border-2 rounded-pill border-secondary  py-2 px-3 bg-light">Score 2/2
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
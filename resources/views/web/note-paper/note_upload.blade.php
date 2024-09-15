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
         <h1 class="font-30 fw-bold text-uppercase text-purple">STUDENT NOTES & PAPER ANSWERS
         </h1>
         <p class="font-18 fw-bold text-purple">GRADE 6 SCIENCE THEORY ENGLISH MEDIUM

         </p>

         <p class="font-18 fw-bold text-purple">
         GRADE - UNIT 01 - ENVIRONMENT - NOTE  </p>

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
         

       
         <div class="table-responsive pt-3">
            <table id="noteUploadTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <tr>
                     <th>STUDENT NAME</th>
                     <th>UPLOADED DATE </th>
                     <th>DOCUMENT OPTIONS</th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr   >
                     <td>
                        PRATHIBHA SENARATH 
                        <p>
                            <a href="" 
                            class=" text-uppercase font-10 text-white rounded-pill py-2 px-3 
                            bg-info fw-500 align-items-center text-center  hvr-shrink">VIEW STUDENT DETAILS

                        </a>
                        </p>
                     </td>
                     <td>
                        01.01.2024
                     </td>
                     <td>
                        <button  data-bs-toggle="modal" data-bs-target="#noteEdit" class=" border-0  text-uppercase font-13 text-white rounded-pill py-1 px-5 bg-success fw-500 align-items-center
                           ">Edit</button>
                        <!-- Modal -->
                        <div class="modal fade" id="noteEdit" tabindex="-1" aria-labelledby="noteEdit" aria-hidden="true">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title  font-18 fw-bolder text-dark  " id="exampleModalLabel">Slot Edit</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    <form action="">
                                       <div class="col-lg-12 special-class-div">
                                          <label class="form-label font-14 fw-bold text-purple  mb-0 text-uppercase">
                                          CREATE NOTE AND PAPER ANSWER SLOT</label>
                                          <input type="text" class="form-control fw-500 rounded-3 border-dark">
                                       </div>
                                       <div class="col-lg-4 col-sm-3">
                                          <button type="button" class="btn  font-15 text-white mt-4 gradient-background-1 py-2 px-5  ">Edit</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <span class="   text-uppercase font-13 text-white rounded-pill py-1 px-5 bg-danger fw-500 align-items-center
                           ">DELETE</span>

                           <span class="   text-uppercase font-13 text-white rounded-pill py-1 px-5 bg-secondary fw-500 align-items-center
                           ">APPROVED</span>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
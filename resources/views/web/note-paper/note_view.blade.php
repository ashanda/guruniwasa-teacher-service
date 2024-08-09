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
         <div class="row justify-content-end align-items-center">
            <div class="col-lg-9 col-sm-8">
               <h2 class="font-16 fw-bolder text-danger pt-1 pb-3">TOPIC FORMAT</h2>
               <p class="font-13 fw-500 text-dark   pb-1"> Lesson Notes - Subject - Grade - Unit 00 - Lesson Name - English Medium
               </p>
               <p class="font-13 fw-500 text-dark   pb-3"> පාඩම් සටහන් - විෂය - ශ්‍රේණිය - 00 පාඩම - මාතෘකාව - සිංහල මාධ්‍යය</p>
               <p class="font-13 fw-500 text-dark   pb-1"> Paper Answers - Subject - Grade - Term - Province/School/Model Paper - Year - English Medium</p>
               <p class="font-13 fw-500 text-dark   pb-3"> ශ්‍රේණිය - විෂය - වාරය - පළාත/පාසල්/ ආදර්ශ ප්‍රශ්න පත්‍රය - වසර - 00 කොටස - ඉංග්‍රීසි මාධ්‍යය</p>
            </div>
            <div class="col-lg-3 col-sm-4 text-lg-end col-sm-end pb-lg-0 pb-sm-0 pb-3">
               <span class="   text-uppercase font-13 text-white rounded-pill py-2 px-lg-3 px-sm-2 px-3 bg-secondary fw-500 align-items-center
                  ">ONGOING SLOT COUNT - 2
               </span>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-10 col-11">
               <form action="">
                  <div class="row align-items-center justify-content-center border-new py-3 px-3 rounded-3 bg-white">
                     <div class="col-lg-8 col-sm-9 special-class-div">
                        <label class="form-label font-14 fw-bold text-purple  mb-0 text-uppercase">CREATE NOTE AND PAPER ANSWER SLOT</label>
                        <input type="text" class="form-control fw-500 rounded-3 border-dark">
                     </div>
                     <div class="col-lg-4 col-sm-3">
                        <button type="button" class="btn  font-15 text-white mt-4 gradient-background-1 py-2 px-5  ">SUBMIT</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="table-responsive pt-3">
            <table id="noteViewTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <tr>
                     <th>TOPIC</th>
                     <th>UPLOADS</th>
                     <th>EDIT / DELETE</th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr   >
                     <td>SCHOOL TERM TEST PAPERS AND MARKS
                     </td>
                     <td>
                        <a href="{{ route('web.note.upload')}}"
                           class=" w-100 text-uppercase font-13 text-center text-white rounded-pill
                           py-1  px-3 bg-primary fw-500 align-items-center   hvr-shrink">VIEW UPLOADS
                        </a>
                     </td>
                     <td>
                        <button  data-bs-toggle="modal" data-bs-target="#noteEdit" class=" border-0  text-uppercase font-13 text-white rounded-pill py-1 px-5 bg-success fw-500 align-items-center
                           ">EDIT</button>
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
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
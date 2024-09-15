
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
         <h1 class="font-36 fw-bold text-uppercase text-purple">UPLOAD CLASS PAPERS

         </h1>
         <p class="font-18 fw-bold text-purple">JANUARY
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
         <h2 class="font-16 fw-bolder text-danger pt-1 pb-3">TOPIC FORMAT</h2>
         <p class="font-13 fw-500 text-dark   pb-1"> Grade - Subject - Term - Province/School/Model Paper - Year - Part 00 - English Medium
        </p>
         <p class="font-13 fw-500 text-dark   pb-3"> ශ්‍රේණිය - විෂය - වාරය - පළාත/පාසල්/ ආදර්ශ ප්‍රශ්න පත්‍රය - වසර - 00 කොටස - ඉංග්‍රීසි මාධ්‍යය</p>

      </div>
      <div class="table-responsive">
         <table id="tutesRecTable" class="table table-striped table-hover table-bordered">
            <thead class="text-white gradient-background text-uppercase fw-light font-14">
               <tr>
                  <th>GRADE AND SUBJECTS</th>
                  <th>TOPIC</th>
                  <th>DOCUMENT OPTIONS</th>
               </tr>
            </thead>
            <tbody class="font-14 align-items-center fw-500">
               <tr   >
                  <td>GRADE 6 SCIENCE PAPER REVISION ENGLISH MEDIUM</td>
                  <td>FIRST TERM TEST - WESTERN
PROVINCE - 2018</td>
                  <td>
                     <a class=" " data-bs-toggle="modal" data-bs-target="#uploadDocClass">
                        <ul class="d-flex justify-content-center font-13 text-white
                           my-1 py-2 px-3 bg-success fw-500 align-items-center  rounded-pill">
                           <li><i class="fa-solid fa-upload"></i></li>
                           <li class="d-none tab-d-none d-sm-block ps-2"> Upload </li>
                        </ul>
                     </a>
                     <div class="modal fade" id="uploadDocClass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                    Upload Class Paper
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
                  </td>
               </tr>
               <tr   >
                  <td>GRADE 6 SCIENCE PAPER REVISION ENGLISH MEDIUM</td>
                  <td>FIRST TERM TEST - WESTERN
PROVINCE - 2018</td>
                  <td>
                     <a class="font-13 text-dark
                        my-1 py-2 px-5 bg-warning fw-500 align-items-center  rounded-pill "
                        data-bs-toggle="modal" data-bs-target="#viewDocClass">
                     View
                     </a>
                     <div class="modal fade" id="viewDocClass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                    View Class Paper
                                 </h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/6.webp')}}"
                                    alt="Guru Niwasa LMS">
                              </div>
                           </div>
                        </div>
                     </div>
                  </td>
               </tr>
               <tr   >
                  <td>GRADE 6 SCIENCE PAPER REVISION ENGLISH MEDIUM</td>
                  <td>FIRST TERM TEST - WESTERN
PROVINCE - 2018</td>
                  <td>
                     <a class=" " data-bs-toggle="modal" data-bs-target="#EditDocClass">
                        <ul class="d-flex justify-content-center font-13 text-white
                           my-1 py-2 px-3 bg-dark fw-500 align-items-center  rounded-pill">
                           <li><i class="fa fa-eye"></i></li>
                           <li class="d-none tab-d-none d-sm-block ps-2"> Edit </li>
                        </ul>
                     </a>
                     <div class="modal fade" id="EditDocClass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                    Upload Class Paper
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
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
</div>
@endsection
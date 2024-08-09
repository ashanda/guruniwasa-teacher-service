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
         <h1 class="font-36 fw-bold text-uppercase text-purple"> CREATE ONLINE EXAMS - JANUARY
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
      <div class="table-responsive">
         <table id="onlineExamTable" class="table table-striped table-hover table-bordered">
            <thead class="text-white gradient-background text-uppercase fw-light font-14">
               <tr>
                  <th>GRADE AND SUBJECTS</th>
                  <th>EXAM TYPE</th>
                  <th>CREATE/EDIT PAPER</th>
                  <th>RESULTS </th>
                  <th>STATUS </th>
               </tr>
            </thead>
            <tbody class="font-14 align-items-center fw-500">
               <tr   >
                  <td>GRADE 6 SCIENCE PAPER REVISION ENGLISH MEDIUM</td>
                  <td> </td>
                  <td>
                     <a href="{{ route('web.online.questions') }}"
                        class="  text-uppercase font-11 text-white rounded-pill py-2 px-3
                        bg-primary fw-500 align-items-center   hvr-shrink">CLICK TO ADD QUESTIONS
                     </a>
                  </td>
                  <td>
                     <span class="text-center"> 05 </span>
                     <p>
                        <a class="  text-uppercase text-center font-10 text-white rounded-pill py-1 px-3 bg-success fw-bolder align-items-center text-white hvr-shrink   " data-bs-toggle="modal" data-bs-target="#resultRank">  View </a>
                     </p>
                     <!-- Modal -->
                     <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="resultRank" tabindex="-1" aria-labelledby="tableModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title font-24 text-uppercase fw-bold   text-purple pt-lg-0 pt-1">EXAM RESULTS
                                 </h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <p class="font-15 fw-bolder text-purple text-uppercase">GRADE 6 SCIENCE THEORY ENGLISH MEDIUM ABHIMAN SIR
                                    JANUARY - MONTHLY TEST
                                 </p>
                                 <div class="row py-3">
                                    <div class="col-7 ">
                                       <h4 class="  font-20 fw-bold   text-dak">
                                          Your Rank - 01
                                       </h4>
                                    </div>
                                    <div class="col-5 text-end">
                                       <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
                                       <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
                                    </div>
                                 </div>
                                 <div class="row justify-content-center">
                                    <div class="col-lg-11">
                                       <div id="rankTable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                          <div class="row">
                                             <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="rankTable_length">
                                                   <label>
                                                      Show
                                                      <select name="rankTable_length" aria-controls="rankTable" class="form-select form-select-sm">
                                                         <option value="10">10</option>
                                                         <option value="25">25</option>
                                                         <option value="50">50</option>
                                                         <option value="100">100</option>
                                                      </select>
                                                      entries
                                                   </label>
                                                </div>
                                             </div>
                                             <div class="col-sm-12 col-md-6">
                                                <div id="rankTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="rankTable"></label></div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <table id="rankTable" class="table table-striped table-hover table-bordered text-start dataTable no-footer" aria-describedby="rankTable_info">
                                                   <thead class="text-white gradient-background text-uppercase fw-light font-14">
                                                      <tr>
                                                         <th class="sorting sorting_asc" tabindex="0" aria-controls="rankTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="RANK: activate to sort column descending" style="width: 0px;">RANK</th>
                                                         <th class="sorting" tabindex="0" aria-controls="rankTable" rowspan="1" colspan="1" aria-label="STUDENT NAME: activate to sort column ascending" style="width: 0px;">STUDENT NAME</th>
                                                         <th class="sorting" tabindex="0" aria-controls="rankTable" rowspan="1" colspan="1" aria-label="MARKS (100): activate to sort column ascending" style="width: 0px;">MARKS (100)</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody class="font-14 align-items-center fw-500">
                                                      <tr class="odd">
                                                         <td class="sorting_1">1</td>
                                                         <td>PATHUM SHANAKA
                                                         </td>
                                                         <td>
                                                            <p class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                                                               95
                                                            </p>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="rankTable_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                             </div>
                                             <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers" id="rankTable_paginate">
                                                   <ul class="pagination">
                                                      <li class="paginate_button page-item previous disabled" id="rankTable_previous"><a href="#" aria-controls="rankTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                      <li class="paginate_button page-item active"><a href="#" aria-controls="rankTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                      <li class="paginate_button page-item next disabled" id="rankTable_next"><a href="#" aria-controls="rankTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </td>
                  <td>
                     <span class="font-12 text-white
                        my-1 py-2 px-2 bg-danger fw-500 text-center  rounded-pill "  >
                     NOT PUBLISHED
                     </span>
                  </td>
               </tr>
               <tr   >
                  <td>GRADE 6 SCIENCE PAPER REVISION ENGLISH MEDIUM</td>
                  <td>
                     TERM TEST
                  </td>
                  <td>
                     <a href="{{ route('web.online.questions') }}"
                        class="  text-uppercase font-11 text-white rounded-pill py-2 px-3
                        bg-primary fw-500 align-items-center   hvr-shrink">view
                     </a>
                  </td>
                  <td> </td>
                  <td>
                     <span class="font-12 text-white
                        my-1 py-2 px-2 bg-danger fw-500 text-center  rounded-pill "  >
                     NOT PUBLISHED
                     </span>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
</div>
@endsection

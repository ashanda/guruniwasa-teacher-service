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
         <h1 class="font-36 fw-bold text-uppercase text-purple">
            ADD EXTRA CLASS
         </h1>
         <p class="font-13 fw-bolder text-danger">* EVERY CLASS MUST BE CONDUCTED AS PER THE SCHEDULE, POSTPONEMENT OF
            CLASSES WOULD NOT BE RECOMMENDED
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
               <div class="row justify-content-end pt-2">
                <div class="col-lg-10 text-end">
                    <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
                   <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
                </div>

              </div>

            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <form action="">
            <div class="row align-items-center justify-content-center border-new py-3 px-3 rounded-3 bg-white">


                <div class="col-lg-8 col-sm-9 special-class-div">
                    <ul class="d-lg-flex  d-sm-flex">
                        <li class="pe-lg-5 pe-sm-2">
                           <div class="mb-2">
                              <label class="form-label font-13 fw-bold text-purple  mb-0 text-uppercase">DATE</label>
                              <input type="date" class="form-control font-13 fw-500 rounded-3 border-dark">
                           </div>
                        </li>
                        <li class="pe-lg-5 pe-sm-2">
                           <div class="mb-2">
                              <label class="form-label font-13 fw-bold text-purple  mb-0 text-uppercase">GRADE</label>
                              <select class="form-select font-13  fw-500 rounded-3 border-dark" aria-label="Default select example">
                                 <option value="1">Grade 1</option>
                                 <option value="2">Grade 2</option>
                                 <option value="3">Grade 3</option>
                              </select>
                           </div>
                        </li>
                        <li class="pe-lg-5 pe-sm-2">
                           <div class="mb-2">
                              <label class="form-label font-13 fw-bold text-purple  mb-0 text-uppercase">SUBJECT</label>
                              <select class="form-select font-13  fw-500 rounded-3 border-dark" aria-label="Default select example">
                                 <option value="1">English</option>
                                 <option value="2">Tamil</option>
                                 <option value="3">Sinhala</option>
                              </select>
                           </div>
                        </li>
                        <li class="pe-lg-5 pe-sm-2">
                           <div class="mb-2">
                              <label class="form-label font-13 fw-bold text-purple  mb-0 text-uppercase">START Date</label>
                              <select class="form-select font-13  fw-500 rounded-3 border-dark" aria-label="Default select example">
                                 <option value="1">English</option>
                                 <option value="2">Tamil</option>
                                 <option value="3">Sinhala</option>
                              </select>
                           </div>
                        </li>
                        <li class="pe-lg-5 pe-sm-2">
                           <div class="mb-2">
                              <label class="form-label font-13 fw-bold text-purple  mb-0 text-uppercase">FINISH Date</label>
                              <select class="form-select font-13  fw-500 rounded-3 border-dark" aria-label="Default select example">
                                 <option value="1">English</option>
                                 <option value="2">Tamil</option>
                                 <option value="3">Sinhala</option>
                              </select>
                           </div>
                        </li>
                     </ul>
                </div>
                <div class="col-lg-4 col-sm-3">
                    <button type="button" class="btn  font-15 text-white mt-2   gradient-background-1 py-2 px-5  ">SUBMIT</button>

                </div>



            </div>
         </form>
      </div>
      <div class="col-12 pt-3">

        <div class="table-responsive">
            <table id="extraClassTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <tr>
                     <th>MONTH</th>
                     <th>DATE
                     </th>
                     <th>DAY</th>
                     <th>GRADE</th>
                     <th>SUBJECT</th>
                     <th>SPECIAL
                        NOTES
                     </th>
                     <th>STATUS</th>
                     <th>START</th>
                     <th>END</th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr>
                   <td>#</td>
                   <td>#</td>
                   <td>#</td>
                   <td>#</td>
                   <td>#</td>
                   <td>#</td>
                   <td>
                    <span class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                            Done</span>
                   </td>
                   <td>#</td>
                   <td>#</td>

                  </tr>
                  <tr>
                  <td>#</td>
                  <td>#</td>
                  <td>#</td>
                  <td>#</td>
                  <td>#</td>
                  <td>#</td>
                  <td>
                   <span class="py-2 px-4 bg-danger text-white font-13 text-center rounded-pill">
                       PENDING</span>
                  </td>
                  <td>#</td>
                  <td>#</td> 
                </tr>
               </tbody>
            </table>
         </div>

      </div>
   </div>
</div>
@endsection
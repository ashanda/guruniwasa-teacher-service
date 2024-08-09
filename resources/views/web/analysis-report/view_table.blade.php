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
         <h1 class="font-36 fw-bold text-uppercase text-purple">STUDENT ANALYSING

         </h1>
         <p class="font-20 fw-500 text-purple">GRADE 6 SCIENCE THEORY ENGLISH MEDIUM ABHIMAN SIR

         </p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive">
            

                <table class="table table-striped table-hover table-bordered">
                    <thead class="text-white gradient-background text-uppercase fw-light font-14">
                        <tr>
                            <th class="table-header" rowspan="2">NAME</th>
                            <th class="table-header" rowspan="2">  STUDENT DETAILS</th>
                            <th class="table-header" colspan="5">Attendance- JANUARY</th>
                            <th class="table-header" rowspan="2">MONTHLY / TERM
                                TEST</th>
                            <th class="table-header" rowspan="2">School Test</th>
                            <th class="table-header" rowspan="2">Note / Paper</th>
                            <th class="table-header" rowspan="2">FEES</th>
                        </tr>
                        <tr>
                            <th class="table-header">7</th>
                            <th class="table-header">14</th>
                            <th class="table-header">21</th>
                            <th class="table-header">28</th>
                            <th class="table-header">-</th>
                        </tr>
                    </thead>
                    <tbody class="font-13 align-items-center fw-500">
                        <tr>
                            <td>PRATHIBHA SENEVIRATHNE
                            </td>
                            <td> 
                                <a href=" " class=" text-uppercase font-10 text-white rounded-pill py-2 px-3 bg-primary fw-500 
                                align-items-center  hvr-shrink">  STUDENT DETAILS
                            </a> 
 
                        </a> 









                            </td>
                            <td class="zoom">ZOOM</td>
                            <td class="physical">PHYSICAL</td>
                            <td class="zoom">ZOOM</td>
                            <td class="absent">ABSENT</td>
                            <td></td>
                            <td class="physical"> <p class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                                95
                             </p> </td>
                            <td>
                                <p class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                                   70
                                 </p>
                            </td>
                            <td>
                                <div>Grade 7 - Unit 01 - Plant Diversity <br><div class="text-white bg-success font-11   fw-500 px-3 py-1 rounded-pill m-2  text-center">UPLOADED</div></div>

                            </td>



                            <td>1200.00
                            </td>
                        </tr>


                    </tbody>
                </table>


         </div>
      </div>
   </div>
</div>
@endsection

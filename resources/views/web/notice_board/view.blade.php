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
         <h1 class="font-36 fw-bold text-uppercase text-purple">NOTICE BOARD
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
               <div class="row justify-content-end pt-2">
                  <div class="col-lg-10 ">
                     <a class=" " data-bs-toggle="modal" data-bs-target="#addNotice">
                        <ul class="d-flex justify-content-center font-14 text-white 
                           my-1 py-2 px-3 bg-dark fw-500 align-items-center  rounded-pill">
                           <li><i class="fa fa-plus"></i></li>
                           <li class="d-none tab-d-none d-sm-block ps-2"> Add Notice </li>
                        </ul>
                     </a>
                     <div class="modal fade" id="addNotice" data-bs-backdrop="static" 
                     tabindex="-1" aria-labelledby="addNotice" aria-hidden="true" >
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                    Add Notice
                                 </h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form action="">
                                    <div class="modal-body ">
                                       <div class="mb-2">
                                          <label class="form-label font-14 fw-bold text-purple  mb-0">District </label>
                                          <select class="form-select fw-500 rounded-3 border-dark" aria-label="Default select example">
                                             <option selected="">Select Grade</option>
                                             <option value="1">Grade 01</option>
                                             <option value="2">Grade 02</option>
                                             <option value="3">Grade 03</option>
                                          </select>
                                       </div>
                                       <div class="mb-2">
                                          <label class="form-label font-14 fw-bold text-purple  mb-0">Subject </label>
                                          <select class="form-select fw-500 rounded-3 border-dark" aria-label="Default select example">
                                             <option selected="">Select Subject</option>
                                             <option value="1">Sinhala</option>
                                             <option value="2">English</option>
                                          </select>
                                       </div>
                                       <div class="mb-2">
                                          <label class="form-label font-14 fw-bold text-purple  mb-0">MESSAGE </label>
                                          <textarea class="form-control fw-500 rounded-3 border-dark"   rows="5"></textarea>
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
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div  class="col-lg-4 col-sm-6 mb-3 align-items-center">
         <div class=" border border-info border-2 py-4 px-3 rounded-3 bd-blue-100">
            <div class="row align-items-center pt-2 pb-3">
               <div class="col-3">
                  <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                     alt="Guru Niwasa LMS">
               </div>
               <div class="col-9">
                  <h3 class="font-18 fw-bold  text-purple">Abhiman Withakshana
                  </h3>
                  <p class="font-14 fw-500 text-dark">Managing Director
                  </p>
               </div>
            </div>
            <p class="font-14 fw-500 text-dark pb-2">2024.01.13 වන දින ඔබ LMS
               පද්ධතියට ඇතුලත් කල , 2024
               පෙ බරවා රි මා සයේ පන්ති සදහා
               සිදුකල මුදල් තැ න්පතුවේ බැං කු
               රිසිට්පත අනුමත වී ඇත. දැ න් ඔබගේ
               LMS පද්ධතිය අදා ල විෂයන් සදහා
               සක්‍රීය වී ඇත.
            </p>
            <p class="font-12 fw-bolder text-dark pb-3">
               ස්තූතියි !
               ගිණුම් අං ශය
               ගුරු නිවස
            </p>
            <p class="font-12 fw-bolder text-dark">
               (Date and Time)
            </p>
         </div>
      </div>
      <div  class="col-lg-4 col-sm-6 mb-3 align-items-center">
         <div class=" border border-info border-2 py-4 px-3 rounded-3 bd-blue-100">
            <div class="row align-items-center pt-2 pb-3">
               <div class="col-3">
                  <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                     alt="Guru Niwasa LMS">
               </div>
               <div class="col-9">
                  <h3 class="font-18 fw-bold  text-purple">Abhiman Withakshana
                  </h3>
                  <p class="font-14 fw-500 text-dark">Managing Director
                  </p>
               </div>
            </div>
            <p class="font-14 fw-500 text-dark pb-2">2024.01.13 වන දින ඔබ LMS
               පද්ධතියට ඇතුලත් කල , 2024
               පෙ බරවා රි මා සයේ පන්ති සදහා
              
            </p>
            <p class="font-12 fw-bolder text-dark pb-3">
               ස්තූතියි !
               ගිණුම් අං ශය
               ගුරු නිවස
            </p>
            <p class="font-12 fw-bolder text-dark">
               (Date and Time)
            </p>
            <div class="row pt-2">
                <div class="col-lg-6">
                    <a class=" " data-bs-toggle="modal" data-bs-target="#addNotice">
                        <ul class="d-flex justify-content-center font-14 text-white 
                           my-1 py-2 px-3 bg-secondary fw-500 align-items-center  rounded-pill">
                           <li><i class="fa fa-pencil"></i></li>
                           <li class="d-none tab-d-none d-sm-block ps-2"> Edit Notice </li>
                        </ul>
                     </a>
                     <div class="modal fade" id="addNotice" data-bs-backdrop="static" 
                     tabindex="-1" aria-labelledby="addNotice" aria-hidden="true" >
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                    Add Notice
                                 </h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form action="">
                                    <div class="modal-body ">
                                       <div class="mb-2">
                                          <label class="form-label font-14 fw-bold text-purple  mb-0">District </label>
                                          <select class="form-select fw-500 rounded-3 border-dark" aria-label="Default select example">
                                             <option selected="">Select Grade</option>
                                             <option value="1">Grade 01</option>
                                             <option value="2">Grade 02</option>
                                             <option value="3">Grade 03</option>
                                          </select>
                                       </div>
                                       <div class="mb-2">
                                          <label class="form-label font-14 fw-bold text-purple  mb-0">Subject </label>
                                          <select class="form-select fw-500 rounded-3 border-dark" aria-label="Default select example">
                                             <option selected="">Select Subject</option>
                                             <option value="1">Sinhala</option>
                                             <option value="2">English</option>
                                          </select>
                                       </div>
                                       <div class="mb-2">
                                          <label class="form-label font-14 fw-bold text-purple  mb-0">MESSAGE </label>
                                          <textarea class="form-control fw-500 rounded-3 border-dark"   rows="5"></textarea>
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
                <div class="col-lg-6">
            
                        <a class=" " data-bs-toggle="modal" data-bs-target="#deletedotice">
                            <ul class="d-flex justify-content-center font-14 text-white 
                               my-1 py-2 px-3 bg-danger fw-500 align-items-center  rounded-pill">
                               <li><i class="fa fa-trash"></i></li>
                               <li class="d-none tab-d-none d-sm-block ps-2"> Deleted </li>
                            </ul>
                         </a>
                         <div class="modal fade" id="deletedotice" data-bs-backdrop="static" 
                         tabindex="-1" aria-labelledby="deletedotice" aria-hidden="true" >
                            <div class="modal-dialog">
                               <div class="modal-content">
                                  <div class="modal-header">
                                     <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                        Remove   Notice
                                     </h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                     <form action="">
                                        <div class="modal-body ">
                                           <div class="mb-2">
                                            <p class="font-15 fw-500 text-dark pb-2">
                                                Are you sure you want to remove this Notice from the system ?
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
    
      <div  class="col-lg-4 col-sm-6 mb-3 align-items-center">
         <div class=" border border-info border-2 py-4 px-3 rounded-3 bd-blue-100">
            <div class="row align-items-center pt-2 pb-3">
               <div class="col-3">
                  <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                     alt="Guru Niwasa LMS">
               </div>
               <div class="col-9">
                  <h3 class="font-18 fw-bold  text-purple">Abhiman Withakshana
                  </h3>
                  <p class="font-14 fw-500 text-dark">Managing Director
                  </p>
               </div>
            </div>
            <p class="font-14 fw-500 text-dark pb-2">2024.01.13 වන දින ඔබ LMS
               පද්ධතියට ඇතුලත් කල , 2024
               පෙ බරවා රි මා සයේ පන්ති සදහා
               සිදුකල මුදල් තැ න්පතුවේ බැං කු
               රිසිට්පත අනුමත වී ඇත. දැ න් ඔබගේ
               LMS පද්ධතිය අදා ල විෂයන් සදහා
               සක්‍රීය වී ඇත.
            </p>
            <p class="font-12 fw-bolder text-dark pb-3">
               ස්තූතියි !
               ගිණුම් අං ශය
               ගුරු නිවස
            </p>
            <p class="font-12 fw-bolder text-dark">
               (Date and Time)
            </p>
         </div>
      </div>
      <div class="col-12 pt-4">
         <div class="row">
            <div class="col-12">
               <p class="font-13 fw-bolder text-danger text-uppercase">
                  EDITORS NOTE: MESSAGES WILL BE ERASED AFTER A WEEK. NEWEST MESSAGES WILL BE SHOWN FIRST
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
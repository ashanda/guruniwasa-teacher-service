@extends('web.layouts.app')
@section('content')
@if(session()->has('teacher_data'))
    @php
        $teacherData = session('teacher_data');
    @endphp
@else
     <script>window.location = "{{ route('web.logout') }}";</script>
@endif

<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-2">

      </div>
      <div class="col-lg-6 col-sm-6 text-center pt-lg-0 pt-3">
        
         <p class="font-17 fw-bolder text-purple">Hello, <span class="fst-italic">< {{ $teacherData['name'] }} ></span>
         </p>
         <h1 class="font-36 fw-bold text-uppercase text-purple pt-lg-0 pt-1">WELCOME TO GURU NIWASA LMS
         </h1>
      </div>
      <div class="col-lg-3 col-sm-4">
         {{-- <div class="row  justify-content-center">
            <div class="col-12 pe-lg-5 pt-lg-0 pt-3">
               <div class="form-check form-switch cus-switch ">
                  <div class="row align-items-end">
                     <div class="col-lg-4 col-sm-3 col-2"> <label class="form-check-label font-12 fw-bolder text-uppercase text-purple" for="flexSwitchCheckDefault">BASIC</label>
                     </div>
                     <div class="col-lg-4 col-sm-4  col-3">   <input class="form-check-input font-14  w-100 pt-3 pb-2 text-uppercase text-purple ms-0" type="checkbox" id="flexSwitchCheckDefault">
                     </div>
                     <div class="col-lg-4 col-sm-2 col-4">   <label class="form-check-label font-12 fw-bolder text-uppercase text-purple" for="flexSwitchCheckDefault">ADVANCED</label>
                     </div>
                  </div>
               </div>
            </div>
         </div> --}}

      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   {{-- <div   id="basicMenuList">
      <div class="row justify-content-around align-items-center mx-auto">
         <div class="col-lg-1"></div>
         <div class="col-lg-3 col-sm-5  col-10 ">
            <a href="{{ route('web.zoom-metting') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-2 py-1">
                     <i class="fa fa-video fs-3 text-white "></i>
                  </div>
                  <div class="col-lg-8 col-9 py-1">
                     <p class="font-13 text-white fw-500">ZOOM MEETING
                    </p>

                  </div>
               </div>
            </a>

         </div>
         <div class="col-lg-3 col-sm-5  col-10 pt-lg-0 pt-sm-0 pt-3">
            <a href="{{ route('web.video.view') }}"  class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-2 py-1">
                     <i class="fab fa-youtube fs-3 text-white "></i>
                  </div>
                  <div class="col-lg-8 col-9 py-1">
                     <p class="font-13 text-white fw-500">YOUTUBE
                        CLASS VIDEO
                        </p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-1"></div>
      </div>
      <div class="row justify-content-around pt-lg-5 mx-auto">
         <div class="col-lg-1"></div>
         <div class="col-lg-3 col-sm-5  col-10 pt-lg-0 pt-3">
            <a href="{{  route('web.fees.view') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-2 py-1">
                     <i class="fa-solid fa-money-bill-1-wave fs-3 text-white "></i>
                  </div>
                  <div class="col-lg-8 col-9 py-1">
                     <p class="font-13 text-white fw-500">CLASS FEES
                    </p>

                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-10 pt-lg-0 pt-3">
            <a href="{{ route('web.tutes.book') }}"  class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-2 py-1">
                     <i class="fa fa-book fs-3 text-white "></i>
                  </div>
                  <div class="col-lg-9 col-9 py-1">
                     <p class="font-13 text-white fw-500">UPLOAD TUTES & BOOKS
                    </p>

                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-1"></div>
      </div>
      <div class="row justify-content-around pt-lg-5 mx-auto">
         <div class="col-lg-3 col-sm-5  col-10 pt-lg-0 pt-3">
            <a href="{{  route('web.time.table') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-2 py-1">
                     <i class="fa fa-newspaper fs-3 text-white "></i>

                  </div>
                  <div class="col-lg-8 col-9 py-1">
                     <p class="font-13 text-white fw-500">UPLOAD CLASS PAPERS
                    </p>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div> --}}
   <div class=" " id="advaceMenuList">
      <div class="row align-items-center">
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.zoom-metting') }}"  class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa fa-video fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">LINK ZOOM MEETING</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.video.view') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fab fa-youtube fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">  YOUTUBE
                        CLASS VIDEO
                        </p>
                  </div>
               </div>
            </a>
         </div>

         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.note-paper.list')}}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-newspaper fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Notes & Paper Answers</p>

                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.tutes.book') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa fa-book fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">UPLOAD TUTES AND BOOKS
                    </p>
                  </div>
               </div>
            </a>
         </div>
         {{-- <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.class.paper') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa fa-book-open fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">UPLOAD CLASS PAPERS
                    </p>
                  </div>
               </div>
            </a>
         </div> --}}
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.online.exam') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-globe fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">CREATE ONLINE EXAMS
                     </p>
                  </div>
               </div>
            </a>
         </div>

         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.analysis.view')}}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-magnifying-glass-chart fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">STUDENT ANALYSING

                  </div>
               </div>
            </a>
         </div>

         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.student.details')}}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-graduation-cap fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">STUDENT DETAILS
                    </p>
                  </div>
               </div>
            </a>
         </div>

         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{  route('web.notice.board') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-circle-exclamation fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">NOTICE BOARD</p>
                  </div>
               </div>
            </a>
         </div>

         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.notice.birthday_lis')}}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-cake-candles fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">BIRTHDAYS  </p>
                  </div>
               </div>
            </a>
         </div>

         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.student_video.view')}}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-video fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">STUDENT VIDEOS
                   </p>
                  </div>
               </div>
            </a>
         </div>

         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.student.approval') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-regular fa-circle-check  fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">STUDENT APPROVALS
                    </p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{  route('web.time.table') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1 py-1">
                     <i class="fa-solid fa-table fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Time Tables</p>

                  </div>
               </div>
            </a>
         </div>

         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{  route('web.fees.view') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-money-bill fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Class Fees </p>
                  </div>
               </div>
            </a>
         </div>

         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.monthly.income')}}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-file-lines fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">

                        SALARY SLIPS 
                        
                     </p>
                  </div>
               </div>
            </a>
         </div>

         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{  route('web.item-shop') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-cart-shopping fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-18 text-white fw-500">Items Shop</p>
                  </div>
               </div>
            </a>
         </div>

          <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{  route('web.scan-qr-code') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-qrcode fs-3 text-white "></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-18 text-white fw-500">Scan QR Code</p>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
</div>
@endsection

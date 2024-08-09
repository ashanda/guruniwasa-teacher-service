@extends('web.layouts.app')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-2 col-4">
            <img class="d-block w-100 mx-auto" src="{{asset('themes/default/img/hd_dp.png')}}"
               alt="Guru Niwasa LMS">
         </div>
         <div class="col-12 pt-2 text-center">
            <h1 class="font-24 fw-bold  text-purple   pt-1">
                ❤ We are Family ❤
            </h1>
            <h2 class="font-18 fw-bold  text-purple   pt-1">
                Log In | Teacher
            </h2>
         </div>
         <div class="col-12 pt-4">
            <div class="row justify-content-center">
               <div class="col-lg-6">
                  <div class="card border-5  border-info  rounded-3 bg-white  ">
                     <div class="card-body min-height-card align-items-center">
                        @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                        @endif
                        @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                        @endif
                        <form action="{{ route('api.teachers.login') }}" method="POST">
                           @csrf
                           <div class="mb-2">
                              <label class="form-label font-12 fw-bold text-purple  mb-0">USER NAME<span class="text-danger">*</span> </label>
                              <input type="email" name="phone_number" class="form-control font-13  fw-500 rounded-3 border-dark" placeholder="Enter Phone Number" required>
                           </div>
                           <div class="mb-2">
                              <label class="form-label font-12 fw-bold text-purple  mb-0">PASSWORD <span class="text-danger">*</span> </label>
                              <input type="password" name="password" class="form-control font-13  fw-500 rounded-3 border-dark" placeholder="Enter Password" required>
                           </div>
                           <div class="row align-items-center mt-3">
                            <div class="col-lg-4 col-sm-5 col-6">
                                 <button type="submit" class="hvr-shrink text-white gradient-background-1 py-2 px-5 justify-content-around rounded-35">
                                                Login
                                 </button>
                              </div>
                              {{-- <div class="col-lg-4 col-sm-5 col-6">
                                 <a href="{{ route('web.forgot_password')}}" class="text-danger font-13 fw-500"> Forgot Password.</a>
                              </div>
                              <div class="col-12 pt-2 text-center">
                                 <a href=" " class="hvr-shrink text-white bg-success  py-2 px-5 justify-content-around rounded-35 mt-3 font-13"  >
                                 New Register Student
                                 </a>
                              </div> --}}
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         {{-- <div class="col-12 pt-3">
            <p class="font-13 fw-bolder  text-dark text-start  pt-2">✅ Only students who have created an account at the Guru Niwasa Institute can login using their phone number and password.
             </p>
             <p class="font-13 fw-bolder  text-dark text-start  pt-2">✅ දුරකථන අංකය සහ මුරපදය යොදා login විය හැක්කේ ගුරු නිවස අයතනයේ ගිණුමක් සෑදු දරුවන් හට පමණි.
            </p>
            <p class="font-13 fw-bolder  text-dark text-start  pt-2">🆕 Click the New Student Register button and follow the 5 steps shown there to create an account at the Guru Niwasa Institute.
            </p>
            <p class="font-13 fw-bolder  text-dark text-start  pt-2">🆕 ගුරු නිවස ආයතනයේ ගිණුමක් සාදා ගැනීමට New Student Register බොත්තම click කර එහි දැක්වෙන පියවර 5 අනුගමනය කරන්න.
            </p>
         </div> --}}
      </div>
   </div>
</div>
@endsection

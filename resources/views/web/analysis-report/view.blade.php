@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp
{{-- {{ dd($body) }} --}}
<div class="container-fluid">
    <div class="row align-items-center pt-2">
        <div class="col-lg-3 col-sm-3">
            <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
                <i class="fa-regular fa-circle-left hvr-icon"></i>
                BACK TO HOME
            </a>
        </div>
        <div class="col-lg-6 col-sm-6 text-center">
            <h1 class="font-36 fw-bold text-uppercase text-purple">STUDENT ANALYSING


            </h1>


        </div>
    </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
    <div class="container">
        <div class="row middle-hight">
            @foreach ($body['data']['subject'] as $subject)
                <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
                    <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">


                        <p
                            class="font-20 border-2 text-uppercase fw-bold text-purple py-3 ">
                            {{ $subject['grade']['gname'] }} <br>{{ $subject['sname'] }}
                            
                        </p>
                        <div class="row justify-content-center">
                            <div class="col-lg-11 text-white ">
                                <a href="{{ route('web.analysis.report') }}"
                                    class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500 
                                    align-items-center   hvr-shrink">STUDENT COUNT {{ $subject['students']['student_count'] }}
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>


</div>
@endsection
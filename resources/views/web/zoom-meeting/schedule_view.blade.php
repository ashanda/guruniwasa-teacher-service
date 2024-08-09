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
         <h1 class="font-36 fw-bold text-uppercase text-purple">LINK ZOOM MEETING
         </h1>
         @php
         $currentDateTime = Carbon::now('Asia/Colombo');
         @endphp
         <p class="font-20 fw-500 text-purple">{{ $currentDateTime->format('d.m.Y | l | h.i A') }}
         </p>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3">
        <a href="{{ route('web.zoom-metting.special-class')}}" class=" font-12 text-white rounded-pill py-2 px-5 bg-primary fw-500 align-items-center   hvr-shrink"><i class="fa-solid fa-plus"></i> Special Extra Class</a>

     </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight justify-content-center">
      @if (!empty($body) && is_array($body))
        @foreach ($body['data']['current_lessons'] as $item)
      <div class="col-lg-4 col-sm-6  mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center schedule-card">
            <p class="font-24 fw-bolder text-purple text-center pb-3">{{ $item['start_time'] }} - {{ $item['end_time'] }}
            </p>
           <form action="{{ route('web.live-lesson.update', $item['id']) }}" method="POST">
            @csrf
            <span id="status" class="fw-bolder">{{ $item['status']}}</span>
            <div class="row g-3 align-items-center pt-3 pb-2">
               <div class="col-3 text-start px-1">
                     <label class="col-form-label font-13 fw-bold text-purple">Class Status</label>
                    
               </div>
                <input type="hidden" name="lesson_id" value="{{ $item['id'] }}">
               <div class="col-9">
                     <select name="status" id="statusSelector" class="form-select font-14 fw-500 rounded-3 border-dark" aria-label="Default select example">
                        <option value="Still Not Scheduled" {{ (isset($item['status']) && $item['status'] == 'Still Not Scheduled') ? 'selected' : '' }}>Still Not Scheduled</option>
                        <option value="Scheduled" {{ (isset($item['status']) && $item['status'] == 'Scheduled') ? 'selected' : '' }}>Scheduled</option>
                        <option value="Holiday" {{ (isset($item['status']) && $item['status'] == 'Holiday') ? 'selected' : '' }}>Holiday</option>
                        <option value="Postponed" {{ (isset($item['status']) && $item['status'] == 'Postponed') ? 'selected' : '' }}>Postponed</option>
                     </select>
               </div>
            </div>

            <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder text-dark"> Grade {{ $item['grade_id'] }}</span></p>
            <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder text-dark"> {{ $item['lesson_title'] }}</span></p>
            
            <div class="row g-3 align-items-center pt-3">
               <div class="col-3">
                     <label class="col-form-label text-start font-13 fw-bold text-purple">Zoom Link</label>
               </div>
               <div class="col-9">
                     <input type="text" name="zoom_link" class="form-control font-14 fw-500 rounded-3 border-dark" value="{{ $item['zoom_link'] }}" required>
               </div>
            </div>
            
            <div class="row g-3 align-items-center pt-3">
               <div class="col-3">
                     <label class="col-form-label text-start font-13 fw-bold text-purple">Password</label>
               </div>
               <div class="col-9">
                     <input type="text" name="password" class="form-control font-14 fw-500 rounded-3 border-dark" value="{{ $item['password'] }}" required>
               </div>
            </div>
            
            <div class="row g-3 align-items-center pt-3">
               <div class="col-3 px-lg-0">
                     <label class="col-form-label text-start font-13 fw-bold text-purple">Special Note</label>
               </div>
               <div class="col-9">
                     <textarea name="special_note" class="form-control font-14 fw-500 rounded-3 border-dark" rows="5">{{ $item['special_note'] }}</textarea>
               </div>
            </div>
            
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white">

                 @if ($item['status'] == 'Still Not Scheduled')
                     <button type="submit" class="  text-uppercase font-14 text-white rounded-pill py-2 px-5 bg-primary fw-500 align-items-center   hvr-shrink">SUBMIT</button> 
                 @elseif($item['status'] == 'Scheduled') 
                    <button type="submit" class="  text-uppercase font-14 text-white rounded-pill py-2 px-5 bg-primary fw-500 align-items-center   hvr-shrink">FINISHED THE CLASS</button>
                 @else
                      <button type="submit" class="  text-uppercase font-14 text-white rounded-pill py-2 px-5 bg-primary fw-500 align-items-center   hvr-shrink">RE-SCHEDULE</button> 
                 @endif

            </div>
         </form>

         </div>
      </div>
      @endforeach
    @else
        <p>No schedule data available.</p>
    @endif
      

   </div>
</div>
</div>
@endsection
@section('scripts')
<script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const statusElement = document.getElementById('status');
            const statusSelector = document.getElementById('statusSelector');

            function updateStatus() {
                const selectedStatus = statusSelector.value;
                statusElement.textContent = selectedStatus;

                statusElement.classList.remove('text-danger');
                if (selectedStatus === 'Still Not Scheduled' || selectedStatus === 'Holiday' || selectedStatus === 'Postponed') {
                    statusElement.classList.add('text-danger');
                }
            }

            // Initial update based on the default selected option
            updateStatus();

            // Update status on selection change
            statusSelector.addEventListener('change', updateStatus);
        });
    </script>
@endsection

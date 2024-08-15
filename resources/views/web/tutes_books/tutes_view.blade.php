@extends('web.layouts.app')
@section('content')
@if(session()->has('teacher_data'))
    @php
        $teacherData = session('teacher_data');
    @endphp
@else
     <script>window.location = "{{ route('web.logout') }}";</script>
@endif
{{-- {{ dd($body) }} --}}
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">UPLOAD TUTES AND BOOKS
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
         <p class="font-13 fw-500 text-dark   pb-1"> ශ්‍රේණිය - විෂය - 00 පාඩම - මාතෘකාව - 00 කොටස - සිංහල මාධ්‍යය</p>
         <p class="font-13 fw-500 text-dark   pb-3"> ශ්‍රේණිය - විෂය - වැඩ පොත - වාරය - 00 කොටස - සිංහල මාධ්‍යය</p>
         <p class="font-13 fw-500 text-dark   pb-1"> Subject - Grade - Unit 00 - Topic - Part 00 - English Medium</p>
         <p class="font-13 fw-500 text-dark   pb-3"> Subject - Grade - Work Book - Term - Unit 00 - Topic - Part 00 - English Medium
         </p>
      </div>
      <div class="table-responsive">
         <form action="{{ route('web.tutes_books.store') }}" method="POST"  id="dynamicTableForm" enctype="multipart/form-data">
            @csrf
         <button type="button" id="addRowBtn" class="btn btn-primary">Add Row</button>
            <button type="submit" class="btn btn-success">Submit</button>
         <table id="tutesRecTable" class="table table-striped table-hover table-bordered">
            <thead class="text-white gradient-background text-uppercase fw-light font-14">
               <tr>
                  <th>GRADE AND SUBJECTS</th>
                  <th>TOPIC</th>
                  <th>DOCUMENT OPTIONS</th>
               </tr>
            </thead>
            <tbody class="font-14 align-items-center fw-500" id="dynamicTableBody">
               @foreach ($body['data']['class_tutes'] as $tute)

               <tr>
                  <td>{{ $tute['grade']['gname'] }} - {{ $tute['subject']['sname'] }}</td>

                  <td>{{ $tute['lesson_title'] }} </td>
                  <td>
                     <a class="font-13 text-dark my-1 py-2 px-5 bg-success fw-500 align-items-center rounded-pill" 
                        href="https://guruniwasa.s3.amazonaws.com/{{ $tute['tute_url'] }}" download>
                        Download
                     </a>
                     <a href="{{ route('web.tutes_books.destroy', $tute['id']) }}" class="font-13 text-dark my-1 py-2 px-5 bg-danger fw-500 align-items-center rounded-pill delete-button">Delete</a>

                     <div class="modal fade" id="uploadDocTute" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                    Upload Tutes &  Books
                                 </h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal fade" id="viewDocTute" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                                    View Tutes &  Books
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

               @endforeach
              
            </tbody>
         </table>
         </form>
      </div>
   </div>
</div>
</div>
@endsection
@section('scripts')

<script>
document.addEventListener('DOMContentLoaded', function() {
    const addRowBtn = document.getElementById('addRowBtn');
    const tableBody = document.getElementById('dynamicTableBody');
    let rowExists = false;  // Track whether a row has been added

    addRowBtn.addEventListener('click', function() {
        if (!rowExists) {  // Only add a row if one doesn't exist
            const newRow = document.createElement('tr');

            newRow.innerHTML = `
                <td>
                     <select name="grade_subject" class="form-control" required>
                        <option value="" disabled selected>Select Grade and Subject</option>
                        @foreach($body['data']['subject']['data']['class_subjects'] as $subject)
                              <option value="{{ $subject['id'] }}">
                                 {{ $subject['grade']['gname'] }} - {{ $subject['sname'] }}
                              </option>
                        @endforeach
                     </select>
                  </td>
                <td>
                    <input type="text" name="lesson_title" class="form-control" placeholder="Topic" required>
                    <input type="hidden" name="teacher_id" class="form-control" value="{{ $teacherData['id'] }}" required>
                </td>
                <td>
                  <input type="file" name="document" class="form-control" required>
                </td>
                <td>
                    <button type="button" class="btn btn-danger removeRowBtn">Remove</button>
                </td>
            `;

            tableBody.appendChild(newRow);
            rowExists = true;  // Mark that a row exists
            addRowBtn.disabled = true;  // Disable the "Add Row" button

            // Attach event listener to the remove button
            newRow.querySelector('.removeRowBtn').addEventListener('click', function() {
                tableBody.removeChild(newRow);
                rowExists = false;  // Mark that no row exists
                addRowBtn.disabled = false;  // Re-enable the "Add Row" button
            });
        }
    });
});


</script>
@endsection
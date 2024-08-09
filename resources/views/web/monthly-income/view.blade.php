@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">MONTHLY INCOME
         </h1>
         <p class="font-20 fw-500 text-purple">ABHIMAN WITHAKSHANA
         </p>
      </div>
      <div class="col-lg-3 text-end">
       <p class="pt-3">
        <a href=" {{ route('web.monthly.view') }}" class=" 
        font-12 text-white rounded-pill py-2 px-5 bg-primary fw-500 align-items-center   hvr-shrink"0
        ><i class="fa-solid fa-chart-simple"></i> CHART VIEW
        </a>
       </p>




         <i class="fa-solid fa-file-excel fs-2 text-success mt-3 mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark mt-2"> Download excel</span>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
 
      <div class="row middle-hight">
        <div class="col-12">
         

       
            <div class="table-responsive pt-3">
               <table id="monthIncomeTbl" class="table table-striped table-hover table-bordered">
                  <thead class="text-white gradient-background text-uppercase fw-light font-14">
                     <tr>
                        <th>MONTH </th>
                        <th>TOTAL CLASS FEE AMOUNT</th>
                        <th>ITEM SHOP</th>
                        <th>OTHER EARNINGS</th>
                        <th>TOTAL INCOME</th>
                        <th>RETENTION</th>
                        <th>OTHER DEDUCTIONS</th>
                        <th>TOTAL AMOUNT AFTER DEDUCTIONS</th>
                        <th>TAX </th>
                        <th>GRAND TOTAL</th>
                        <th>SALARY SLIP</th>
                         
                        
                     </tr>
                  </thead>
                  <tbody class="font-14 align-items-center text-center fw-500">
                     <tr   >
                        
                        <td>
                            JANUARY
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>(AMOUNT)</td>
                        <td></td>
                        <td><a href="{{ route('web.item-shop')}}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500 
                            align-items-center   hvr-shrink">View
                        </a></td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      
   </div>
</div>
@endsection
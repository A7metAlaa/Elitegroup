@extends('admin.admin_master')
@section('admin')
<div class="container">
 <div class="row">   
   {{-- Brand Add Successfully  --}} 
   <div class="col-md-12">
     <div class="card">
         <div class="card-header "> <span class="font-weight-bold"> Contact Page </span>
          <h2 class="text-center">  Welcome Mr  {{Auth::user() == null ?  '' : Auth::user()->name}}</h2>
          @if(session('success'))
          <div class="alert alert-success" role="alert"> <span class="text-center"> {{session('success')}} </span> </div>
         @endif  
     
     {{--  Info! No Brand Found add now .   --}} 
         @if(session('danger'))
         <div class="alert alert-danger text-primary text-center" role="alert">
              <span class="text-center text-dark fw-bold"> {{session('danger')}} </span> 
         </div>
         @endif  
          <table class="table">
           <thead>
             <tr>
               <th scope="col">SL</th>
               <th scope="col">Contact Name</th>
               <th scope="col">Contact Address</th>
               <th scope="col">Contact Email</th>
               <th scope="col">Contact phone</th>
               <th scope="col">Sent From</th>
                <th scope="col">Action</th>
             </tr>
           </thead>
           <tbody>
   
          @if(count($contactdata) ==0)
     
       
             <!-- Info Alert -->
           <div class="alert alert-info text-center alert-dismissible fade show">
             <strong class=" text-danger fw-bold">Info!</strong> No Data found .
         </div>
    
          @endif
          <a href="{{route('add.contact')}}">
            <button type="button" class="btn btn-primary btn-close" data-bs-dismiss="alert"> Add Contact </button>
          </a>
          @foreach($contactdata as $contact )
          <tr>
                <td scope="row">{{$contact->id}}</td> 
                <td> {{$contact->name    ? $contact->name    : 'No name exist'}}</td>
                <td> {{$contact->address ? $contact->address : 'No address exist'}}</td>
                <td> {{$contact->email   ? $contact->email   : 'No email exist'}}</td>
                <td> {{$contact->phone   ? $contact->phone   : 'No phone exits'}}</td>
                  <td>{{Carbon\Carbon::parse($contact->created_at)->diffForHumans()}}</td>
  
                 <td class="d-flex"> 
                   <a href="{{url('/contact/edit/'.$contact->id)}}" class="btn btn-info"> Edit</a>
                   <a href="{{url('contact/delete/'.$contact->id)}}" class="btn btn-danger mx-2"
                     onclick="return confirm('Are sure you want to delete')"> Delete</a>
                 </td>
              </tr>
      
            </tbody>

             @endforeach
          </table>
           
         </div>
       </div>
     </div>
     
   
</div>

@endsection
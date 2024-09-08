@extends('admin.admin_master')
@section('admin')
<div class="container">
 <div class="row">   
   {{-- Brand Add Successfully  --}} 
   <div class="col-md-12">
     <div class="card">
         <div class="card-header "> <span class="font-weight-bold"> All About  Data </span>
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
               <th scope="col" >Home Title</th>
               <th scope="col" >Short Description</th>
               <th scope="col" >Long Description</th>
                <th scope="col" >Action</th>
             </tr>
           </thead>
           <tbody>
   
          @if(count($homeabout) ==0)
     
       
             <!-- Info Alert -->
           <div class="alert alert-info text-center alert-dismissible fade show">
            <div class="d-flex justify-content-around">
              <div class="justify-content-center">
               <strong class=" text-danger fw-bold">Info!</strong> No About info add now .
            </div>
             
         </div>
         </div>
    
         @endif 
         <a class="mb-2" href="{{route('add.about')}}">
           <button type="button" class="btn btn-info btn-close" data-bs-dismiss="alert">Add About Info</button>
         </a>
      

           @foreach($homeabout as $about)
          <tr>
                <td scope="row">{{$about->id}}</td> 
                <td >{{$about->title ?? $about->title }}</td>
                <td >{{$about->short_dis ??$about->short_dis}}</td>
                <td >{{$about->long_dis ??$about->long_dis }}</td>
   
   
                 <td class="d-flex"> 
                   <a href="{{url('/about/edit/'.$about->id)}}" class="btn btn-info"> Edit</a>
                   <a href="{{url('about/delete/'.$about->id)}}" class="btn btn-danger mx-2"
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
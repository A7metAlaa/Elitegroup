@extends('admin.admin_master')
@section('admin')
<div class="container">
 <div class="row">   
   {{-- Brand Add Successfully  --}} 
   <div class="col-md-12">
     <div class="card">
         <div class="card-header "> <span class="font-weight-bold"> Home Sliders </span>
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
               <th scope="col" width="5%">SL</th>
               <th scope="col" width="15%">Slider Title</th>
               <th scope="col" width="25%">dsecription</th>
               <th scope="col" width="15%">Image</th>
               <th scope="col" width="15%">CreatedAt</th>
               <th scope="col" width="15%">Action</th>
             </tr>
           </thead>
           <tbody>
   
          @if(count($sliders) ==0)
     
       
            <!-- Info Alert -->
           <div class="alert alert-info text-center alert-dismissible fade show">
            <div class="d-flex justify-content-around">
              <div class="justify-content-center">
               <strong class=" text-danger fw-bold">Info!</strong> No Sliders add now .
            </div>
            <a href="{{route('add.slider')}}">
              <button type="button" class="btn btn-info btn-close" data-bs-dismiss="alert">Add Slider</button>
            </a>
         </div>
         </div>
    
         @endif 
         <a class="mb-2" href="{{route('add.slider')}}">
           <button type="button" class="btn btn-info btn-close" data-bs-dismiss="alert">Add Slider</button>
         </a>
      

           @foreach($sliders as $slider)
          <tr>
                <td scope="row">{{$slider->id}}</td> 
                <td >{{$slider->title ?? 'Not Data set'}}</td>
                <td >{{$slider->description ?? 'no description set'}}</td>
                  <td > 
                   <img
                    src={{  asset($slider->image ? $slider->image : '../image/imagenotofound.webp' )}}
                     title="{{$slider->title}}"
                     alt='no image found'
                    style="height:100px; width:100px" > 
        
                 </td> 
  
                  <td>{{Carbon\Carbon::parse($slider->created_at)->diffForHumans()}}</td>
  
                 <td class="d-flex"> 
                   <a href="{{url('/slider/edit/'.$slider->id)}}" class="btn btn-info"> Edit</a>
                   <a href="{{url('slider/delete/'.$slider->id)}}" class="btn btn-danger mx-2"
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